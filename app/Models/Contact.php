<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rules = [
        'fonction' => 'required|min:5|max:75',
        'nom' => 'required|min:5|max:75|regex:/^[\p{L}\s\-]+$/u',
        'prenom' => 'required|min:5|max:75|regex:/^[\p{L}\s\-]+$/u',
        'contactTelephone' => 'nullable|min:10|max:10|regex:/^[0-9]*$/',
        'contactEmail' => 'required|min:8|max:75|email',
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
        'fonction',
        'nom',
        'prenom',
        'contactTelephone',
        'contactEmail',
        'societe_id',
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function eleves() {
        return $this->belongsToMany('App\Models\Eleve');
    }

    public function societe() {
        return $this->belongsTo('App\Models\Societe');
    }

    public function offres() {
        return $this->hasMany('App\Models\Offre');
    }

}
