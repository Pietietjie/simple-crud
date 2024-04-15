<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrUpdatePersonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name'    => ['required'],
            'last_name'     => ['required'],
            'sa_id_num'     => ['required', 'numeric', 'min:13'],
            'mobile_number' => ['required', 'numeric', 'min:10'],
            'email'         => ['required', 'email'],
            'language'      => ['required', 'exists:languages,id'],
            'interests'     => ['required', 'min:1'],
            'interests.*'   => ['exists:interests,id'],
        ];
    }

    public function attributes()
    {
        return [
            'sa_id_num' => 'south african id number',
        ];
    }
}
