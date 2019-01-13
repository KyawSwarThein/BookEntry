<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookEntry extends Model
{
	protected $guarded = [];
    public static $rules = [
    		'name' => 'required|min:4',
    		'author_id' => 'required',
    		'brief' => 'required|min:10',
    		'published_date' => 'required',
    	];
}

