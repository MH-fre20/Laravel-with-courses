<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /* public static function boot()
    {
        //we used static to make the use of :: instead of writing
        // $parent = new boot(); we used static which makes the 
        // sentance look like this prent::boot();
        parent::boot();

        static::deleting(function (BlogPost $blogPost)
        {
            $blogPost->comments()->delete();
        }
    );

    } */
}
