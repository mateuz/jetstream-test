<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassesSnp extends Model
{
    use HasFactory;

    protected $table = 'classes_snps';

    protected $fillable = [
        'class_id', 'snp_id'
    ];

    public function snp()
    {
        return $this->belongsTo('App\Models\Snp', 'snp_id')->withDefault();
    }

    public function class()
    {
        return $this->belongsTo('App\Models\Classe', 'class_id')->withDefault();
    }

}
