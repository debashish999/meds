<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
      //Table Name
      protected $table = 'orders';

      //Primary key
      public $primaryKey = 'id';

      public $timestamps = false;
}
