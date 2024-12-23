<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function profiles(){
        return $this->hasOne(Profile::class);
    }
    public function hasRole($role)
    {
    return $this->role === $role;
    }
}


