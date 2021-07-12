@extends('layout.layout')

@section('content')
    <h1>Editer un professeur</h1>
    <form action="{{ route('professeurs.update',$professeur->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Nom</strong>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ $professeur->nom }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Prenom</strong>
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" value="{{ $professeur->prenom }}">
                </div>
            </div>
            <div class="col-md-12 text-center" >
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>

    </form>
@endsection