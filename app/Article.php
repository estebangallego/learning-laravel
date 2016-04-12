<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    //
    protected $fillable = [
    	'title',
    	'body',
        'meta_title',
    	'meta_description',
    	'published_at'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }
    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>', Carbon::now());
    }
	public function setPublishedAtAttribute($date)
	{

		if(Input::get('published_at') >= Carbon::now())
		{
			$this->attributes['published_at'] = Carbon::parse($date);
		}
		else
		{
			$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
		}

	}
}
