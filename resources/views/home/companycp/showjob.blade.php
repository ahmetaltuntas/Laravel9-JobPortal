@extends('layouts.adminwindow')

@section('title', 'Show Job')


@section('content')
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
