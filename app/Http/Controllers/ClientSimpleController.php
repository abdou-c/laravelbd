<?php

namespace App\Http\Controllers;

use App\ClientCourant;
use App\ClientSimple;
use App\CompteSimple;
use Illuminate\Http\Request;

class ClientSimpleController extends Controller
{
    
    public function addClientSimple()
    {
        return view ('client.add');
    }

    publiC funCtion getAll()
    {
        $liste_client = ClientSimple::paginate(5);
        return view('client.listSimple')->with(['liste_client'=> $liste_client]);
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
        $clientSimple = ClientSimple::find($id);
        if($clientSimple!= null)
        {
            $clientSimple->delete();
        }
        return $this->getAll();
    }

    public function persist(Request $request)
    {   
        $clientSimple = new ClientSimple();
        $clientSimple->nom = $request->nom;
        $clientSimple->prenom = $request->prenom;
        $clientSimple->dateNaissance = $request->dateNaiss;
        $clientSimple->telephone = $request->telephone;
        $clientSimple->cni = $request->cni;
        $clientSimple->sexe = $request->sexe;

        $result = $clientSimple->save();  

        return view('client.add')->with(['confirmation'=>$result]); //1 ou 0
    }

}
