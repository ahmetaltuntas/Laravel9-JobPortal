@extends('layouts.frontbase')

@section('title', 'Job Portal')



@section('content')

    <section>
        <div class="pxp-container">
            <div class="pxp-single-job-content pxp-has-columns">
                <div class="row">
                    <div class="col-lg-7 col-xl-8 col-xxl-9">
                        <div class="pxp-single-job-cover pxp-cover" style="background-image: url({{Storage::url($data->image)}});"></div>
                        <div class="pxp-single-job-cover-logo" style="background-image: url({{Storage::url($data->image)}});"></div>

                        <div class="row justify-content-between align-items-center mt-4 mt-lg-5">
                            <div class="col-xl-8 col-xxl-6">
                                <h1>{{$data->title}}</h1>
                                <div class="pxp-single-job-company-location">
                                    by <a href="single-company-1.html" class="pxp-single-job-company">Craftgenics</a> in
                                    <a href="jobs-list-1.html" class="pxp-single-job-location">{{$data->location}}</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="pxp-single-job-options mt-4 col-xl-0">
                                    <button class="btn pxp-single-job-save-btn"><span class="fa fa-heart-o"></span></button>
                                    <div class="dropdown ms-2">
                                        <button class="btn pxp-single-job-share-btn dropdown-toggle" type="button" id="socialShareBtn" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="fa fa-share-alt">
                                            </span></button>
                                        <ul class="dropdown-menu pxp-single-job-share-dropdown" aria-labelledby="socialShareBtn">
                                            <li><a class="dropdown-item" href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                            <li><a class="dropdown-item" href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                            <li><a class="dropdown-item" href="#"><span class="fa fa-pinterest"></span> Pinterest</a></li>
                                            <li><a class="dropdown-item" href="#"><span class="fa fa-linkedin"></span> LinkedIn</a></li>
                                        </ul>
                                    </div>
                                    <button class="btn ms-2 pxp-single-job-apply-btn rounded-pill">Apply Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-between align-items-center">
                            <div class="col-6">
                                <a href="jobs-list-1.html" class="pxp-single-job-category">
                                    <div class="pxp-single-job-category-icon"><span class="fa fa-calendar-o"></span></div>
                                    <div class="pxp-single-job-category-label">{{\App\Http\Controllers\HomeController::getCategoryName($data->category_id)}}</div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <div class="pxp-single-job-date pxp-text-light">{{$data->created_at}}</div>
                            </div>
                        </div>

                        <div class="pxp-single-job-content-details mt-4 mt-lg-5">
                            {!! $data->description !!}

                            <div class="mt-4 mt-lg-5">
                                <a href="#" class="btn rounded-pill pxp-section-cta">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 col-xxl-3">
                        <div class="pxp-single-job-side-panel mt-5 mt-lg-0">
                            <div>
                                <div class="pxp-single-job-side-info-label pxp-text-light">Experience</div>
                                <div class="pxp-single-job-side-info-data">{{$data->experience}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Work Level</div>
                                <div class="pxp-single-job-side-info-data">{{$data->level}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Employment Type</div>
                                <div class="pxp-single-job-side-info-data">{{$data->typeof}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Salary</div>
                                <div class="pxp-single-job-side-info-data">{{$data->salary}}$ / month</div>
                            </div>
                        </div>
                        <div class="mt-3 mt-lg-4 pxp-single-job-side-panel">
                            <div class="pxp-single-job-side-company">
                                <div class="pxp-single-job-side-company-logo pxp-cover" style="background-image: url(images/company-logo-2.png);"></div>
                                <div class="pxp-single-job-side-company-profile">
                                    <div class="pxp-single-job-side-company-name">Craftgenics</div>
                                    <a href="single-company-1.html">View profile</a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Industry</div>
                                <div class="pxp-single-job-side-info-data">Software</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Company size</div>
                                <div class="pxp-single-job-side-info-data">50-100</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Founded in</div>
                                <div class="pxp-single-job-side-info-data">2005</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Phone</div>
                                <div class="pxp-single-job-side-info-data">0124 456 789</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Email</div>
                                <div class="pxp-single-job-side-info-data">office@craftgenics.com</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Location</div>
                                <div class="pxp-single-job-side-info-data">Los Angeles, CA</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Website</div>
                                <div class="pxp-single-job-side-info-data"><a href="#">www.craftgenics.com</a></div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-data">
                                    <ul class="list-unstyled pxp-single-job-side-info-social">
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
