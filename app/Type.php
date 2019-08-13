<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model{
    protected $table = 'doctype';
    public $timestamps = false;
    protected $guarded = [];

public function user(){
	return $this->hasMany('App\User', 'type');
}


}
