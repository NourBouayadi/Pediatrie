@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                  <form action="{{url('forum/edit/message/'.$message->id)}}" method="post" >

                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="">Description</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="description" class="form-control" value="{{$message->description}}">
                    </div>

                    <input type="submit" value="Modifier" class="form-control btn btn-danger">

                </form>
            </div>
        </div>
    </div>
@endsection