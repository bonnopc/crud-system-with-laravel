<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class stuRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fname'=> 'required|alpha',
            'lname'=> 'required|alpha',
            'uname'=> 'required|alpha',
            'email' => 'required|email',
            'pass'=> 'required|alpha',
        ];
    }
}
