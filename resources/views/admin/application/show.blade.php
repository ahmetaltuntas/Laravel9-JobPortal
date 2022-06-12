@extends('layouts.adminbase')

@section('title', 'Show Job: '.$data->title)



@section('content')
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">Home</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="{{route('admin.application.index')}}"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Show Application</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<div class="row">
				<div class="col-xl-7 mx-auto">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Show Application: {{$data->id}}</h5>
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
                                            <th scope="row">Candidate Name</th>
                                            <td>{{$data->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Company Name</th>
                                            <td>{{$data->job->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">User Email</th>
                                            <td>{{$data->user->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">User Phone</th>
                                            <td>{{$data->user->profiles->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Applied for</th>
                                            <td>{{$data->job->title}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Note</th>
                                            <td>{{$data->note}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <td>{{$data->status}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">IP</th>
                                            <td>{{$data->IP}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Created Date</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Update Date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
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
