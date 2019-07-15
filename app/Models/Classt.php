<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Classt extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';


    protected $fillable = [
        'name',
        'technology',
        'grade',
        'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
