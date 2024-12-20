<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'librarians';
    protected $fillable = ['username'];  // Define which attributes can be mass assigned

    // Optionally, add timestamps if you want to use created_at/updated_at columns
    public $timestamps = true;

    // Define the inverse relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
