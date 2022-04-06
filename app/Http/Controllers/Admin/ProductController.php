<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Marca;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::with(['marca', 'categories', 'etiquetas', 'media'])->get();
//dd($products->etiquetas->name);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marcas = Marca::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = ProductCategory::all()->pluck('name', 'id');

        $etiquetas = ProductTag::all()->pluck('name', 'id');

        return view('admin.products.create', compact('marcas', 'categories', 'etiquetas'));
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->all());
        $product->categories()->sync($request->input('categories', []));
        $product->etiquetas()->sync($request->input('etiquetas', []));

        if ($request->input('photo', false)) {
            $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($request->input('photo_reverso', false)) {
            $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo_reverso'))))->toMediaCollection('photo_reverso');
        }

        if ($request->input('photo_min_reverso', false)) {
            $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo_min_reverso'))))->toMediaCollection('photo_min_reverso');
        }

        if ($request->input('photo_min_frontal', false)) {
            $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo_min_frontal'))))->toMediaCollection('photo_min_frontal');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $product->id]);
        }

        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marcas = Marca::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = ProductCategory::all()->pluck('name', 'id');

        $etiquetas = ProductTag::all()->pluck('name', 'id');

        $product->load('marca', 'categories', 'etiquetas');

        return view('admin.products.edit', compact('marcas', 'categories', 'etiquetas', 'product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        $product->categories()->sync($request->input('categories', []));
        $product->etiquetas()->sync($request->input('etiquetas', []));

        if ($request->input('photo', false)) {
            if (!$product->photo || $request->input('photo') !== $product->photo->file_name) {
                if ($product->photo) {
                    $product->photo->delete();
                }

                $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($product->photo) {
            $product->photo->delete();
        }

        if ($request->input('photo_reverso', false)) {
            if (!$product->photo_reverso || $request->input('photo_reverso') !== $product->photo_reverso->file_name) {
                if ($product->photo_reverso) {
                    $product->photo_reverso->delete();
                }

                $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo_reverso'))))->toMediaCollection('photo_reverso');
            }
        } elseif ($product->photo_reverso) {
            $product->photo_reverso->delete();
        }

        if ($request->input('photo_min_reverso', false)) {
            if (!$product->photo_min_reverso || $request->input('photo_min_reverso') !== $product->photo_min_reverso->file_name) {
                if ($product->photo_min_reverso) {
                    $product->photo_min_reverso->delete();
                }

                $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo_min_reverso'))))->toMediaCollection('photo_min_reverso');
            }
        } elseif ($product->photo_min_reverso) {
            $product->photo_min_reverso->delete();
        }

        if ($request->input('photo_min_frontal', false)) {
            if (!$product->photo_min_frontal || $request->input('photo_min_frontal') !== $product->photo_min_frontal->file_name) {
                if ($product->photo_min_frontal) {
                    $product->photo_min_frontal->delete();
                }

                $product->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo_min_frontal'))))->toMediaCollection('photo_min_frontal');
            }
        } elseif ($product->photo_min_frontal) {
            $product->photo_min_frontal->delete();
        }

        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product->load('marca', 'categories', 'etiquetas');

        return view('admin.products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('product_create') && Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Product();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
