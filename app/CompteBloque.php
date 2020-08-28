<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteBloque extends Model
{
    protected $fillable = array('numero', 'solde', 'fraisOuverture', 'dateOuverture', 'dateFermeture', 'remuneration', 'agios','idClient');

    public static $rules = array(                           
                                'numero'=>'required|min:9',
                                'solde'=>'required|min:9',
                                'fraisOuverture'=>'required|min:4',
                                'dateOuverture'=>'required|min:8',
                                'dateFermeture'=>'required|min:8',
                                'remuneration'=>'required|min:4',
                                'agios'=>'required|min:4',
                                'idClient'=>'required|integer',
                                );

    
     public function client()
    {
        return $this->belongsTo('App\ClientBloque');
    }
}
