<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = ['name','quantity','unitPrice','totalPrice'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
