<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model {

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
        'libelle',
        'nom',
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

}
