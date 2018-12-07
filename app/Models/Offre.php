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
    public function contrats() {
        return $this->hasMany('App\Models\Contrat');
    }

    public function niveau() {
        return $this->belongsTo('App\Models\Niveau');
    }

    public function contact() {
        return $this->hasOne('App\Models\Contact');
    }

}
