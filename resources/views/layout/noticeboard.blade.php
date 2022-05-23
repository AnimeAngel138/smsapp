@extends('layout.app')
@section('content')
<body id="page-top">
    <div id="wrapper">
        @extends('layout.nav_bar')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Notice Board</h3>
                    <div class="card shadow">
                        <div class="card-header py-3"><a class="btn btn-primary btn-icon-split" role="button" style="margin-right: 30px;" href="noticeboard.html"><span class="text-white-50 icon"><i class="fas fa-flag"></i></span><span class="text-white text">Notice Board List</span></a><a class="btn btn-secondary btn-icon-split" role="button" href="noticeboard-add.html"><span class="text-white-50 icon"><i class="fas fa-arrow-right"></i></span><span class="text-white text">Add Notice</span></a></div>
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
                                            <th style="width: 223.111px;">Title</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th style="width: 200.444px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Announcement Of Brigada</td>
                                            <td>To all blah blah blah blah</td>
                                            <td>2008/11/28</td>
                                            <td>
                                                <div class="btn-group" role="group"><button class="btn btn-success" type="button"><i class="fa fa-pencil" style="margin-right: 12px;"></i><span>Edit</span></button><button class="btn btn-danger" type="button"><i class="fa fa-trash-o" style="margin-right: 12px;"></i><span>Delete</span></button></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>Title</td>
                                            <td>Message</td>
                                            <td>Date</td>
                                            <td>Action</td>
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