<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
// use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Post extends Model
{
    protected $table = "blog_posts";
    protected $primaryKey = "post_id";
    protected $fillable = [ "slug", "articleTitle", "author", "body"];
}
