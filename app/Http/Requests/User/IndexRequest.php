<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        // TODO: Ver depois
        return [
            'name'   => 'sometimes',
            'email'  => 'sometimes',
            'status' => 'sometimes',
        ];
    }
}
