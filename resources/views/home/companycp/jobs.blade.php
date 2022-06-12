@extends('layouts.companybase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)


@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection


@section('content')

    <div class="pxp-dashboard-content-details">
        <h1>Manage Jobs</h1>
        <p class="pxp-text-light">Detailed list with all your job offers.</p>

        <div class="mt-4 mt-lg-5">
            <div class="row justify-content-between align-content-center">
                <div class="col-auto order-1 order-sm-2">
                    <div class="pxp-company-dashboard-jobs-search mb-3">
                        <div class="pxp-company-dashboard-jobs-search-results me-3">{{$data->count()}} jobs</div>
                        <div class="pxp-company-dashboard-jobs-search-search-form">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th style="width: 25%;">Job</th>
                        <th style="width: 20%;">Category</th>
                        <th style="width: 12%;">Type</th>
                        <th style="width: 15%;">Applications</th>
                        <th>Date<span class="fa fa-angle-up ms-3"></span></th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>
                            <a href="{{route('job',['id'=>$rs->id])}}">
                                <div class="pxp-company-dashboard-job-title">{{$rs->title}}</div>
                                <div class="pxp-company-dashboard-job-location"><span class="fa fa-globe me-1"></span>{{$rs->location}}</div>
                            </a>
                        </td>
                        <td><div class="pxp-company-dashboard-job-category">{{\App\Http\Controllers\HomeController::getCategoryName($rs->category_id)}}</div></td>
                        <td><div class="pxp-company-dashboard-job-type">{{$rs->typeof}}</div></td>
                        <td><a href="#" class="pxp-company-dashboard-job-applications">3 Candidates</a></td>
                        <td>
                            <div class="pxp-company-dashboard-job-status"><span class="badge rounded-pill bg-black">{{$rs->status}}</span></div>
                            <div class="pxp-company-dashboard-job-date mt-1">2020/08/24 at 11:56 am</div>
                        </td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button title="Edit"><span class="fa fa-pencil"></span></button></li>
                                    <li><button title="Preview"><span class="fa fa-eye"></span></button></li>
                                    <li><button title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
