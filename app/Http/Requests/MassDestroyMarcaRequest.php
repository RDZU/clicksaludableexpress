<?php

namespace App\Http\Requests;

use App\Models\Marca;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMarcaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('marca_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:marcas,id',
        ];
    }
}
