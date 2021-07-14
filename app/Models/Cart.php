<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
      //Table Name
      protected $table = 'carts';

      //Primary key
      public $primaryKey = 'id';

      protected $fillable = [
        'product_id', 'user_id'
    ];

}
