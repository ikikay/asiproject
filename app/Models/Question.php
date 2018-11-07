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
    public function questionnaire() {
        return $this->belongsTo('App\Models\Questionnaire');
    }

    public function reponsesPredefinie() {
        return $this->belongsToMany('App\Models\ReponsePredefinie');
    }

    public function reponses() {
        return $this->belongsToMany('App\Models\Reponse');
    }

}
