<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The roles that belong to the user.
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_tag_pivot_table');
    }
}
