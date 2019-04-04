<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model {

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
    public function questionnaires() {
        return $this->belongsToMany('App\Models\Questionnaire');
    }

    public function question() {
        return $this->hasMany('App\Models\Question');
    }

}
