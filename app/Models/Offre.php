<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model {

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
    public function contrat() {
        return $this->hasOne('App\Models\Contrat');
    }

}
