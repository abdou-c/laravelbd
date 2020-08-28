<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteSimple extends Model
{
    protected $fillable = array('numero', 'solde', 
    'fraisOuverture', 'dateOuverture', 'remuneration','idClient');

    public static $rules = array(                           
                                'numero'=>'required|min:9',
                                'solde'=>'required|min:9',
                                'fraisOuverture'=>'required|min:4',
                                'dateOuverture'=>'required|min:9',
                                'remuneration'=>'required|min:4',
                                'idClient'=>'required|integer',
                                );

    
     public function client()
    {
        return $this->belongsTo('App\ClientSimple');
    }
}
