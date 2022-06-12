@extends('layouts.userbase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)



@section('content')
<div class="pxp-dashboard-content-details">
    <h1>My Comments</h1>
    <p class="pxp-text-light">Your comments.</p>

        <div class="mt-4 mt-lg-5">
            <h2>Comments</h2>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                    <tr>
                        <th style="width: 5%;">Id</th>
                        <th style="width: 25%;">Product</th>
                        <th style="width: 20%;">Subject</th>
                        <th style="width: 25%;">Review</th>
                        <th style="width: 15%;">Rate<span class="fa fa-angle-up ms-3"></span></th>
                        <th style="width: 15%;">Status</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $rs)
                    <tr>
                        <td>
                            <div class="pxp-candidate-dashboard-job-title">{{$rs->id}}</div>
                        </td>
                        <td><a href="{{route('job',['id'=>$rs->job_id])}}" class="pxp-candidate-dashboard-job-company">{{$rs->job->title}}</a>
                        </td>
                        <td><div class="pxp-candidate-dashboard-job-category">{{$rs->subject}}</div></td>
                        <td><div class="pxp-candidate-dashboard-job-type">{{$rs->review}}</div></td>
                        <td><div class="pxp-candidate-dashboard-job-date mt-1">{{$rs->rate}}</div></td>
                        <td><div class="pxp-candidate-dashboard-job-type mt-1">{{$rs->status}}</div></td>
                        <td>
                            <div class="pxp-dashboard-table-options">
                                <ul class="list-unstyled">
                                    <li><button  data-bs-toggle="modal" data-bs-target="#DangerModal-{{$rs->id}}" title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="DangerModal-{{$rs->id}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content bg-danger">
                                <div class="modal-header">
                                    <h5 class="modal-title text-white">Confirm</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-white mx-auto">

                                    <p>Comment will be deleted.</p>
                                    <p>Are you sure?</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                    <a href="{{route('user.destroycomment',['id'=>$rs->id])}}"><button type="button" class="btn btn-dark">Delete</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
            </div>


        </div>
@endsection
