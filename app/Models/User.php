<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * - - - - - Spécifique à Users - - - - -  
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * - - - - - static - - - - -  
     */
    public static $rulesOnCreate = [
        'nom' => 'nullable|min:0|max:75|regex:/^[\p{L}\s\-]+$/u', // Anecdote, le noms le plus long actuellement en France fait 47 lettres(sans espaces):  Pourroy de L'Auberivière de Quinsonas-Oudinot de Reggio
        'prenom' => 'nullable|min:0|max:75|regex:/^[\pL\s\-]+$/u',
        'email' => 'required|min:8|max:75|email|unique:users,email',
        'password' => 'required|min:8|max:255|confirmed',
    ];
    public static $rulesOnUpdate = [
        'nom' => 'nullable|min:0|max:75|regex:/^[\p{L}\s\-]+$/u', // Anecdote, le noms le plus long actuellement en France fait 47 lettres(sans espaces):  Pourroy de L'Auberivière de Quinsonas-Oudinot de Reggio
        'prenom' => 'nullable|min:0|max:75|regex:/^[\p{L}\s\-]+$/u',
        'email' => 'required|min:8|max:75|email',
        'password' => 'nullable|min:8|max:255|confirmed',
    ];

    /**
     * - - - - - fillable - - - - -  
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function promo() {
        return $this->hasMany('App\Models\Promo');
    }

    public function reponse() {
        return $this->belongsToMany('App\Models\Reponse');
    }

}
