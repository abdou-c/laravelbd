<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteCourant extends Model
{
    protected $fillable = array('numero', 'solde', 'fraisOuverture', 'dateOuverture', 'remuneration', 'salaire','idClient');

    public static $rules = array(                           
                                'numero'=>'required|min:9',
                                'solde'=>'required|min:9',
                                'fraisOuverture'=>'required|min:4',
                                'dateOuverture'=>'required|min:8',
                                'remuneration'=>'required|min:4',
                                'salire'=>'required|min:10',
                                'idClient'=>'required|integer'
                                );

    
     public function client()
    {
        return $this->belongsTo('App\ClientCourant');
    }
}
