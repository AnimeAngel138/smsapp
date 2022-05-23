@extends('layout.app')
@section('content')
<body id="page-top">
    <div id="wrapper">
        @extends('layout.nav_bar')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Master List</h3>
                    <div class="card shadow">
                        <div class="card-header py-3" style="height: 58.4444px;">
                            <div class="row">
                                <div class="col text-start align-self-center">
                                    <p class="text-primary m-0 fw-bold">Student Info</p>
                                </div>
                                <div class="col text-end"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#" style="margin: 2px;padding: 7px 21px;"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Import Excel Sheet</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>LRN</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Grade Level</th>
                                            <th>Section</th>
                                            <th>Enroll Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>431110362501<br></td>
                                            <td>Airi Satou</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2008/11/28</td>
                                        </tr>
                                        <tr>
                                            <td>232549531080<br></td>
                                            <td>Angelica Ramos</td>
                                            <td>7</td>
                                            <td>Grade 1<br></td>
                                            <td>Section A<br></td>
                                            <td>2009/10/09<br></td>
                                        </tr>
                                        <tr>
                                            <td>147042562804<br></td>
                                            <td>Ashton Cox</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2009/01/12<br></td>
                                        </tr>
                                        <tr>
                                            <td>294805778381<br></td>
                                            <td>Bradley Greer</td>
                                            <td>6</td>
                                            <td>Grade 1<br></td>
                                            <td>Section A</td>
                                            <td>2012/10/13<br></td>
                                        </tr>
                                        <tr>
                                            <td>067952350662<br></td>
                                            <td>Brenden Wagner</td>
                                            <td>6</td>
                                            <td>Grade 1<br></td>
                                            <td>Section A</td>
                                            <td>2011/06/07<br></td>
                                        </tr>
                                        <tr>
                                            <td>Integration Specialist</td>
                                            <td>Brielle Williamson</td>
                                            <td>6</td>
                                            <td>Grade 1<br></td>
                                            <td>Section A</td>
                                            <td>2012/12/02<br></td>
                                        </tr>
                                        <tr>
                                            <td>475723347829<br></td>
                                            <td>Bruno Nash<br></td>
                                            <td>7</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2011/05/03<br></td>
                                        </tr>
                                        <tr>
                                            <td>Pre-Sales Support</td>
                                            <td>Caesar Vance</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2011/12/12<br></td>
                                        </tr>
                                        <tr>
                                            <td>Sales Assistant</td>
                                            <td>Cara Stevens</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2011/12/06<br></td>
                                        </tr>
                                        <tr>
                                            <td>Senior JavaScript Developer</td>
                                            <td>Cedric Kelly</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2012/03/29<br></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>LRN</td>
                                            <td>Name</td>
                                            <td>Age</td>
                                            <td>Grade Level</td>
                                            <td>Section</td>
                                            <td>Enroll Date</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
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