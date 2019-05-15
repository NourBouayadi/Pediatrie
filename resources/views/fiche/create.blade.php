@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" >
                    <!--generer les tokens, pour les cles publiques pour passer les données-->
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" rows="4"></textarea>
                    </div>


                     <div class="form-group">
                        <label for="">Symptomes</label>
                         <select name="symptomes[]" id="selectSymptome" class="js-states form-control mdb-select" multiple="multiple">
                             @foreach($symptomes as $symptome)
                                 <option value="{{$symptome->id}}">{{$symptome->nom}}</option>
                             @endforeach
                         </select>
                    </div>
                    

                      <div class="form-group">
                       <label for="">Sexe</label>
                          <select name="sexe" id="">
                              <option value="fille">fille</option>
                              <option value="garcon">garçon</option>
                              <option value="indifferent">indifferent</option>
                          </select>
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
                        <label for="">Traitements Médicaux </label>
                        <textarea name="traitement_medical" class="form-control" rows="4"></textarea>
                     </div>


                     <div class="form-group">
                        <label for="">Traitements Non Médicaux </label>
                        <textarea name="traitement_nonmedical" class="form-control" rows="4"></textarea>
                     </div>



                    <div class="form-group">

                        <input type="submit" value="Enregister" class="form-control btn btn-primary">
                    
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.min.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            jQuery.noConflict();
            $('#selectSymptome').select2();


            //jQuery.noConflict();$('#my-select').searchableOptionList();
        });
    </script>


@endsection