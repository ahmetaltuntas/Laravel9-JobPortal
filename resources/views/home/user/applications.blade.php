@extends('layouts.userbase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)



@section('content')
    <div class="pxp-dashboard-content-details">
        <h1>Applications</h1>
        <p class="pxp-text-light">Detailed list of your job applications.</p>

        <div class="mt-4 mt-lg-5">
            <div class="row justify-content-between align-content-center">
                <div class="col-auto order-2 order-sm-1">
                </div>
                <div class="col-auto order-1 order-sm-2">
                    <div class="pxp-candidate-dashboard-jobs-search mb-3">
                        <div class="pxp-candidate-dashboard-jobs-search-results me-3">{{$data->count()}} job applications</div>
                        <div class="pxp-candidate-dashboard-jobs-search-search-form">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th style="width: 20%;">Job</th>
                        <th style="width: 15%;">Company</th>
                        <th style="width: 15%;">Category</th>
                        <th style="width: 12%;">Type</th>
                        <th style="width: 20%;">Note</th>
                        <th style="width: 15%;">Date<span class="fa fa-angle-up ms-3"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>
                            <a href="#">
                                <div class="pxp-candidate-dashboard-job-title">{{$rs->job->title}}</div>
                                <div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe me-1"></span>{{$rs->job->location}}</div>
                            </a>
                        </td>
                        <td><a href="#" class="pxp-candidate-dashboard-job-company">{{$rs->job->user->name}}</a></td>
                        <td><div class="pxp-candidate-dashboard-job-category">{{\App\Http\Controllers\HomeController::getCategoryName($rs->job->category_id)}}</div></td>
                        <td><div class="pxp-candidate-dashboard-job-type">{{$rs->job->typeof}}</div></td>
                        <td><div class="pxp-candidate-dashboard-job-type">{{$rs->note}}</div></td>
                        <td><div class="pxp-candidate-dashboard-job-date mt-1">{{$rs->created_at}}</div></td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
