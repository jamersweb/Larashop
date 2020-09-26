<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lara_page extends Model
{
    //
   protected $table = 'pages';
    protected $fillable = array(
        'page_id',  'author_id','parent_id','title','page_metatitle','page_slug','description','page_status','page_img'
    );
}
