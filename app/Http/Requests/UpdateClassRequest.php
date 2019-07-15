<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateClassRequest extends Request {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'id' => 'required|exists:Classes,id',
            'name' => 'required',
            'technology' => 'required',
            'grade' => 'required|numeric'
        ];
    }
}
