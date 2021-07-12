@extends('layout.layout')

@section('content')
    <h1>Editer une classe</h1>
    {{ $classe->nom }}
    {{-- <form action="{{ route('classes.update',$classe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Nom</strong>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ $classe->nom }}">
                </div>
            </div>
                        <div class="col-md-12 text-center" >
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
    </form> --}}
@endsection