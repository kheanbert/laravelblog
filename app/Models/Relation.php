<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Relation extends Model
{
    protected $table = 'relation';
    protected $primaryKey = 'id';

    protected $fillable = [
        'class_id',
        'subject_id'
    ];
}
