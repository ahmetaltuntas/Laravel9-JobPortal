@extends('layouts.frontbase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)



@section('content')

    <section class="pxp-hero vh-100" style="background-color: var(--pxpMainColorLight);">
        <div class="pxp-hero-caption">
            <div class="pxp-container">
                <div class="row pxp-pl-80 align-items-center justify-content-between">
                    <div class="col-12 col-xl-6 col-xxl-5">
                        <h1>Find the perfect<br><span style="color: var(--pxpMainColor);">job</span> for you</h1>
                        <div class="pxp-hero-subtitle mt-3 mt-lg-4">Search your career opportunity through <strong>12,800</strong> jobs</div>

                        <div class="pxp-hero-form pxp-hero-form-round mt-3 mt-lg-4">
                            <form class="row gx-3 align-items-center" action="{{url('joblist')}}" method="post">
                                @csrf
                                <div class="col-12 col-sm">
                                    <div class="mb-3 mb-sm-0">
                                        <input type="text" name="title" class="form-control" placeholder="Job Title or Keyword">
                                    </div>
                                </div>
                                <div class="col-12 col-sm pxp-has-left-border">
                                    <div class="mb-3 mb-sm-0">
                                        <input type="text" name="location" class="form-control" placeholder="Location">
                                    </div>
                                </div>
                                <input value="null" name="category_id" hidden>
                                <div class="col-12 col-sm-auto">
                                    <button><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-none d-xl-block col-xl-5 position-relative">
                        <div class="pxp-hero-cards-container pxp-animate-cards pxp-mouse-move" data-speed="160">
                            <div class="pxp-hero-card pxp-cover pxp-cover-top" style="background-image: url({{asset("assets")}}/images/hero-bg-1.jpg);"></div>
                            <div class="pxp-hero-card-dark"></div>
                            <div class="pxp-hero-card-light"></div>
                        </div>

                        <div class="pxp-hero-card-info-container pxp-mouse-move" data-speed="60">
                            <div class="pxp-hero-card-info pxp-animate-bounce">
                                <div class="pxp-hero-card-info-item">
                                    <div class="pxp-hero-card-info-item-number">286<span>job offers</span></div>
                                    <div class="pxp-hero-card-info-item-description">in Business Development</div>
                                </div>
                                <div class="pxp-hero-card-info-item">
                                    <div class="pxp-hero-card-info-item-number">154<span>job offers</span></div>
                                    <div class="pxp-hero-card-info-item-description">in Marketing & Communication</div>
                                </div>
                                <div class="pxp-hero-card-info-item">
                                    <div class="pxp-hero-card-info-item-number">319<span>job offers</span></div>
                                    <div class="pxp-hero-card-info-item-description">in Human Resources</div>
                                </div>
                                <div class="pxp-hero-card-info-item">
                                    <div class="pxp-hero-card-info-item-number">120<span>job offers</span></div>
                                    <div class="pxp-hero-card-info-item-description">in Project Management</div>
                                </div>
                                <div class="pxp-hero-card-info-item">
                                    <div class="pxp-hero-card-info-item-number">176<span>job offers</span></div>
                                    <div class="pxp-hero-card-info-item-description">in Customer Service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pxp-hero-logos-carousel-container">
            <div class="pxp-container">
                <div class="row pxp-pl-80">
                    <div class="col-12 col-xl-6">
                        <div class="pxp-hero-logos-carousel owl-carousel">
                            <img src="{{asset("assets")}}/images/hero-logo-1.svg" alt="Logo 1">
                            <img src="{{asset("assets")}}/images/hero-logo-2.svg" alt="Logo 2">
                            <img src="{{asset("assets")}}/images/hero-logo-3.svg" alt="Logo 3">
                            <img src="{{asset("assets")}}/images/hero-logo-4.svg" alt="Logo 4">
                            <img src="{{asset("assets")}}/images/hero-logo-5.svg" alt="Logo 5">
                            <img src="{{asset("assets")}}/images/hero-logo-6.svg" alt="Logo 6">
                            <img src="{{asset("assets")}}/images/hero-logo-7.svg" alt="Logo 7">
                            <img src="{{asset("assets")}}/images/hero-logo-1.svg" alt="Logo 8">
                            <img src="{{asset("assets")}}/images/hero-logo-2.svg" alt="Logo 9">
                            <img src="{{asset("assets")}}/images/hero-logo-3.svg" alt="Logo 10">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pxp-hero-right-bg-card pxp-has-animation"></div>
    </section>


    <div class="pxp-container">
        <div class="row justify-content-between align-items-end">
            <div class="text-center">
                <h2 class="pxp-section-h2"><br>Search by Category</h2>
                <p class="pxp-text-light">Search your career opportunity with our categories</p>
            </div>
        </div>
        <div class="pxp-categories-carousel owl-carousel mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
            @foreach($catdata as $rs)
            <a href="/joblist?category_id=&subcategory_id={{$rs->id}}" class="pxp-categories-card-2">
                <div class="pxp-categories-card-2-icon-container">
                    <div class="pxp-categories-card-2-icon">
                        <span class="fa fa-pie-chart"></span>
                    </div>
                </div>
                <div class="pxp-categories-card-2-title">{{$rs->title}}</div>
                <div class="pxp-categories-card-2-subtitle">{{\App\Http\Controllers\HomeController::getJobNumber($rs->id)}}</div>
            </a>
            @endforeach

        </div>
    </div>


    <section class="mt-100 pt-100 pb-100" style="background-color: var(--pxpSecondaryColorLight);">
        <div class="pxp-container">
            <h2 class="pxp-section-h2 text-center">Featured Job Offers</h2>
            <p class="pxp-text-light text-center">Search your career opportunity through 12,800 jobs</p>

            <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                @foreach($jobdata as $rs)
                <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                    <div class="pxp-jobs-card-1 pxp-has-shadow">
                        <div class="pxp-jobs-card-1-top">
                            <a href="/joblist?category_id=&subcategory_id={{$rs->category_id}}" class="pxp-jobs-card-1-category">
                                <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-bullhorn"></span></div>
                                <div class="pxp-jobs-card-1-category-label">{{\App\Http\Controllers\HomeController::getCategoryName($rs->category_id)}}</div>
                            </a>
                            <a href="/job/{{$rs->id}}" class="pxp-jobs-card-1-title">{{$rs->title}}</a>
                            <div class="pxp-jobs-card-1-details">
                                <a href="/joblist?location={{$rs->location}}&category_id=&subcategory_id=" class="pxp-jobs-card-1-location">
                                    <span class="fa fa-globe"></span>{{$rs->location}}
                                </a>
                                <div class="pxp-jobs-card-1-type">{{$rs->typeof}}</div>
                            </div>
                        </div>
                        <div class="pxp-jobs-card-1-bottom">
                            <div class="pxp-jobs-card-1-bottom-left">
                                <div class="pxp-jobs-card-1-date pxp-text-light">{{$rs->created_at}}</div>
                                <a href="{{route('showprofile',['id'=>$rs->user_id])}}" class="pxp-jobs-card-1-company">{{$rs->user->name}}</a>
                            </div>
                            <a href="{{route('showprofile',['id'=>$rs->user_id])}}" class="pxp-jobs-card-1-company-logo" style="background-image: url(@if($rs->user->profiles->image == null) {{asset("assets/images/profile.png")}} @else {{Storage::url($rs->user->profiles->image)}} @endif););"></a>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>

            <div class="mt-4 mt-md-5 text-center pxp-animate-in pxp-animate-in-top">
                <a href="{{route('joblist')}}" class="btn rounded-pill pxp-section-cta">All Job Offers<span class="fa fa-angle-right"></span></a>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <h2 class="pxp-section-h2 text-center">Why Customers Love Us</h2>
            <p class="pxp-text-light text-center">What our customers say about us</p>

            <div class="pxp-testimonials-1">
                <div class="pxp-testimonials-1-circles d-none d-md-block">
                    <div class="pxp-testimonials-1-circles-item pxp-item-1 pxp-cover pxp-animate-in pxp-animate-bounce" style="background-image: url({{asset("assets")}}/images/customer-1.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-2 pxp-animate-in pxp-animate-bounce"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-3 pxp-animate-in pxp-animate-bounce"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-4 pxp-cover pxp-animate-in pxp-animate-bounce" style="background-image: url({{asset("assets")}}/images/customer-2.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-5 pxp-cover pxp-animate-in pxp-animate-bounce" style="background-image: url({{asset("assets")}}/images/customer-3.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-6 pxp-animate-in pxp-animate-bounce"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-7 pxp-cover pxp-animate-in pxp-animate-bounce" style="background-image: url({{asset("assets")}}/images/customer-4.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-8 pxp-animate-in pxp-animate-bounce"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-9 pxp-cover pxp-animate-in pxp-animate-bounce" style="background-image: url({{asset("assets")}}/images/customer-5.png);"></div>
                    <div class="pxp-testimonials-1-circles-item pxp-item-10 pxp-cover pxp-animate-in pxp-animate-bounce" style="background-image: url({{asset("assets")}}/images/customer-6.png);"></div>
                </div>

                <div class="pxp-testimonials-1-carousel-container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-10 col-md-6 col-lg-6 col-xl-5 col-xxl-4">
                            <div class="pxp-testimonials-1-carousel pxp-animate-in pxp-animate-in-top">
                                <div id="pxpTestimonials1Carousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item text-center active">
                                            <div class="pxp-testimonials-1-carousel-item-text">Jobster is an ever-changing workplace, striving to innovate by bringing employers and candidates together. We are dedicated to improving our clients’ lives as well as our own employees.</div>
                                            <div class="pxp-testimonials-1-carousel-item-name">Susanne Weil</div>
                                            <div class="pxp-testimonials-1-carousel-item-company">Illuminate Studio</div>
                                        </div>
                                        <div class="carousel-item text-center">
                                            <div class="pxp-testimonials-1-carousel-item-text">Each day, I’m inspired by my colleagues to drive innovation that accomplishes this. Jobster fosters an environment of trust and support where I can drive customer success.</div>
                                            <div class="pxp-testimonials-1-carousel-item-name">Kenneth Spiers</div>
                                            <div class="pxp-testimonials-1-carousel-item-company">Syspresoft</div>
                                        </div>
                                        <div class="carousel-item text-center">
                                            <div class="pxp-testimonials-1-carousel-item-text">Jobster is an ever-changing workplace, striving to innovate by bringing employers and candidates together. We are dedicated to improving our clients’ lives as well as our own employees.</div>
                                            <div class="pxp-testimonials-1-carousel-item-name">Rebecca Eason</div>
                                            <div class="pxp-testimonials-1-carousel-item-company">Craftgenics</div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#pxpTestimonials1Carousel" data-bs-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#pxpTestimonials1Carousel" data-bs-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
