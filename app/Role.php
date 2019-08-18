<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model{
    protected $table = 'roles';
    public $timestamps = false;
    protected $guarded = [];
}


public function users()
{
    return $this->hasMany(User::class);
}
