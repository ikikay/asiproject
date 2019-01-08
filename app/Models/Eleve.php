<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rules = [
    ];

    /**
     * - - - - - Dates pour Laravels - - - - -  
     */
    public function getDates() {
        return ['created_at', 'updated_at', 'annee_debut', 'annee_fin'];
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
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function user() {
        return $this->hasOne('App\Models\User');
    }

    public function contact() {
        return $this->hasOne('App\Models\Contact');
    }

}
