<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rules = [
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
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function offres() {
        return $this->belongsToMany('App\Models\Offre');
    }

}
