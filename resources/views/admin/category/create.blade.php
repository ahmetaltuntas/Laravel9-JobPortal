@extends('layouts.adminbase')

@section('title', 'Add Category')



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
							<li class="breadcrumb-item"><a href="{{route('admin.category.index')}}"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
                                <h5 class="mb-0 text-primary">Add Category</h5>
                            </div>
                            <hr>
                            <form class="row g-3" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row-md-6">
                                    <label for="title" class="form-label">Category</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="parent_id">
                                    <option value="0" selected="">Main Category</option>
                                    @foreach($data as $rs)
                                        <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="row-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="row-md-6">
                                    <label for="keywords" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keywords">
                                </div>
                                <div class="row-md-6">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description">
                                </div>
                                <div>
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" name="image">
                                </div>
                                <div class="row-md-6">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option selected="">True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="row-12">
                                    <button type="submit" class="btn btn-primary px-5">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!--end page wrapper -->
@endsection
