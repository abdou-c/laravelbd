@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">Liste d'enregistrement des Clients</div>

                {{-- <div class="card-body">
                    <p>Connection Réussie
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="#32ff7e" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                    </p> --}}

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Identifiant</th>
                            <th>Numero</th>
                            <th>Solde</th>
                            <th>Frais ouverture</th>
                            <th>Date ouverture</th>
                            <th>Date Fermeture</th>
                            <th>Remuneration</th>
                            <th>salaire</th>
                            <th>Edition</th>
                            <th>Suppression</th>
                            @foreach($liste_compte as $compte)
                                    <tr>
                                    <td>{{$compte->id}}</td>
                                    <td>{{$compte->numero}}</td>
                                    <td>{{$compte->solde}}</td>
                                    <td>{{$compte->fraisOuverture}}</td>
                                    <td>{{$compte->dateouverture}}</td>
                                    <td>{{$compte->dateFermeture}}</td>
                                    <td>{{$compte->remuneration}}</td>
                                    <td>{{$compte->salaire}}</td>
                                    <td><a class="alert alert-success" href="{{ route('editCompte', ['id'=> $compte->id]) }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                      </svg>Editer</a></td>
                                    <td><a class="alert alert-danger" href="{{ route('deleteCompte', ['id'=> $compte->id]) }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 5v7.5c0 .864.642 1.5 1.357 1.5h9.286c.715 0 1.357-.636 1.357-1.5V5h1v7.5c0 1.345-1.021 2.5-2.357 2.5H3.357C2.021 15 1 13.845 1 12.5V5h1z"/>
                                        <path fill-rule="evenodd" d="M5.5 7.5A.5.5 0 0 1 6 7h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5zM15 2H1v2h14V2zM1 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H1z"/>
                                      </svg>Supprimer</a></td>
                                    </tr>
                            @endforeach
                        </tr>
                    </table>
                    {{ $liste_compte->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection