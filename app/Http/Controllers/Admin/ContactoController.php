<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContactoRequest;
use App\Models\Contacto;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contacto_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactos = Contacto::all();

        return view('admin.contactos.index', compact('contactos'));
    }

    public function show(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactos.show', compact('contacto'));
    }

    public function destroy(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contacto->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactoRequest $request)
    {
        Contacto::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
