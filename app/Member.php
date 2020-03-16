<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    use SoftDeletes;
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'member_categories');
    }
}
