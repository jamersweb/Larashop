<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lara_page extends Model
{
    //
   protected $table = 'lara_page';
    protected $fillable=[
        'id',  'author_id','category_id','title','meta_title','slug','description','status','img'
    ];
}
