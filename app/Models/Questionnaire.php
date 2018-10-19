<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model {

    public function categories() {
        return $this->belongsToMany('App\Models\Categorie');
    }

    public function questions(){
        return $this->hasMany('App\Models\Question');
    }
    
}
