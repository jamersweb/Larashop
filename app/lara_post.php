<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lara_post extends Model
{
    //
    protected $table = 'lara_posts';
    protected $fillable=[
        'id',  'author_id','category_id','title','meta_title','slug','description','status','img'
    ];
}
