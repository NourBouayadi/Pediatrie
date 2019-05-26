@extends('layouts.app')
<link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->

@section('content')
    <title>Tableau de Bord Admin</title>



<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tableau de Bord</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Nombre Membre  Mamans Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class=" font-weight-bold text-primary text-uppercase ">Nombre de Mamans</div>
                                            <div class="h3 col-md-offset-5 mb-0 font-weight-bold text-gray-800"><a href="/forum"> <?php echo App\User::where("id", "!=", 0)
                                                                                                                    ->where("isActive", "=",0)
                                                                                                                    ->where("isPediatre", "=",0)
                                                        ->count();?></a>
                                            </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-female fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Nombre Membre  Pediatre Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class=" font-weight-bold text-primary text-uppercase ">Nombre de Pédiatres</div>
                                        <div class="h3 col-md-offset-5 mb-0 font-weight-bold text-gray-800"><a  href="/annuaire"> <?php echo App\User::where("id", "!=", 0)
                                                ->where("isActive", "=",1)
                                                ->where("isPediatre", "=",1)
                                                    ->count();?></a></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user-md fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Nombre Discussions Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-success text-uppercase mb-1">Nombre de Sujets </div>
                                        <div class="h3 col-md-offset-5 mb-0 font-weight-bold text-gray-800"><a href="/forum"><?php echo App\Discussion::count();?></a></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                                        <div class="h3 col-md-offset-5 mb-0 font-weight-bold text-gray-800"><?php echo App\User::where("isPediatre", "=", 1)->where('isActive', '=', 0)->count();?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-file fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">
                    <h1 class="h3 mb-0 text-gray-800">Table des Demandes</h1>
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-7">
                        <!-- tabeau des demandes des pédiatres  -->

                        <table class="table col-md-12" >
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th >Email</th>
                                <th >Attestations</th>
                                <th >Date de Création</th>
                                <th > Action</th>
                            </tr>
                            </thead>
                            <tbody class="table ">
                            @foreach($pediatres as $pediatre)
                                <tr class="table ">

                                    <td >{{$pediatre->name}}</td>
                                    <td >{{$pediatre->email}}</td>
                                    <td ><a class="btn btn-primary" target="_blank" href="/attestations/{{$pediatre->id}}.pdf' ?>">attestation</a></td>
                                    <td >{{$pediatre->created_at}}</td>
                                    <td >
                                       <div class="row">

                                           <a href="/mail/{{$pediatre->id}}" class="btn btn-secondary" aria-hidden="true">
                                               <i class="fa fa-envelope" aria-hidden="true"></i>
                                           </a>

                                           <a href="{{ action('AdminController@approve', ['id' => $pediatre->id]) }}" class="btn btn-success">
                                                   <i class="fa fa-check" style="color:#FFFFFF;" aria-hidden="true"></i>
                                           </a>

                                           <form action="{{url('dashboard/'.$pediatre->id)}}" method="post" style="margin-bottom: 0;">
                                               {{csrf_field()}}
                                               {{method_field('DELETE')}}
                                               <button type ="submit" class="btn btn-danger" onclick="return myFunction();"> <i class="fa fa-times" aria-hidden="true"></i></button>
                                           </form>

                                       </div>




                                    </td>


                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>

                    <!-- Pie Chart -->

                </div>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('assets/js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('assets/js/chart-area-demo.js')}}"></script>
<script src="{{asset('assets/js/chart-pie-demo.js')}}"></script>
<script>
    function myFunction() {
        if(!confirm("Voulez-vous supprimer la demande ?"))
            event.preventDefault();
    }
</script>
@endsection