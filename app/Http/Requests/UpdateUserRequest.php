<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'id' => 'required|exists:users,id',
            'name' => 'required',
            'email' => 'required|email|max:128',
            'password' => 'required|max:128'
        ];
    }
}
