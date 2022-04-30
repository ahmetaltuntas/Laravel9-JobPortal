@extends('layouts.adminwindow')

@section('title', 'Image Gallery List')



@section('content')
    <!--start page wrapper -->
    <div class="page-content">
    <h2>{{$job->title}}</h2>
    <form class="row g-3" action="{{route('admin.image.store',['pid'=>$job->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">Title</span>
            <input type="text" class="form-control" name="title">
            <input type="file" class="form-control" id="inputGroupFile02" name="image">
            <button type="submit" class="input-group-text" for="inputGroupFile02">Upload</button>
        </div>
        <!--
        <div class="row-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div>
            <label for="image" class="form-label">Image</label>
            <input class="form-control" type="file" name="image">
        </div>
        <div class="row-12">
            <button type="submit" class="btn btn-primary px-5">Save</button>
        </div>
        -->
    </form>
    </div>
        <div class="page-content">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" >
                        <table id="example2" class="table table-striped table-bordered" style="white-space: pre-wrap">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                            <tr style="text-align: center; vertical-align: middle;">
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 110px">
                                    @endif
                                </td>

                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DangerModal-{{$rs->id}}">Delete</button></td>
                            </tr>
                                <!-- Modal -->
                            <div class="modal fade" id="DangerModal-{{$rs->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white">Confirm</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-white mx-auto">

                                            <p>This image "{{$rs->title}}" will be deleted.</p>
                                            <p>Are you sure?</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                            <a href="{{route('admin.image.destroy',['pid'=>$rs->id,'id'=>$job->id])}}"><button type="button" class="btn btn-dark">Delete</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
    </div>
@endsection
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
