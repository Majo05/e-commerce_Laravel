<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['user_id', 'amount'];
    /*
    public function users(){
    return $this->belongsToMany(User::class,'orderdetails','user_id','order_id')->withPivot('amount');
}
*/
/*
public function users()
{
   return $this->belongsTo(User::class, 'user_id');
}
*/
/*public function user()
    {
    return $this->belongsTo(User::class);
    }
*/
public function products()
{
   return $this->belongsToMany(Product::class, 'orderdetails', 'product_id','order_id')->withPivot('amount');
}

/*
public function products(){
return $this->belongsToMany(Product::class,'orderdetails','product_id','order_id')->withPivot('amount');
}*/

}
