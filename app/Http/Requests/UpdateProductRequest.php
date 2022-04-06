<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_edit');
    }

    public function rules()
    {
        return [
            'name'                     => [
                'string',
                'required',
                'unique:products,name,' . request()->route('product')->id,
            ],
            'description'              => [
                'required',
            ],
            'marca_id'                 => [
                'required',
                'integer',
            ],
            'categories.*'             => [
                'integer',
            ],
            'categories'               => [
                'array',
            ],
            'etiquetas.*'              => [
                'integer',
            ],
            'etiquetas'                => [
                'array',
            ],
            'tipo_presentacion'        => [
                'string',
                'nullable',
            ],
            'slug'                     => [
                'string',
                'nullable',
            ],
            'envase'                   => [
                'string',
                'required',
            ],
            'cantidad'                 => [
                'string',
                'required',
            ],
            'largo'                    => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'ancho'                    => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'alto'                     => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'peso'                     => [
                'string',
                'required',
            ],
            'descripcion_home'         => [
                'string',
                'nullable',
            ],
            'image_frontal_link'       => [
                'string',
                'nullable',
            ],
            'image_frontal_title'      => [
                'string',
                'nullable',
            ],
            'image_frontal_alt'        => [
                'string',
                'nullable',
            ],
            'image_reverso_link'       => [
                'string',
                'nullable',
            ],
            'image_reverso_title'      => [
                'string',
                'nullable',
            ],
            'image_reverso_alt'        => [
                'string',
                'nullable',
            ],
            'photo_min_reverso_link'   => [
                'string',
                'nullable',
            ],
            'photo_link_reverso_title' => [
                'string',
                'nullable',
            ],
            'photo_link_reverso_alt'   => [
                'string',
                'nullable',
            ],
            'photo_min_frontal_link'   => [
                'string',
                'nullable',
            ],
            'photo_link_frontal_title' => [
                'string',
                'nullable',
            ],
            'photo_link_frontal_alt'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
