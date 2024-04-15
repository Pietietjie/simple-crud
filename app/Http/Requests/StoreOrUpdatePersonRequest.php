<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrUpdatePersonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name'    => [],
            'last_name'     => [],
            'sa_id_num'     => [],
            'mobile_number' => [],
            'email'         => [],
            'language'      => [],
            'interests'     => [],
            'interests.*'   => [],
        ];
    }
}
