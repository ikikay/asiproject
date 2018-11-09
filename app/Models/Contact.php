<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rules = [
        'fonction' => 'nullable|min:0|max:75|regex:/^[\p{L}\s\-]+$/u',
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
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function eleves() {
        return $this->belongsToMany('App\Models\Eleve');
    }

    public function societe() {
        return $this->hasOne('App\Models\Societe');
    }

    public function offres() {
        return $this->belongsToMany('App\Models\Offre');
    }

}
