<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datauser extends Model
{
    protected $table='users';
    protected $fillable=
    ['name', 'role', 'email', 'password'];

}
