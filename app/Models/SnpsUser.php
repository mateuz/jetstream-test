<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnpsUser extends Model
{
    use HasFactory;

    protected $table = 'snps_user';

    protected $fillable = [
        'snp_id', 'user_id', 'genotype'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id')->withDefault();
    }

    public function snp()
    {
        return $this->belongsTo('App\Models\Snp', 'snp_id')->withDefault();
    }
}
