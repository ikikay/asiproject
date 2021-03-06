<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model {

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
        return $this->hasMany('App\Models\Offre');
    }

}
