@extends('layout.layout')

@section('content')
    <h1>Ajout d'un élève</h1>
    <form action="{{ route('eleves.store') }}" method="POST">
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
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Adresse</strong>
                    <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Choisir la classe</strong>
                    <select name="id_classe"  class="form-control">
                        @foreach ($classes as $item)
                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12 text-center" >
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>

    </form>
@endsection