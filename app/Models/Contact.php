<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rules = [
        'contacts_fonction' => 'required|min:5|max:75',
        'contacts_nom' => 'required|min:5|max:75|regex:/^[\p{L}\s\-]+$/u',
        'contacts_prenom' => 'required|min:5|max:75|regex:/^[\p{L}\s\-]+$/u',
        'contacts_telephone' => 'nullable|min:10|max:10|regex:/^[0-9]*$/',
        'contacts_email' => 'required|min:8|max:75|email',
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
        'contacts_fonction',
        'contacts_nom',
        'contacts_prenom',
        'contacts_telephone',
        'contacts_email',
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
