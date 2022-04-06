<?php

namespace App\Http\Requests;

use App\Models\Marca;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMarcaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('marca_edit');
    }

    public function rules()
    {
        return [
            'name'        => [
                'string',
                'required',
                'unique:marcas,name,' . request()->route('marca')->id,
            ],
            'image_link'  => [
                'string',
                'nullable',
            ],
            'image_title' => [
                'string',
                'nullable',
            ],
            'image_alt'   => [
                'string',
                'nullable',
            ],
            'slug'        => [
                'string',
                'nullable',
            ],
        ];
    }
}
