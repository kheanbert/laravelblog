<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateStudentRequest extends Request {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'id' => 'required|exists:students,id',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|max:128',
            'grade' => 'required|numeric',
        ];
    }
}
