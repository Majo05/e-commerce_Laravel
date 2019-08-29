<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
      protected $table = 'sales';

      public function users()
      {
         return $this->belongsTo(User::class, 'user_id');
      }

      public function products()
      {
         return $this->belongsToMany(Product::class, 'saledetails','product_id','sale_id')->withPivot('unit')););
      }
}
