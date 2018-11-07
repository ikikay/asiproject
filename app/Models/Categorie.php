<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

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
    public function themes() {
        return $this->belongsToMany('App\Models\Theme');
    }

    public function questionnaires() {
        return $this->hasMany('App\Models\Questionnaire');
    }

}
