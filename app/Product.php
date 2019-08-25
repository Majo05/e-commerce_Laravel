<?php

namespace App;

use App\Category;
use App\Sale;
use App\Order;
use App\Brand;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $table = 'products';
  //  protected $primaryKey = 'id';
  //  public $timestamps = false;
  protected $guarded = [];



  public function categories()
  {
     return $this->belongsTo(Category::class, 'category_id');
  }

  public function sales()
  {
     return $this->belongsToMany(Sale::class, 'saledetails');
  }

  public function orders()
  {
     return $this->belongsToMany(Order::class, 'orderdetails');
  }

  public function brands()
  {
     return $this->belongsTo(Brand::class, 'marca_id');
  }



}
