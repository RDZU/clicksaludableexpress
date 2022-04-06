<?php

namespace App\Http\Requests;

use App\Models\ProductTag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductTagRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_tag_create');
    }

    public function rules()
    {
        return [
            'name'      => [
                'string',
                'required',
            ],
            'tag_link'  => [
                'string',
                'nullable',
            ],
            'tag_title' => [
                'string',
                'nullable',
            ],
            'tag_alt'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
