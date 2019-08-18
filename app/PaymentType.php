<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
  protected $table = 'paymentypes';
    //
}

public function sales()
{
    return $this->hasMany(Sale::class);
}
