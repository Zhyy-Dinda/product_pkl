<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use HasFactory, HasRoles;
    protected $fillable = [
        'image',
        'name',
        'email',
        'role',
        'password'
    ];


    protected $hedden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'email_verified_at'=> 'datetime',
    ];

    public function setPasseordAsttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
