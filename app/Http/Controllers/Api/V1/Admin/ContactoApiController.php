<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ContactoResource;
use App\Models\Contacto;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contacto_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactoResource(Contacto::all());
    }

    public function show(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactoResource($contacto);
    }

    public function destroy(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contacto->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
