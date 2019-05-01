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
        'users_nom' => 'nullable|min:0|max:75|regex:/^[\p{L}\s\-]+$/u', // Anecdote, le noms le plus long actuellement en France fait 47 lettres(sans espaces):  Pourroy de L'Auberivière de Quinsonas-Oudinot de Reggio
        'users_prenom' => 'nullable|min:0|max:75|regex:/^[\pL\s\-]+$/u',
        'users_date_de_naissance' => '',
        'users_rue' => 'nullable|min:0|max:75',
        'users_code_postal' => 'nullable|min:5|max:5|regex:/^[0-9]*$/',
        'users_ville' => 'nullable|min:0|max:45', // Anecdote, le noms de village le plus longs en France fait 45 signes (38 lettres et 7 tirets) "Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson" 
        'users_telephone' => 'nullable|min:10|max:10|regex:/^[0-9]*$/',
        'email' => 'required|min:8|max:75|email|unique:users,email',
        'password' => 'required|min:8|max:255|confirmed',
        'users_status' => 'nullable',
    ];
    public static $rulesOnUpdate = [
        'users_nom' => 'nullable|min:0|max:75|regex:/^[\p{L}\s\-]+$/u', // Anecdote, le noms le plus long actuellement en France fait 47 lettres(sans espaces):  Pourroy de L'Auberivière de Quinsonas-Oudinot de Reggio
        'users_prenom' => 'nullable|min:0|max:75|regex:/^[\pL\s\-]+$/u',
        'users_date_de_naissance' => '',
        'users_rue' => 'nullable|min:0|max:75',
        'users_code_postal' => 'nullable|min:5|max:5',
        'users_ville' => 'nullable|min:0|max:45', // Anecdote, le noms de village le plus longs en France fait 45 signes (38 lettres et 7 tirets) "Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson" 
        'users_telephone' => 'nullable||min:10|max:10|regex:/^[0-9]*$/',
        'email' => 'required|min:8|max:75|email', // SPECIFIQUE SUR UPDATE
        'password' => 'nullable|min:8|max:255|confirmed', // SPECIFIQUE SUR  UPDATE
        'users_status' => 'nullable',
    ];

    /**
     * - - - - - Dates pour Laravels - - - - -  
     */
    public function getDates() {
        return ['created_at', 'updated_at', 'users_date_de_naissance'];
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
        'users_nom',
        'users_prenom',
        'email',
        'password',
        'users_date_de_naissance',
        'users_code_postal',
        'users_telephone',
        'users_ville',
        'users_rue',
        'role'
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function promos() {
        return $this->belongsToMany('App\Models\Promo');
    }

    public function reponses() {
        return $this->hasMany('App\Models\Reponse');
    }

    public function eleve() {
        return $this->belongsTo('App\Models\Eleve');
    }

    public function professeur() {
        return $this->belongsTo('App\Models\Professeur');
    }
    
    public function contacts(){
        return $this->hasMany('App\Models\Contact', 'user_id');
    }
}
