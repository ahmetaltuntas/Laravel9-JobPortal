@extends('layouts.frontbase')

@section('title', 'Job Portal')



@section('content')

    @if ($userRoles->contains('user'))
    <section class="pxp-single-candidate-hero pxp-cover" style="background-image: url(@if($data->profiles->coverimage == null){{asset("assets/images/cover.jpg")}}@else {{Storage::url($data->profiles->coverimage)}}@endif););">
        <div class="pxp-hero-opacity"></div>
        <div class="pxp-single-candidate-hero-caption">
            <div class="pxp-container">
                <div class="pxp-single-candidate-hero-content">
                    <div class="pxp-single-candidate-hero-avatar" style="background-image: url(@if($data->profiles->image == null){{asset("assets/images/profile.png")}}@else {{Storage::url($data->profiles->image)}}@endif););"></div>
                    <div class="pxp-single-candidate-hero-name">
                        <h1>{{$data->name}}</h1>
                        <div class="pxp-single-candidate-hero-title">{{$data->profiles->title}}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <div class="row">
                <div class="col-lg-7 col-xl-8 col-xxl-9">
                    <div class="pxp-single-candidate-content">
                        <h2>About</h2>
                        <p>{{$data->profiles->about}}</p>

                        <div class="mt-4 mt-lg-5">
                            <h2>Skills</h2>
                            <div class="pxp-single-candidate-skills">
                                <ul class="list-unstyled">
                                    @if($data->usercv->skills != null)
                                    @foreach($data->usercv->skills as $rs)
                                    <li>{{$rs->name}}</li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 mt-lg-5">
                            <h2>Work Experience</h2>
                            <div class="pxp-single-candidate-timeline">
                                @foreach($data->usercv->experiences as $rs)
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">{{$rs->period}}</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">{{$rs->title}}</div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">{{$rs->company}}</div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">{{$rs->description}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-4 mt-lg-5">
                            <h2>Education & Training</h2>
                            <div class="pxp-single-candidate-timeline">
                                @foreach($data->usercv->educations as $rs)
                                <div class="pxp-single-candidate-timeline-item">
                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">{{$rs->period}}</span></div>
                                        <div class="pxp-single-candidate-timeline-position mt-2">{{$rs->title}}</div>
                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">{{$rs->school}}</div>
                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">{{$rs->description}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-xxl-3">
                    <div class="pxp-single-candidate-side-panel mt-5 mt-lg-0">
                        <div>
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Email</div>
                            <div class="pxp-single-candidate-side-info-data">{{$data->email}}</div>
                        </div>
                        <div class="mt-4">
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Location</div>
                            <div class="pxp-single-candidate-side-info-data">{{$data->profiles->address}}</div>
                        </div>
                        <div class="mt-4">
                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Phone</div>
                            <div class="pxp-single-candidate-side-info-data">{{$data->profiles->phone}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @elseif($userRoles->contains('company'))


        <section class="pxp-single-company-hero pxp-cover" style="background-image: url(@if($data->profiles->coverimage == null){{asset("assets/images/cover.jpg")}}@else {{Storage::url($data->profiles->coverimage)}}@endif););">
            <div class="pxp-hero-opacity"></div>
            <div class="pxp-single-company-hero-caption">
                <div class="pxp-container">
                    <div class="pxp-single-company-hero-content">
                        <div class="pxp-single-company-hero-logo" style="background-image: url(@if($data->profiles->image == null){{asset("assets/images/profile.png")}}@else {{Storage::url($data->profiles->image)}}@endif););"></div>
                        <div class="pxp-single-company-hero-title">
                            <h1>{{$data->name}}</h1>
                            <div class="pxp-single-company-hero-location"><span class="fa fa-globe"></span>{{$data->profiles->address}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="pxp-container">
                <div class="row">
                    <div class="col-lg-7 col-xl-8 col-xxl-9">
                        <div class="pxp-single-company-content">
                            <h2>About {{$data->name}}</h2>
                            <p>{{$data->profiles->about}}</p>


                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 col-xxl-3">
                        <div class="pxp-single-company-side-panel mt-5 mt-lg-0">
                            <div class="mt-4">
                                <div class="pxp-single-company-side-info-label pxp-text-light">Industry</div>
                                <div class="pxp-single-company-side-info-data">{{$data->profiles->industry}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-company-side-info-label pxp-text-light">Company size</div>
                                <div class="pxp-single-company-side-info-data">{{$data->profiles->company_size}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-company-side-info-label pxp-text-light">Founded in</div>
                                <div class="pxp-single-company-side-info-data">{{$data->profiles->founded}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-company-side-info-label pxp-text-light">Phone</div>
                                <div class="pxp-single-company-side-info-data">{{$data->profiles->phone}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-company-side-info-label pxp-text-light">Email</div>
                                <div class="pxp-single-company-side-info-data">{{$data->email}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-company-side-info-label pxp-text-light">Location</div>
                                <div class="pxp-single-company-side-info-data">{{$data->profiles->address}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-company-side-info-label pxp-text-light">Website</div>
                                <div class="pxp-single-company-side-info-data"><a href="{{$data->profiles->website}}">{{$data->profiles->website}}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="pxp-container">
                <h2 class="pxp-subsection-h2">Available Jobs</h2>
                <p class="pxp-text-light">Jobs list posted by {{$data->name}}</p>

                <div class="row mt-3 mt-md-4 pxp-animate-in pxp-animate-in-top pxp-in">
                    @foreach($jobdata as $rs)
                    <div class="col-xl-6 pxp-jobs-card-2-container">
                        <div class="pxp-jobs-card-2 pxp-has-border">
                            <div class="pxp-jobs-card-2-top">
                                <a href="" class="pxp-jobs-card-2-company-logo" style="background-image: url({{Storage::url($rs->image)}});"></a>
                                <div class="pxp-jobs-card-2-info">
                                    <a href="/job/{{$rs->id}}" class="pxp-jobs-card-2-title">{{$rs->title}}</a>
                                    <div class="pxp-jobs-card-2-details">
                                        <a href="/joblist?location={{$rs->location}}&category_id=null&subcategory_id=Subcategory" class="pxp-jobs-card-2-location">
                                            <span class="fa fa-globe"></span>{{$rs->location}}
                                        </a>
                                        <div class="pxp-jobs-card-2-type">{{$rs->typeof}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-2-bottom">
                                <a href="/joblist?category_id=&subcategory_id={{$rs->category_id}}" class="pxp-jobs-card-2-category">
                                    <div class="pxp-jobs-card-2-category-label">{{\App\Http\Controllers\HomeController::getCategoryName($rs->category_id)}}</div>
                                </a>
                                <div class="pxp-jobs-card-2-bottom-right">
                                    <span class="pxp-jobs-card-2-date pxp-text-light">{{$rs->created_at}}</span> <a href="{{route('showprofile',['id'=>$rs->user_id])}}" class="pxp-jobs-card-2-company">{{$rs->user->name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
