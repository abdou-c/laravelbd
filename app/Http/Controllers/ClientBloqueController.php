<?php

namespace App\Http\Controllers;

use App\ClientBloque;
use Illuminate\Http\Request;

class ClientBloqueController extends Controller
{
    public function addClientBloque()
    {
        return view('client.ClientBloque');
    }

    publiC funCtion lister()
    {
        $liste_client = ClientBloque::paginate(5);
        // var_dump($liste_client);
        // die;
        return view('client.listBloque')->with(['liste_client'=>$liste_client]);
    }

    public function editer($id)
    {
        return view ('client.editBloque');
    }

    public function miseajour()
    {
        return $this->lister();
    }

    public function supprimer($id)
    {
        $clientBloque = ClientBloque::find($id);
        if($clientBloque!=null)
        {
            $clientBloque->delete();
        }
        return $this->lister();
    }

    public function ajouter(Request $request)
    {
        $clientBloque = new ClientBloque();
        $clientBloque->nom = $request->nom;
        $clientBloque->prenom = $request->prenom;
        $clientBloque->dateNaissance = $request->dateNaiss;
        $clientBloque->telephone = $request->telephone;
        $clientBloque->cni = $request->cni;
        $clientBloque->sexe = $request->sexe;

        $result = $clientBloque->save();  

        return view('client.ClientBloque')->with(['confirmation'=>$result]); //1 ou 0
    }
}
