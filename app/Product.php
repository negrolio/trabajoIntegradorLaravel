<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
  protected $table = 'products';
  protected $fillable = ['title', 'price', 'img_url', 'description'];
}
