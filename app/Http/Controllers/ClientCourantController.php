<?php

namespace App\Http\Controllers;

use App\ClientCourant;
use Illuminate\Http\Request;

class ClientCourantController extends Controller
{
     
    public function addClientCourant()
    {
        return view ('client.ClientCourant');
    }

    publiC funCtion getAll()
    {
        $liste_client = ClientCourant::paginate(5);
        return view ('client.listCourant')->with(['liste_client'=> $liste_client]);
    }

    public function edit($id)
    {
        return view ('client.edit');
    }

    public function update()
    {
        return $this->getAll();
    }

    public function delete($id)
    {
        $clientCourant = ClientCourant::find($id);
        if($clientCourant!= null)
        {
            $clientCourant->delete();
        }
        return $this->getAll();
    }

    public function persist(Request $request)
    {
        $clientCourant = new ClientCourant();
        $clientCourant->nom = $request->nom;
        $clientCourant->prenom = $request->prenom;
        $clientCourant->dateNaissance = $request->dateNaiss;
        $clientCourant->salaire = $request->salaire;
        $clientCourant->telephone = $request->telephone;
        $clientCourant->cni = $request->cni;
        $clientCourant->sexe = $request->sexe;

        $result = $clientCourant->save();  

        return view('client.ClientCourant',['confirmation'=>$result]); //1 ou 0
    }
}
