<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model{
    protected $table = 'doctypes';
    public $timestamps = false;
    protected $guarded = [];

/*
public function user(){
	return $this->hasMany('App\User', 'type');
}*/

public function users()
{
    return $this->hasMany(User::class);
}


}
