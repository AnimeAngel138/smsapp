@extends('layout.app')
@section ('content')
<body id="page-top">
 
    @extends('layout.nav_bar')
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-6 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-lg-12 me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Enrolled student:</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>1,200</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span style="color: rgb(78,115,223);">Teachers:</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>20</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Grade Levels</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-4 mb-4">
                            <div class="card textwhite bg-primary text-white shadow">
                                <div class="card-body"><a class="btn btn-primary border rounded-pill" role="button" href="Grade1_List.html">Grade 1</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 mb-4">
                            <div class="card textwhite bg-primary text-white shadow">
                                <div class="card-body"><a class="btn btn-primary border rounded-pill" role="button" href="Grade1_List.html">Grade 2</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 mb-4">
                            <div class="card textwhite bg-primary text-white shadow">
                                <div class="card-body"><a class="btn btn-primary border rounded-pill" role="button" href="Grade1_List.html">Grade 3</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-4 mb-4">
                            <div class="card textwhite bg-primary text-white shadow">
                                <div class="card-body"><a class="btn btn-primary border rounded-pill" role="button" href="Grade1_List.html">Grade 4</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 mb-4">
                            <div class="card textwhite bg-primary text-white shadow">
                                <div class="card-body"><a class="btn btn-primary border rounded-pill" role="button" href="Grade1_List.html">Grade 5</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 mb-4">
                            <div class="card textwhite bg-primary text-white shadow">
                                <div class="card-body"><a class="btn btn-primary border rounded-pill" role="button" href="Grade1_List.html">Grade 6</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Button-modal-ecommerce.js"></script>
    <script src="assets/js/theme.js"></script>
@endsection
