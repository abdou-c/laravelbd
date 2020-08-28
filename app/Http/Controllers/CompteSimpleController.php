<?php

namespace App\Http\Controllers;

use App\CompteSimple;
use Illuminate\Http\Request;

class CompteSimpleController extends Controller
{
    
    public function addCompteSimple()
    {
        return view ('compte.add');
    }

    publiC funCtion lister()
    {
        $liste_compte = CompteSimple::paginate(5);
        return view ('compte.list', ['liste_compte'=> $liste_compte]);
    }

    public function editer($id)
    {
        return view ('compte.edit');
    }

    public function miseajour()
    {
        return $this->lister();
    }

    public function supprimer($id)
    {
        $compteSimple = CompteSimple::find($id);
        if($compteSimple!=null)
        {
            $compteSimple->delete();
        }
        return $this->lister();
    }

    public function ajouter(Request $request)
    {
        $compteSimple = new CompteSimple();
        $compteSimple->numero = $request->numero;
        $compteSimple->solde = $request->solde;
        $compteSimple->fraisOuverture = $request->fraisOuverture;
        $compteSimple->dateOuverture = $request->dateOuverture;
        $compteSimple->remuneration = $request->remuneration;
        $compteSimple->idClient = 1;

        $result = $compteSimple->save();  

        return view('compte.add',['confirmation'=>$result]);
    }
}
