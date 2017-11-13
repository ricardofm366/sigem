<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layer extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'layer';

     /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
