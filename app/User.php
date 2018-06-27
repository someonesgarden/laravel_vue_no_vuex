<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'saved'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
      'saved' => 'array'
    ];
}
