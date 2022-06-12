@extends('layouts.companybase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)



@section('content')
    <div class="pxp-dashboard-content-details">
        <h1>Dashboard</h1>
        <p class="pxp-text-light">Welcome to JobPortal!</p>

        <div class="row mt-4 mt-lg-5 align-items-center">
            <div class="col-sm-auto col-xxl-6">
                <div class="pxp-dashboard-stats-card bg-primary bg-opacity-10 mb-3 mb-xxl-0">
                    <div class="pxp-dashboard-stats-card-icon text-primary">
                        <span class="fa fa-file-text-o"></span>
                    </div>
                    <div class="pxp-dashboard-stats-card-info">
                        <div class="pxp-dashboard-stats-card-info-number">{{$job->count()}}</div>
                        <div class="pxp-dashboard-stats-card-info-text pxp-text-light">Jobs posted</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
