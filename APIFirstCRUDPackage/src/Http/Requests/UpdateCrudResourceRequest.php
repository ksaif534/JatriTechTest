<?php

namespace Saifkamal\ApiFirstCrudPackage\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCrudResourceRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name'      => 'required|string|max:255',
            'content'   => 'required|string|max:255'
        ];
    }
}