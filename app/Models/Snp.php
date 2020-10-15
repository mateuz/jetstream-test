<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snp extends Model
{
    use HasFactory;

    protected $table = 'snps';

    protected $fillable = [
        'snp', 'gene'
    ];

    protected $dates = [
        'created_at', 'deleted_at'
    ];
}
