<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    //Fillable fields for an Article
    protected $fillable = [
    	'title',
    	'body',
        'meta_title',
    	'meta_description',
    	'published_at',
        
    ];
    // Additional fields to treads as Carbon instances
    protected $dates = ['published_at'];

    // Scope queries to articles that have been published.
    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }
    // Set published_at attribute.
    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>', Carbon::now());
    }

    // Set the published_at attribute.
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

    /**
     * Article is owned by one user.
     * @return Illuminate\Database\Eloquent\Relations\BellongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
