@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire d'enregistrement des Clients</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{-- 
                    <p>Connection Réussie
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="#32ff7e" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                    </p> --}}


                    @if(isset($confirmation))
                    @if($confirmation == 1)
                        <div class="alert alert-success" >Client ajouté avec succès!</div>
                    @else
                        <div class="alert alert-danger" >Client non ajouté!</div>
                    @endif
                @endif
                
                <form method="POST" action="{{route('addClientCourant')}}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom:</label>
                            <input class="form-control" type="text" name="nom" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">Prenom:</label>
                            <input class="form-control" type="text" name="prenom" id="prenom">
                        </div>
                    

                        <div class="form-group">
                            <label class="control-label" for="date">Date de Naissance:</label>
                            <input class="form-control" type="date" name="dateNaiss" id="dateNaiss">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="salaire">Salaire:</label>
                            <input class="form-control" type="number" name="salaire" id="salaire">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="telephone">Telepone:</label>
                            <input class="form-control" type="number" name="telephone" id="telephone">
                        </div>
                    

                        <div class="form-group">
                            <label class="control-label" for="cni">Numero d'identification nationale:</label>
                            <input class="form-control" type="number" name="cni" id="cni">
                        </div>
                    

                        <div class="form-group">
                            <label class="control-label" for="sexe">Definissez votre sexe:</label>
                            <select  class="form-control" name="sexe" id="">
                                <option value="H">Homme</option>
                                <option value="F">Femme</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="submit" id="submit" value="Enregistrer">
                            <input class="btn btn-danger" type="reset" name="reset" id="reset" value="Annuler">
                        </div>
                        
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
