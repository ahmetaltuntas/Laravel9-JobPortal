@extends('layouts.adminwindow')

@section('title', 'Show Message: '.$data->id)



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
                                <h5 class="mb-0 text-primary">Show Message: {{$data->id}}</h5>
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
                                            <th scope="row">Name</th>
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone</th>
                                            <td>{{$data->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Subject</th>
                                            <td>{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">IP</th>
                                            <td>{{$data->ip}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <td>{{$data->status}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Note</th>
                                            <td>
                                            <form class="mt-4" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                                @csrf
                                                <textarea class="form-control" id="note" name="note">{{$data->note}}</textarea>

                                                <button type="submit" class="btn btn-success">Update</button>

                                            </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Message</th>
                                            <td>{!! $data->message !!}</td>
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
