<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReponsePredefinie extends Model {

    public function question(){
        return $this->hasOne('App\Models\Question');
    }
    
    public function reponse() {
        return $this->belongsToMany('App\Models\Reponse');
    }
    
}
