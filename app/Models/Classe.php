<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'name', 'description', 'nvar'
    ];

    protected $dates = [
        'created_at', 'deleted_at'
    ];

    public function snps()
    {
        return $this->hasMany('App\Models\ClassesSnp', 'class_id');
    }
}
