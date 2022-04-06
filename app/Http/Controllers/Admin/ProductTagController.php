<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProductTagRequest;
use App\Http\Requests\StoreProductTagRequest;
use App\Http\Requests\UpdateProductTagRequest;
use App\Models\ProductTag;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ProductTagController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('product_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productTags = ProductTag::with(['media'])->get();

        return view('admin.productTags.index', compact('productTags'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_tag_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.productTags.create');
    }

    public function store(StoreProductTagRequest $request)
    {
        $productTag = ProductTag::create($request->all());

        if ($request->input('imagen_tag', false)) {
            $productTag->addMedia(storage_path('tmp/uploads/' . basename($request->input('imagen_tag'))))->toMediaCollection('imagen_tag');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $productTag->id]);
        }

        return redirect()->route('admin.product-tags.index');
    }

    public function edit(ProductTag $productTag)
    {
        abort_if(Gate::denies('product_tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.productTags.edit', compact('productTag'));
    }

    public function update(UpdateProductTagRequest $request, ProductTag $productTag)
    {
        $productTag->update($request->all());

        if ($request->input('imagen_tag', false)) {
            if (!$productTag->imagen_tag || $request->input('imagen_tag') !== $productTag->imagen_tag->file_name) {
                if ($productTag->imagen_tag) {
                    $productTag->imagen_tag->delete();
                }

                $productTag->addMedia(storage_path('tmp/uploads/' . basename($request->input('imagen_tag'))))->toMediaCollection('imagen_tag');
            }
        } elseif ($productTag->imagen_tag) {
            $productTag->imagen_tag->delete();
        }

        return redirect()->route('admin.product-tags.index');
    }

    public function show(ProductTag $productTag)
    {
        abort_if(Gate::denies('product_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productTag->load('etiquetasProducts');

        return view('admin.productTags.show', compact('productTag'));
    }

    public function destroy(ProductTag $productTag)
    {
        abort_if(Gate::denies('product_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productTag->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductTagRequest $request)
    {
        ProductTag::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('product_tag_create') && Gate::denies('product_tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ProductTag();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
