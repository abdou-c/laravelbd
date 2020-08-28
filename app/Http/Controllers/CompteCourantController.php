<?php

namespace App\Http\Controllers;

use App\CompteCourant;
use Illuminate\Http\Request;

class CompteCourantController extends Controller
{
    public function addCompteCourant()
    {
        return view ('compte.CompteCourant');
    }

    publiC funCtion lister()
    {
        $liste_compte = CompteCourant::paginate(5);
        return view ('compte.listCompteCourant', ['liste_compte'=> $liste_compte]);
    }

    public function editer($id)
    {
        return view ('compte.editCourant');
    }

    public function miseajour()
    {
        return $this->lister();
    }

    public function supprimer($id)
    {
        $compteCourant = CompteCourant::find($id);
        if($compteCourant!=null)
        {
            $compteCourant->delete();
        }
        return $this->lister();
    }

    public function ajouter(Request $request)
    {
        $compteCourant = new CompteCourant();
        $compteCourant->numero = $request->numero;
        $compteCourant->solde = $request->solde;
        $compteCourant->fraisOuverture = $request->fraisOuverture;
        $compteCourant->dateOuverture = $request->dateOuverture;
        $compteCourant->salaire = $request->salaire;
        $compteCourant->remuneration = $request->remuneration;
        $compteCourant->idClient = 1;

        $result = $compteCourant->save();  

        return view('compte.CompteCourant',['confirmation'=>$result]);
    }
}
