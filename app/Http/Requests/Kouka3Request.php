<?php

namespace App\Http\Requests;

use App\Rules\Myrule;
use Illuminate\Foundation\Http\FormRequest;

class Kouka3Request extends FormRequest
{
    public function rules()
    {
    return [
        'name' => 'required',
        'mail' => 'email',
        'age' => ['numeric', new Myrule()],
    ];
    }
}

