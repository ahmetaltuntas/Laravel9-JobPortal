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
							<li class="breadcrumb-item"><a href="{{route('admin.job.index')}}"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Show Job</li>
						</ol>
					</nav>
				</div>
				<div class="ms-auto">
					<div class="btn-group">
						<button type="button" class="btn btn-primary">Settings</button>
						<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
							<a class="dropdown-item" href="javascript:;">Another action</a>
							<a class="dropdown-item" href="javascript:;">Something else here</a>
							<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
						</div>
					</div>
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
                                <h5 class="mb-0 text-primary">Show Job: {{$data->title}}</h5>
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
                                            <th scope="row">Title</th>
                                            <td>{{$data->title}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Category</th>
                                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Keywords</th>
                                            <td>{{$data->keywords}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Employment type</th>
                                            <td>{{$data->typeof}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Career level</th>
                                            <td>{{$data->level}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Location</th>
                                            <td>{{$data->location}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Salary</th>
                                            <td>{{$data->salary}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Experience</th>
                                            <td>{{$data->experience}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Image</th>
                                            <td>
                                                @if($data->image)
                                                    <img src="{{Storage::url($data->image)}}" style="height: 110px">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Description</th>
                                            <td>{!!$data->description!!}</td>
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
                                            <th scope="row">Update Date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="mx-auto">
                                    <a href="{{route('admin.job.edit',['id'=>$data->id])}}"><button type="button" class="btn btn-success px-5"><i class="bx bx-edit mr-1"></i>Edit</button></a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger px-5" data-bs-toggle="modal" data-bs-target="#exampleDangerModal"><i class="bx bx-trash mr-1"></i>Delete</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleDangerModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white">Confirm</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-white display-6">

                                                    <p>This category "{{$data->title}}" will be deleted.</p>
                                                    <p>Are you sure?</p>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                                    <a href="{{route('admin.job.destroy',['id'=>$data->id])}}"><button type="button" class="btn btn-dark">Delete</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
