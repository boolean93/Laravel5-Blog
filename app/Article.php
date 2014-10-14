<?php
/**
 * Created by PhpStorm.
 * User: Boolean93
 * Date: 14-10-14
 * Time: 3:17
 */

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Article extends Eloquent{
    protected $table='article';
    public $timestamps = false;
}