@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('forum/'.$fiche->id)}}" method="post" >
                    <input type="hidden" name="_method" value="PUT">
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Titre</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="titre" class="form-control" value="{{ $fiche->titre }}">
                    </div>
              

                    <div class="form-group">
                        <label for="">Description</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="description" class="form-control" value="{{ $fiche->description }}">
                    </div>


                       <div class="form-group">
                        <label for="">Symptomes</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="symptomes" class="form-control" value="{{ $fiche->symptomes }}">
                       </div>
              

                       <div class="form-group">
                        <label for="">Age</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="age" class="form-control" value="{{ $fiche->age }}">
                       </div>


        
                       <div class="form-group">
                        <label for="">Sexe</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="sexe" class="form-control" value="{{ $fiche->sexe }}">
                       </div>



                       <div class="form-group">
                        <label for="">Traitements Médicaux</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="tMédicaux" class="form-control" value="{{ $fiche->traitementMedicaux }}">
                       </div>



                       <div class="form-group">
                        <label for="">Traitements Non Médicaux</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="tNonMédicaux" class="form-control" value="{{ $fiche->traitementNonMedicaux }}">
                       </div>



                       

                       <div class="form-group">
                        <label for="">Recommendation des Pédiatres</label>
                        <!--value : pour l'auto remplissage car ici on modifie le contenu-->
                        <input type="text" name="recommendation" class="form-control" value="{{ $fiche->recommendation }}">
                       </div>






                    <input type="submit" value="Modifier" class="form-control btn btn-danger">

                </form>
            </div>
        </div>
    </div>
@endsection