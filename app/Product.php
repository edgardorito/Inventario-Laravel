<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class Product extends Model
{

    use Sluggable;

    protected $table = "products";

    protected $fillable = ['name','quantity','unitPrice','totalPrice','date','slug'];

    /**
    * Return the sluggable configuration array for this model.
    *
    * @return array
    */
    public function sluggable()
    {
      return [
        'slug' => [
          'source' => 'name'
        ]
      ];
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
