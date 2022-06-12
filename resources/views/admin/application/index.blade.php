@extends('layouts.adminbase')

@section('title', 'Job List')



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
                            <li class="breadcrumb-item active" aria-current="page">Application List</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" >
                        <table id="example2" class="table table-striped table-bordered" style="white-space: pre-wrap">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Applied for</th>
                                <th>Note</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr style="text-align: center; vertical-align: middle;">
                                <td>{{$rs->id}}</td>
                                <td> <a href="{{route('showprofile',['id'=>$rs->user->id])}}">{{$rs->user->name}}</a></td>
                                <td><a href="{{route('job',['id'=>$rs->job->id])}}">{{$rs->job->title}}</a></td>
                                <td>{{$rs->note}}</td>
                                <td>{{$rs->status}}</td>
                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DangerModal-{{$rs->id}}">Delete</button></td>
                                <td><a style="color: black" href="{{route('admin.application.show',['id'=>$rs->id])}}"><button type="button" class="btn btn-outline-info active">Show</button></a></td>
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

                                            <p>Application no "{{$rs->id}}" will be deleted.</p>
                                            <p>Are you sure?</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                            <a href="{{route('admin.application.destroy',['id'=>$rs->id])}}"><button type="button" class="btn btn-dark">Delete</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Applied for</th>
                                <th>Note</th>
                                <th>Status</th>
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

@endsection
