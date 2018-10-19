<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'dteNaissance',
        'rue',
        'codePostal',
        'ville',
        'telephoneFixe',
        'telephonePortable',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function promo() {
        return $this->hasMany('App\Models\Promo');
    }

    public function reponse() {
        return $this->belongsToMany('App\Models\Reponse');
    }

}
