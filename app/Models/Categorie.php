<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

    public function themes() {
        return $this->belongsToMany('App\Models\Theme');
    }

    public function questionnaires() {
        return $this->hasMany('App\Models\Questionnaire');
    }
    
}
