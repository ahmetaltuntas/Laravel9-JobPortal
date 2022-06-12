@extends('layouts.adminwindow')

@section('title', 'Show User: '.$data->id)



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
                                <h5 class="mb-0 text-primary">Show User: {{$data->id}}</h5>
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
                                            <th scope="row">Role</th>
                                            <td>@foreach($data->roles as $role)
                                                    {{$role->name}}
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DangerModal-{{$role->id}}-{{$data->id}}">Delete</button>
                                                    <div class="modal fade" id="DangerModal-{{$role->id}}-{{$data->id}}" tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content bg-danger">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-white">Confirm</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body text-white mx-auto">

                                                                    <p>Role will be deleted.</p>
                                                                    <p>Are you sure?</p>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                                                    <a href="{{route('admin.user.destroyrole',['uid'=>$data->id, 'rid'=>$role->id])}}"><button type="button" class="btn btn-dark">Delete</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Add Role</th>
                                            <td>
                                            <form class="mt-4" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                                @csrf
                                                <select name="role_id">
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->name}}</option>


                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-success">Add Role</button>

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
