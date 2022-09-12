<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $guarded = ['user_id'];
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        'created_at',
        'update_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'update_at';
}
