@extends('layout.layout')

@section('content')
    <h1>Formulaire d'ajout des profs</h1>
    <form action="{{ route('professeurs.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Nom</strong>
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Prenom</strong>
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                </div>
            </div>
            <div class="col-md-12 text-center" >
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>

    </form>
@endsection