@extends('layout.layout')
@section('content')
    <h1>Liste des élèves</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th>Classe</th>
        <th>Action</th>
    </tr>  
    @foreach ($eleves as $eleve)
    <tr>
        <td>{{ $eleve->id }}</td>
        <td>{{ $eleve->nom }}</td>
        <td>{{ $eleve->prenom }}</td>
        <td>{{ $eleve->adresse }}</td>
        <td>{{ $eleve->classe->nom }}</td>
        <td>
            <a href="{{ route('bynan', $eleve->id) }}" class="btn btn-primary">Editer</a>
            {{-- <form >
                <a href="" class="btn btn-info">Afficher</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form> --}}
        </td>
    </tr>    
    @endforeach
    </table>
@endsection