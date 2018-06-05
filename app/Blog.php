<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   	public index(Request $reqeuest)
	{
		return view('blog.index', ['blogs' => Blog::all());
	}
}
