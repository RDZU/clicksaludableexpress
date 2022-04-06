<?php

namespace App\Http\Requests;

use App\Models\Contacto;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contacto_edit');
    }

    public function rules()
    {
        return [];
    }
}
