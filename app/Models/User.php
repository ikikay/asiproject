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
        'date_de_naissance' => 'nullable|date_format:d/m/Y',
        'rue' => 'nullable|min:0|max:75',
        'code_postal' => 'nullable|min:5|max:5|regex:[0-9]+',
        'ville' => 'nullable|min:0|max:45', // Anecdote, le noms de village le plus longs en France fait 45 signes (38 lettres et 7 tirets) "Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson" 
        'telephone' => 'nullable||min:10|max:10|regex:[0-9]+',
        'email' => 'required|min:8|max:75|email|unique:users,email',
        'password' => 'required|min:8|max:255|confirmed',
        'status' => 'nullable',
    ];
    public static $rulesOnUpdate = [
        'nom' => 'nullable|min:0|max:75|regex:/^[\p{L}\s\-]+$/u', // Anecdote, le noms le plus long actuellement en France fait 47 lettres(sans espaces):  Pourroy de L'Auberivière de Quinsonas-Oudinot de Reggio
        'prenom' => 'nullable|min:0|max:75|regex:/^[\pL\s\-]+$/u',
        'date_de_naissance' => 'nullable|date_format:d/m/Y',
        'rue' => 'nullable|min:0|max:75',
        'code_postal' => 'nullable|min:5|max:5',
        'ville' => 'nullable|min:0|max:45', // Anecdote, le noms de village le plus longs en France fait 45 signes (38 lettres et 7 tirets) "Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson" 
        'telephone' => 'nullable||min:10|max:10|regex:[0-9]+',
        'email' => 'required|min:8|max:75|email', // SPECIFIQUE SUR UPDATE
        'password' => 'nullable|min:8|max:255|confirmed', // SPECIFIQUE SUR  UPDATE
        'status' => 'nullable',
    ];

    /**
     * - - - - - Dates pour Laravels - - - - -  
     */
    public function getDates() {
        return ['created_at', 'updated_at', 'date_de_naissance'];
    }

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
    public function promos() {
        return $this->hasMany('App\Models\Promo');
    }

    public function reponses() {
        return $this->belongsToMany('App\Models\Reponse');
    }

    public function eleve() {
        return $this->belongsTo('App\Models\Eleve');
    }

    public function professeur() {
        return $this->belongsTo('App\Models\Professeur');
    }
}
