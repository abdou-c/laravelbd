<?php

namespace App\Http\Controllers;

use App\CompteBloque;
use Illuminate\Http\Request;

class CompteBloqueController extends Controller
{
    public function addCompteBloque()
    {
        return view ('compte.CompteBloque');
    }

    publiC funCtion lister()
    {
        $liste_compte = CompteBloque::paginate(5);
        return view('compte.listCompteBloque')->with(['liste_compte'=> $liste_compte]);
    }

    public function editer($id)
    {
        return view ('compte.editBloque');
    }

    public function miseajour()
    {
        return $this->lister();
    }

    public function supprimer($id)
    {
        $compteBloque = CompteBloque::find($id);
        if($compteBloque!=null)
        {
            $compteBloque->delete();
        }
        return $this->lister();
    }

    public function ajouter(Request $request)
    {
        $compteBloque = new CompteBloque();
        $compteBloque->numero = $request->numero;
        $compteBloque->solde = $request->solde;
        $compteBloque->fraisOuverture = $request->fraisOuverture;
        $compteBloque->dateOuverture = $request->dateOuverture;
        $compteBloque->dateFermeture = $request->dateFermeture;
        $compteBloque->agios = $request->agios;
        $compteBloque->remuneration = $request->remuneration;
        $compteBloque->idClient = 1;

        $result = $compteBloque->save();  

        return view('compte.CompteBloque')->with(['confirmation'=>$result]);
    }
}
