<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LayerGroup extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'layer_group';
     
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    public function layers()
    {
        return $this->hasMany('App\Layer');
    }
}
