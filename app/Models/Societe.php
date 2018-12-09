<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rulesOnCreate = [
        'libelle' => 'required|min:0|max:75',
        'rue' => 'nullable|min:0|max:75',
        'code_postal' => 'nullable|min:5|max:5|regex:/^[0-9]*$/',
        'ville' => 'nullable|min:0|max:45',
        'societeTelephone' => 'nullable|min:10|max:10|regex:/^[0-9]*$/',
        'societeEmail' => 'required|min:8|max:75|email|unique:societes,societeEmail',
    ];
    public static $rulesOnUpdate = [
        'libelle' => 'required|min:0|max:75',
        'rue' => 'nullable|min:0|max:75',
        'code_postal' => 'nullable|min:5|max:5|regex:/^[0-9]*$/',
        'ville' => 'nullable|min:0|max:45',
        'societeTelephone' => 'nullable|min:10|max:10|regex:/^[0-9]*$/',
        'societeEmail' => 'required|min:8|max:75|email', // SPECIFIQUE SUR UPDATE
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
        'societeTelephone',
        'societeEmail',
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function contacts() {
        return $this->belongsToMany('App\Models\Contact');
    }

}
