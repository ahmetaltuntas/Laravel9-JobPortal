@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Home</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Category List</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <a href="{{route('admin.category.create')}}"><button type="button" class="btn btn-success px-5 align-items-center"><i class="bx bx-edit mr-1"></i>Add Category</button></a>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" >
                        <table id="example2" class="table table-striped table-bordered" style="white-space: pre-wrap">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr style="text-align: center; vertical-align: middle;">
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->image}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}"><button type="button" class="btn btn-success">Edit</button></a></td>

                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleDangerModal">Delete</button></td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleDangerModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-white">Confirm</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-white mx-auto">

                                                <p>This category "{{$rs->title}}" will be deleted.</p>
                                                <p>Are you sure?</p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                                <a href="{{route('admin.category.destroy',['id'=>$rs->id])}}"><button type="button" class="btn btn-dark">Delete</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td><button type="button" class="btn btn-outline-info active"><a style="color: black" href="{{route('admin.category.show',['id'=>$rs->id])}}">Show</a></button></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
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
