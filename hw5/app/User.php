<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable -> [
      'username', 'password', 'email', 'phone', 'is_librarian'
    ];
}
