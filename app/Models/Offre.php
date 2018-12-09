<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rules = [
        'poste' => 'required|min:5|max:75',
        'date_offre' => 'required|date_format:d/m/Y',
        'description' => 'required',
        'mois_experience' => 'required|regex:/^[0-9]*$/',
    ];

    /**
     * - - - - - Dates pour Laravels - - - - -  
     */
    public function getDates() {
        return ['created_at', 'updated_at', 'date_offre'];
    }

    /**
     * - - - - - fillable - - - - -  
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'poste',
        'date_offre',
        'description',
        'niveau_id',
        'mois_experience',
        'contact_id',
    ];

    /**
     * - - - - - Relations - - - - -  
     */
    public function contrats() {
        return $this->hasMany('App\Models\Contrat');
    }

    public function niveau() {
        return $this->belongsTo('App\Models\Niveau');
    }

    public function contact() {
        return $this->belongsTo('App\Models\Contact');
    }

}
