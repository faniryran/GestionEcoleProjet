@extends('layout.layout')
@section('content')
    <h1>Liste des classes</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Action</th>
    </tr>  
    @foreach ($classe as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nom }}</td>
        <td>
            <a href="{{ route('bynan', $item->id) }}" class="btn btn-primary">Editer</a>
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