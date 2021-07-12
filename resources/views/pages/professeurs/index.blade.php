@extends('layout.layout')
@section('content')
    <h1>Liste des professeurs</h1>
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
        <th width="350px">Action</th>
    </tr>  
    @foreach ($profs as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nom }}</td>
        <td>{{ $item->prenom }}</td>
        <td>
            <form action="">
                <a href="" class="btn btn-info">Afficher</a>
                <a href="{{ route('professeurs.edit',$item->id) }}" class="btn btn-primary">Editer</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>    
    @endforeach
    </table>
@endsection