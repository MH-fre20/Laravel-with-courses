<?php

namespace App\Models;

use App\Scopes\LatestScope;
use App\Scopes\LatestScopeComment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function BlogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }

    protected static function boot()
    {
        static::addGlobalScope(new LatestScopeComment);

        parent::boot();

    }
}
