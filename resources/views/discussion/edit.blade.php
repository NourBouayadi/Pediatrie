@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('forum/'.$discussion->id)}}" method="post" >
                    <input type="hidden" name="_method" value="PUT">
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Titre</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="titre" class="form-control" value="{{ $discussion->titre }}">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="description" class="form-control" value="{{ $discussion->description }}">
                    </div>

                    <input type="submit" value="Modifier" class="form-control btn btn-danger">

                </form>
            </div>
        </div>
    </div>
@endsection