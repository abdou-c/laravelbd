@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire d'enregistrement des Comptes Simples et Xeweel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- <p>Connection Réussie
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="#32ff7e" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                    </p> --}}

                <form method="POST" action="{{route('addCompteBloque')}}">
                        @csrf


                        @if(isset($confirmation))
                        @if($confirmation == 1)
                            <div class="alert alert-success" >Compte ajouté avec succès!</div>
                        @else
                            <div class="alert alert-danger" >Compte non ajouté!</div>
                        @endif
                        @endif
                    
                        <div class="form-group">
                            <label class="control-label" for="numero">Numero du compte:</label>
                            <input class="form-control" type="number" name="numero" id="numero">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="solde">Solde du compte:</label>
                            <input class="form-control" type="number" name="solde" id="solde">
                        </div>
                    

                        <div class="form-group">
                            <label class="control-label" for="fraisOuverture">Frais d'ouverture:</label>
                            <input class="form-control" type="number" name="fraisOuverture" id="fraisOuverture">
                        </div>
                    

                        <div class="form-group">
                            <label class="control-label" for="dateOuverture">Date d'ouverture:</label>
                            <input class="form-control" type="date" name="dateOuverture" id="dateOuverture">
                        </div>

                        
                        <div class="form-group">
                            <label class="control-label" for="dateFermeture">Date Fermeture:</label>
                            <input class="form-control" type="date" name="dateFermeture" id="dateFermeture">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="agios">Agios:</label>
                            <input class="form-control" type="number" name="agios" id="agios">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="remuneration">Remuneration:</label>
                            <input class="form-control" type="number" name="remuneration" id="remuneration">
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

