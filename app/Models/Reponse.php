<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model {

    public function user() {
        return $this->hasOne('App\Models\User');
    }

    public function reponsePredefinie() {
        return $this->belongsToMany('App\Models\ReponsePredefinie');
    }

    public function question() {
        return $this->belongsTo('App\Models\Question');
    }

}
