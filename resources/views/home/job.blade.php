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
                                    by <a href="{{route('showprofile',['id'=>$data->user->id])}}" class="pxp-single-job-company">{{$data->user->name}}</a> in
                                    <a href="/joblist?location={{$data->location}}&category_id=null&subcategory_id=Subcategory" class="pxp-single-job-location">{{$data->location}}</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="pxp-single-job-options mt-4 col-xl-0">
                                    <button class="btn ms-2 pxp-single-job-apply-btn rounded-pill" data-bs-toggle="modal" href="#pxp-apply-modal" >Apply Now</button>
                                </div>
                            </div>
                        </div>
                        <!--modal-->
                        <div class="modal fade pxp-user-modal" id="pxp-apply-modal" aria-hidden="true" aria-labelledby="applyModal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="modal-title text-center mt-4" id="signinModal">Apply Now</h5>
                                        @if (Auth::user()!=null)

                                            @php
                                                $userRoles = Auth::user()->roles->pluck('name');
                                            @endphp

                                            @if (\App\Models\Application::where('user_id','=',Auth::id())->get()->pluck('job_id')->contains($data->id))

                                                <h5>You have already applied for this job.</h5>

                                            @elseif($userRoles->contains('user'))
                                                <form class="mt-4" action="{{route('application.apply')}}" method="post">
                                                    @csrf
                                                    <h5>If you have a note, you can write.</h5>
                                                    <input name="job_id" value="{{$data->id}}" hidden>
                                                    <div class="form-floating mb-3">
                                                        <textarea type="text" class="form-control" name="note" id="pxp-apply-note" placeholder="Note"></textarea>
                                                        <label for="pxp-apply-note">Note</label>
                                                    </div>
                                                    <button class="btn rounded-pill pxp-modal-cta" type="submit">Continue</button>
                                                </form>
                                            @else
                                                <h5>You cannot apply for a job.</h5>
                                            @endif
                                        @else
                                            <h5>You should login first.</h5>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-between align-items-center">
                            <div class="col-6">
                                <a href="/joblist?category_id=&subcategory_id={{$data->category_id}}" class="pxp-single-job-category">
                                    <div class="pxp-single-job-category-icon"><span class="fa fa-calendar-o"></span></div>
                                    <div class="pxp-single-job-category-label">{{\App\Http\Controllers\HomeController::getCategoryName($data->category_id)}}</div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <div class="pxp-single-job-date pxp-text-light">{{$data->created_at}}</div>
                                @php
                                    $avg=$data->reviews->average('rate');
                                @endphp
                                <small>Rate : {{number_format($avg,1)}}</small>
                            </div>

                        </div>

                        <div class="pxp-single-job-content-details mt-4 mt-lg-5">
                            {!! $data->description !!}
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
                                <div class="pxp-single-job-side-company-logo pxp-cover" style="background-image: url(@if($data->user->profiles->image == null) {{asset("assets/images/profile.png")}} @else {{Storage::url($data->user->profiles->image)}} @endif););"></div>
                                <div class="pxp-single-job-side-company-profile">
                                    <div class="pxp-single-job-side-company-name">{{$data->user->name}}</div>
                                    <a href="{{route('showprofile',['id'=>$data->user->id])}}">View profile</a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Industry</div>
                                <div class="pxp-single-job-side-info-data">{{$data->user->profiles->industry}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Company size</div>
                                <div class="pxp-single-job-side-info-data">{{$data->user->profiles->company_size}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Founded in</div>
                                <div class="pxp-single-job-side-info-data">{{$data->user->profiles->founded}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Phone</div>
                                <div class="pxp-single-job-side-info-data">{{$data->user->profiles->phone}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Email</div>
                                <div class="pxp-single-job-side-info-data">{{$data->user->email}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Location</div>
                                <div class="pxp-single-job-side-info-data">{{$data->user->profiles->address}}</div>
                            </div>
                            <div class="mt-4">
                                <div class="pxp-single-job-side-info-label pxp-text-light">Website</div>
                                <div class="pxp-single-job-side-info-data"><a href="{{$data->user->profiles->website}}">{{$data->user->profiles->website}}</a></div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-100">
                        <div class="pxp-blog-comments-block">
                            {{Session::get('email')}}
                            <div class="pxp-blog-post-comments">
                                <h4>{{$reviews->count('id')}} Comments</h4>
                                <div class="mt-3 mt-lg-4">
                                    <ol class="pxp-comments-list">
                                        @foreach($reviews as $rs)
                                        <li class="mt-3 mt-lg-4">
                                            <div class="pxp-comments-list-item">
                                                <img src="@if($rs->user->profiles->image == null) {{asset("assets/images/profile.png")}} @else {{Storage::url($rs->user->profiles->image)}} @endif" alt="{{$rs->user->name}}">
                                                <div class="pxp-comments-list-item-body">
                                                    <h5>{{$rs->user->name}}</h5>
                                                    <div class="pxp-comments-list-item-date">{{$rs->created_at}}</div>
                                                    <div class="pxp-comments-list-item-date">Rate: {{$rs->rate}}</div>
                                                    <div class="pxp-comments-list-item-content mt-2">{{$rs->review}}</div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ol>
                                </div>
                                <div class="mt-3 mt-lg-4">
                                    <h4>Leave a Reply</h4>
                                    <form class="pxp-comments-form" action="{{route('storecomment')}}" method="post">
                                        @csrf
                                        <input type="text" class="form-control" id="job_id" name="job_id" value="{{$data->id}}" hidden>
                                        <div class="mt-3 mt-lg- mb-3">
                                            <label for="pxp-comments-comment" class="form-label">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="mt-3 mt-lg- mb-3">
                                            <label for="pxp-comments-comment" class="form-label">Review</label>
                                            <textarea class="form-control" id="review" name="review" placeholder="Type your comment here..."></textarea>
                                        </div>
                                        <div class="mt-3 mt-lg- mb-3">
                                            <label for="pxp-comments-rate" class="form-label">Rate</label>
                                            <input type="radio" class="form-check-input" name="rate" value="1">
                                            <span class="ir">1</span>
                                            <input type="radio" class="form-check-input" name="rate" value="2">
                                            <span class="ir">2</span>
                                            <input type="radio" class="form-check-input" name="rate" value="3">
                                            <span class="ir">3</span>
                                            <input type="radio" class="form-check-input" name="rate" value="4">
                                            <span class="ir">4</span>
                                            <input type="radio" class="form-check-input" name="rate" value="5">
                                            <span class="ir">5</span>

                                        </div>
                                        @auth
                                            <button type="submit" class="btn rounded-pill pxp-section-cta">Post Comment</button>
                                        @else

                                            <a href="/login" class="btn rounded-pill pxp-section-cta">Please Login</a>

                                        @endauth
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

@endsection
