@extends('layouts.companybase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)



@section('content')

    <div class="pxp-dashboard-content-details">
        <h1>Candidates</h1>
        <p class="pxp-text-light">Detailed list of candidates that applied for your job offers.</p>

        <div class="mt-4 mt-lg-5">
            <div class="row justify-content-between align-content-center">

                <div class="col-auto order-1 order-sm-2">
                    <div class="pxp-company-dashboard-jobs-search mb-3">
                        <div class="pxp-company-dashboard-jobs-search-search-form">

                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th colspan="2" style="width: 25%;">Name</th>
                        <th style="width: 20%;">Applied for</th>
                        <th style="width: 15%;">Note</th>
                        <th style="width: 15%;">Status</th>
                        <th>Date<span class="fa fa-angle-up ms-3"></span></th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        @foreach($rs->applications as $rs)
                    <tr>
                        <td style="width: 3%;">
                            <div class="pxp-company-dashboard-candidate-avatar pxp-cover" style="background-image: url(@if($rs->user->profiles->image == null){{asset("assets/images/profile.png")}}@else {{Storage::url($rs->user->profiles->image)}}@endif););"></div>
                        </td>
                        <td>
                            <a href="{{route('showprofile',['id'=>$rs->user->id])}}">
                                <div class="pxp-company-dashboard-job-title">{{$rs->user->name}}</div>
                                <div class="pxp-company-dashboard-job-location"><span class="fa fa-globe me-1"></span>{{$rs->user->profiles->address}}</div>
                            </a>
                        </td>
                        <td><a href="{{route('job',['id'=>$rs->job->id])}}"><div class="pxp-company-dashboard-job-category">{{$rs->job->title}}</div></a></td>
                        <td>
                            <div class="pxp-company-dashboard-job-date">{{$rs->note}}</div>
                        </td>
                        <td><div class="pxp-company-dashboard-job-status"><span class="badge rounded-pill @if($rs->status == 'New') bg-black @elseif($rs->status == 'Approved') bg-success @elseif($rs->status == 'Rejected') bg-danger @endif">{{$rs->status}}</span></div></td>
                        <td>
                            <div class="pxp-company-dashboard-job-date">{{$rs->created_at}}</div>
                        </td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><a href="{{route('companycp.approve',['id'=>$rs->id])}}"><button title="Approve"><span class="fa fa-check"></span></button></a></li>
                                    <li><a href="{{route('companycp.reject',['id'=>$rs->id])}}"><button title="Reject"><span class="fa fa-ban"></span></button></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
