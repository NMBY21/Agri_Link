<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait; // Add this line

class User extends Authenticatable
{
    use LaratrustUserTrait, HasApiTokens, HasFactory, Notifiable; // Use this trait

    protected $fillable = [
        'name',
        'email',
        'password',
        'number_phone',
        'address_user',
        'status_user',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

