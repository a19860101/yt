<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['title','content'];
}
/*
php artisan make:migration 
add_deleted_at_to_posts --table=posts
*/