<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Subject extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'id';

    protected $fillable = [
        'subject_name',
        'description'
    ];
}
