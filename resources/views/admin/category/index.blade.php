@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
    </div>
    </div>
    <!--end page wrapper -->
    <script src="{{asset("assets/admin")}}/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{asset("assets/admin")}}/js/jquery.min.js"></script>
    <script src="{{asset("assets/admin")}}/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{asset("assets/admin")}}/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{asset("assets/admin")}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{asset("assets/admin")}}/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset("assets/admin")}}/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{asset("assets/admin")}}/js/table-datatable.js"></script>
    <!--app JS-->
    <script src="{{asset("assets/admin")}}/js/app.js"></script>
@endsection
