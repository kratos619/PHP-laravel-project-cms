<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
use SoftDeletes;

protected $date = ['deleted_at'];
//     //
// protected $table = "posts";
// protected $pk = "id";

}
