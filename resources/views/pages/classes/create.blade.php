@extends('layout.layout')

@section('content')
    <h1>Formulaire des Classes</h1>
    <form action="{{ route('classes.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>nom</strong>
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="col-md-12 text-center" >
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>

    </form>
@endsection