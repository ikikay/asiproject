<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model {

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
    public function user() {
        return $this->hasOne('App\Models\User');
    }

    public function reponsesPredefinie() {
        return $this->belongsToMany('App\Models\ReponsePredefinie');
    }

    public function question() {
        return $this->belongsTo('App\Models\Question');
    }

}
