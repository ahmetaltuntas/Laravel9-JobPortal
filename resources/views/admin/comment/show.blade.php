@extends('layouts.adminwindow')

@section('title', 'Show Comment: '.$data->id)



@section('content')
	<!--start page wrapper -->
	<div class="page-content">
		<div class="page-content">
			<!--breadcrumb-->

			<!--end breadcrumb-->
			<div class="row">
				<div class="col-xl-7 mx-auto">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Show Comment: {{$data->id}}</h5>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-body">
                                    <table class="table mb-0 table-striped">
                                        <thead>
                                        <h5><strong>Detail Data</strong></h5>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Id</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Job Title</th>
                                            <td>{{$data->job->title}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Job Id</th>
                                            <td>{{$data->job->id}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td>{{$data->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Subject</th>
                                            <td>{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Review</th>
                                            <td>{{$data->review}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Rate</th>
                                            <td>{{$data->rate}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">IP</th>
                                            <td>{{$data->IP}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <td>{{$data->status}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Created Date</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Updated Date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Note</th>
                                            <td>
                                            <form class="mt-4" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                                @csrf
                                                <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                                </select>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="col">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!--end page wrapper -->
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
