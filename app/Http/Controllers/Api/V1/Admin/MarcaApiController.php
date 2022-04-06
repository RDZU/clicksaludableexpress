<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Http\Resources\Admin\MarcaResource;
use App\Models\Marca;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarcaApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('marca_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarcaResource(Marca::all());
    }

    public function store(StoreMarcaRequest $request)
    {
        $marca = Marca::create($request->all());

        if ($request->input('image', false)) {
            $marca->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        return (new MarcaResource($marca))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Marca $marca)
    {
        abort_if(Gate::denies('marca_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MarcaResource($marca);
    }

    public function update(UpdateMarcaRequest $request, Marca $marca)
    {
        $marca->update($request->all());

        if ($request->input('image', false)) {
            if (!$marca->image || $request->input('image') !== $marca->image->file_name) {
                if ($marca->image) {
                    $marca->image->delete();
                }

                $marca->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($marca->image) {
            $marca->image->delete();
        }

        return (new MarcaResource($marca))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Marca $marca)
    {
        abort_if(Gate::denies('marca_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marca->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
