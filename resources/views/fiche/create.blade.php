@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('ficheMaladie')}}" method="post" >
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" rows="4"></textarea>
                    </div>


                     <div class="form-group">
                        <label for="">Symptomes</label>
                        <textarea name="symptomes" class="form-control" rows="4"></textarea>
                    </div>
                    
                      <div class="form-group">
                        <label for="">Age</label>
                        <input name="age" class="form-control"></input>
                    </div>


                      <div class="form-group">
                       <label for="">Sexe</label>
                      <input name="sexe" class="form-control"></input>
                    </div>

                     
                     <div class="form-group">
                        <label for="">Traitements Médicaux </label>
                        <textarea name="traitementMedicaux" class="form-control" rows="4"></textarea>
                     </div>


                     <div class="form-group">
                        <label for="">Traitements Non Médicaux </label>
                        <textarea name="traitementNonMedicaux" class="form-control" rows="4"></textarea>
                     </div>

                     <div class="form-group">
                        <label for=""> Recommendation des Pédiatres </label>
                        <textarea name="recommendation" class="form-control" rows="4"></textarea>
                     </div>

                    <div class="form-group">

                        <input type="submit" value="Enregister" class="form-control btn btn-primary">
                    
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection