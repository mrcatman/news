<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'text', 'category_name',
    ];
	protected $dates = ['created_at','updated_at'];
}
