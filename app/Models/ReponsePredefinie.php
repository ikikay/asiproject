<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReponsePredefinie extends Model {

    protected $table = 'reponses_predefinies';

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
	return $this->belongsTo('App\Models\Question');
    }

    public function reponses() {
	return $this->hasMany('App\Models\Reponse');
    }

}
