<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateStudentRequest extends Request {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|max:128',
            'grade' => 'required|numeric',
        ];
    }
}
