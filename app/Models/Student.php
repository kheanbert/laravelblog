<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'email',
        'grade',
        'description',
        'age'
    ];
}