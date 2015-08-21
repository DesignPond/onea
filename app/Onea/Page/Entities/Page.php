<?php

namespace App\Onea\Page\Entities;

use Baum\Node;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
* Page
*/
class Page extends Node {

    use SoftDeletes;

    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'pages';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content','parent_id','user_id','lft','rgt','depth'];

}
