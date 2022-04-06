<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\Admin\ProductResource;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProductResource(Product::with(['marca', 'categories', 'etiquetas'])->get());
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

        return (new ProductResource($product))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Product $product)
    {
        abort_if(Gate::denies('product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProductResource($product->load(['marca', 'categories', 'etiquetas']));
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

        return (new ProductResource($product))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Product $product)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
