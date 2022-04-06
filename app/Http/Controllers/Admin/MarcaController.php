<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMarcaRequest;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Models\Marca;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MarcaController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('marca_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marcas = Marca::with(['media'])->get();

        return view('admin.marcas.index', compact('marcas'));
    }

    public function create()
    {
        abort_if(Gate::denies('marca_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marcas.create');
    }

    public function store(StoreMarcaRequest $request)
    {
        $marca = Marca::create($request->all());

        if ($request->input('image', false)) {
            $marca->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $marca->id]);
        }

        return redirect()->route('admin.marcas.index');
    }

    public function edit(Marca $marca)
    {
        abort_if(Gate::denies('marca_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.marcas.edit', compact('marca'));
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

        return redirect()->route('admin.marcas.index');
    }

    public function show(Marca $marca)
    {
        abort_if(Gate::denies('marca_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marca->load('marcaProducts');

        return view('admin.marcas.show', compact('marca'));
    }

    public function destroy(Marca $marca)
    {
        abort_if(Gate::denies('marca_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marca->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarcaRequest $request)
    {
        Marca::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('marca_create') && Gate::denies('marca_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Marca();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
