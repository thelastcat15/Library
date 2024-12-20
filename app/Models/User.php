<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Define the relationship with Admin based on the 'username' column
    public function admin()
    {
        return $this->hasOne(Admin::class, 'username', 'username');
    }
}
