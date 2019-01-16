<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rulesOnCreate = [
        'societes_libelle' => 'required|min:0|max:75',
        'societes_rue' => 'nullable|min:0|max:75',
        'societes_code_postal' => 'nullable|min:5|max:5|regex:/^[0-9]*$/',
        'societes_ville' => 'nullable|min:0|max:45',
        'societes_telephone' => 'nullable|min:10|max:10|regex:/^[0-9]*$/',
        'societes_email' => 'required|min:8|max:75|email|unique:societes,societeEmail',
    ];
    public static $rulesOnUpdate = [
        'societes_libelle' => 'required|min:0|max:75',
        'societes_rue' => 'nullable|min:0|max:75',
        'societes_code_postal' => 'nullable|min:5|max:5|regex:/^[0-9]*$/',
        'societes_ville' => 'nullable|min:0|max:45',
        'societes_telephone' => 'nullable|min:10|max:10|regex:/^[0-9]*$/',
        'societes_email' => 'required|min:8|max:75|email', // SPECIFIQUE SUR UPDATE
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
        'societes_libelle',
        'societes_rue',
        'societes_code_postal',
        'societes_ville',
        'societes_telephone',
        'societes_email',
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function contacts() {
        return $this->hasMany('App\Models\Contact');
    }

}
