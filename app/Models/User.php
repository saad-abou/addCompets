<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'backuppass',
        'labo',
        'poste',
        'gsm',
        'useracc',
        'adminacc',
        'opirations',
    ];


    public function newaccounsts(){
        return $this->hasMany(newaccounts::class);
    }
    public function verifiedaccounts(){
        return $this->hasMany(verifiedaccounts::class);
    }
    public function userhistorique(){
        return $this->hasMany(userhistorique::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
