<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreProductTagRequest;
use App\Http\Requests\UpdateProductTagRequest;
use App\Http\Resources\Admin\ProductTagResource;
use App\Models\ProductTag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductTagApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('product_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProductTagResource(ProductTag::all());
    }

    public function store(StoreProductTagRequest $request)
    {
        $productTag = ProductTag::create($request->all());

        if ($request->input('imagen_tag', false)) {
            $productTag->addMedia(storage_path('tmp/uploads/' . basename($request->input('imagen_tag'))))->toMediaCollection('imagen_tag');
        }

        return (new ProductTagResource($productTag))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ProductTag $productTag)
    {
        abort_if(Gate::denies('product_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProductTagResource($productTag);
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

        return (new ProductTagResource($productTag))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ProductTag $productTag)
    {
        abort_if(Gate::denies('product_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productTag->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
