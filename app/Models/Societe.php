<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rules = [
        'libelle' => 'nullable|min:0|max:75|regex:/^[\p{L}\s\-]+$/u',
        'rue' => 'nullable|min:0|max:75|regex:/^[\pL\s\-]+$/u',
        'code_postal' => 'required|min:8|max:75|email|unique:users,email',
        'ville' => 'required|min:8|max:255|confirmed',
        'telephone' => 'required|min:8|max:255|confirmed',
        'email' => 'required|min:8|max:255|confirmed',
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
        'libelle',
        'rue',
        'code_postal',
        'ville',
        'telephone',
        'email',
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function contacts() {
        return $this->belongsToMany('App\Models\Contact');
    }

}
