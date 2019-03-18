@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <h1>La liste des Patients</h1>
                <div class="pull-right">
                    <a href="{{url('discussions/create')}}" class="btn btn-success">Nouvelle Discussion</a>
                </div>
                <br>
                <table class="table forum table-striped">
                    <head>
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>date pub</th>
                            <th>Categorie</th>
                            <th>Auteur</th>
                            <th>Action</th>
                        </tr>
                    </head>
                    <body>
                    @foreach($discussions as $discussion)
                        <tr>
                            <td>{{$discussion->titre}}</td>
                            <td>{{$discussion->description}}</td>
                            <td>{{$discussion->created_at}}</td>
                            <td><?php echo App\Categorie::find($discussion->categorie_id)->name;?></td>
                            <td><?php echo App\Mom::find($discussion->mom_id)->name;?></td>

                            <td>

                                <form action="{{url('discussions/'.$discussion->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="" class="btn btn-primary">Details</a>
                                    <a href="{{url('discussions/'.$discussion->id.'/edit')}}" class="btn btn-default">Editer</a>

                                    @can('delete', $discussion)
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    @endcan
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </body>

                </table>

            </div>
        </div>
    </div>
@endsection