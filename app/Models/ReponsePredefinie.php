<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReponsePredefinie extends Model {

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
    public function question() {
        return $this->hasOne('App\Models\Question');
    }

    public function reponses() {
        return $this->belongsToMany('App\Models\Reponse');
    }

}
