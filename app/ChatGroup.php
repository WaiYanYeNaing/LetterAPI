<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatGroup extends Model
{
    protected $fillable = [
        'member_id',
        'group_id'
    ];
    use SoftDeletes;
}
