<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassesUser extends Model
{
    use HasFactory;

    protected $table = 'classes_user';

    protected $fillable = [
        'class_id', 'user_id', 'values'
    ];

    public function class()
    {
        return $this->belongsTo('App\Models\Classe', 'class_id')->withDefault();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id')->withDefault();
    }
}
