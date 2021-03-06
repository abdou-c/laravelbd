<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBloque extends Model
{
    protected $fillable = array('nom', 'prenom', 'dateNaissance', 'telephone', 'cni', 'sexe');
    
    public static $rules = array('nom'=>' required|min:2',
                                    'prenom'=>' required|min:3',
                                    'dateNaissance'=>' required|min:8',
                                    'telephone'=>' required|min:9',
                                    'cni'=>' required|min:10', 
                                    'sexe'=>' required|min:8',
                                    'salaire'=>'required|min:10'       
                                );

public function compte()
{
return $this->hasMany('App\CompteBloque');
}
}
