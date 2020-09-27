<?php

namespace App\Models;

use App\Components\User\Models\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The roles that belong to the user.
     */
    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'article_tag_pivot_table');
    }

    /**
     * The roles that belong to the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
