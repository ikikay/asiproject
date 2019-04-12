<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

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
    public function theme() {
        return $this->belongsTo('App\Models\Theme');
    }

    public function reponsesPredefinie() {
        return $this->hasMany('App\Models\ReponsePredefinie');
    }

    public function reponses() {
        return $this->hasMany('App\Models\Reponse');
    }

}
