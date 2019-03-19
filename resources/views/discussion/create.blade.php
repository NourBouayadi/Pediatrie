@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('forum')}}" method="post" >
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Catégorie</label>
                        <select name="categorie_id" class="form-control">
                            <option value="1" selected>Grossesse </option>
                            <option value="2">Nouveau-Né </option>
                            <option value="3">Vêtements</option>
                            <option value="4">Jouets </option>
                            <option value="5">Sommeil</option>
                            <option value="6">Santé</option>
                            <option value="7">Bien-être</option>
                            <option value="8">Psychologie</option>
                            <option value="9">Premières Marches</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <input type="text" name="user_id" class="form-control" hidden>
                    </div>
                    <div class="form-group">

                        <input type="text" name="admin_id" class="form-control" hidden>
                    </div>
                    <div class="form-group">

                        <input type="text" name="pediatre_id" class="form-control" hidden>
                    </div>
                    <div class="form-group">

                        <input type="text" name="mom_id" class="form-control" hidden>
                    </div>

                    <div class="form-group">

                        <input type="submit" value="Enregister" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection