<?php

namespace App\Http\Requests;

use App\Models\Marca;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMarcaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('marca_create');
    }

    public function rules()
    {
        return [
            'name'        => [
                'string',
                'required',
                'unique:marcas',
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
