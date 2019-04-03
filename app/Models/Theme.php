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
    public function questions() {
        return $this->hasMany('App\Models\Question');
    }

    public function questionnaire() {
        return $this->belongsTo('App\Models\Questionnaire');
    }

}
