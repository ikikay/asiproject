<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model {

    /**
     * - - - - - static - - - - -  
     */
    public static $rules = [
        'offres_poste' => 'required|min:5|max:75',
        'offres_date_offre' => 'required|date_format:d/m/Y',
        'offres_description' => 'required',
        'offres_mois_experience' => 'required|regex:/^[0-9]*$/',
    ];

    /**
     * - - - - - Dates pour Laravels - - - - -  
     */
    public function getDates() {
        return ['created_at', 'updated_at', 'offres_date_offre'];
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
        'offres_poste',
        'offres_date_offre',
        'offres_description',
        'offres_mois_experience',
        'niveau_id',
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
