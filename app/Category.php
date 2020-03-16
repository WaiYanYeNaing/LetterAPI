<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = [
        'category'
    ];
    use SoftDeletes;
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}
