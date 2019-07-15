<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'email' => 'required|email|max:128',
            'password' => 'required|max:128',
        ];
    }
}
