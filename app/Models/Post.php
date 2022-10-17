<?php

namespace App\Models;

use App\Accessors\AccessorsPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, AccessorsPost;

    protected $fillable =['title','content','team_id'];

}
