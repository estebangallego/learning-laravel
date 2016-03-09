<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Assign protected fields
    protected $fillable = [
    	'comment_body',
    	'published_at',
    	'user_id'
    ];
}
