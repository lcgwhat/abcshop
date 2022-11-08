<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public function getAddresses()
    {
        return $this->hasMany(UserAddress::class);
    }
}
