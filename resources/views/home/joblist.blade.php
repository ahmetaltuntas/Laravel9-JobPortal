@extends('layouts.frontbase')

@section('title', 'Job Portal')



@section('content')
    <link href="{{asset("assets")}}/css/select2.min.css" rel="stylesheet" />
    <script src="{{asset("assets")}}/js/select2.min.js"></script>
    <div class="pxp-preloader"><span>Loading...</span></div>
    @php
        $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
    @endphp
    <section class="pxp-page-header-simple" style="background-color: var(--pxpMainColorLight);">
        <div class="pxp-container">
            <h1>Search Jobs</h1>
            <div class="pxp-hero-subtitle pxp-text-light">Search your career opportunity through <strong>12,800</strong> jobs</div>
            <div class="pxp-hero-form pxp-hero-form-round pxp-large mt-3 mt-lg-4">
                <form class="row gx-3 align-items-center">
                    <div class="col-12 col-lg">
                        <div class="input-group mb-3 mb-lg-0">
                            <span class="input-group-text"><span class="fa fa-search"></span></span>
                            <input type="text" class="form-control" name="title" placeholder="Job Title or Keyword">
                        </div>
                    </div>
                    <div class="col-12 col-lg pxp-has-left-border">
                        <div class="input-group mb-3 mb-lg-0">
                            <span class="input-group-text"><span class="fa fa-globe"></span></span>
                            <input type="text" class="form-control" name="location" placeholder="Location">
                        </div>
                    </div>
                    <div class="col-12 col-lg pxp-has-left-border">
                        <div class="input-group mb-3 mb-lg-0" for="category_id">
                            <span class="input-group-text"><span class="fa fa-folder-o"></span></span>
                            <select class="form-select" name="category_id" id="category_id">
                                <option value="null">All categories</option>
                                @foreach($mainCategories as $rs)
                                <option value="{{$rs->id}}">{{$rs->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg pxp-has-left-border">
                        <div class="input-group mb-3 mb-lg-0" for="subcategory_id">
                            <span class="input-group-text"><span class="fa fa-folder-o"></span></span>
                            <select class="form-select" name="subcategory_id" id="subcategory_id" >
                                <option>Subcategory</option>
                            </select>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function () {

                            $('#category_id').on('change',function(e) {

                                var category_id = e.target.value;

                                $.ajax({

                                    url:"{{url('/dropdown')}}",
                                    type:"GET",
                                    data: {
                                        category_id: category_id
                                    },

                                    success:function (data) {

                                        $('#subcategory_id').empty();
                                        var a=0;
                                        $.each(data,function(index,subcategory_id){

                                            $('#subcategory_id').append('<option value="'+data.data[a].id+'">'+data.data[a].title+'</option>');
                                            a = a+1;

                                        })

                                    }
                                })
                            });

                        });


                    </script>
                    <div class="col-12 col-lg-auto">
                        <button>Find Jobs</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <div class="row">
                <div class="col-lg-5 col-xl-4 col-xxl-3">
                    <div class="pxp-jobs-list-side-filter">
                        <div class="pxp-list-side-filter-header d-flex d-lg-none">
                            <div class="pxp-list-side-filter-header-label">Filter Jobs</div>
                            <a role="button"><span class="fa fa-sliders"></span></a>
                        </div>
                        <div class="mt-4 mt-lg-0 d-lg-block pxp-list-side-filter-panel">
                            <h3>Type of Employment</h3>
                            <div class="list-group mt-2 mt-lg-3">
                                <label class="list-group-item d-flex justify-content-between align-items-center pxp-checked">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="" checked>
                                            Full Time
                                        </span>
                                    <span class="badge rounded-pill">56</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            Part Time
                                        </span>
                                    <span class="badge rounded-pill">34</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            Remote
                                        </span>
                                    <span class="badge rounded-pill">24</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            Internship
                                        </span>
                                    <span class="badge rounded-pill">27</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            Contract
                                        </span>
                                    <span class="badge rounded-pill">76</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            Training
                                        </span>
                                    <span class="badge rounded-pill">28</span>
                                </label>
                            </div>

                            <h3 class="mt-3 mt-lg-4">Experience Level</h3>
                            <div class="list-group mt-2 mt-lg-3">
                                <label class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            No Experience
                                        </span>
                                    <span class="badge rounded-pill">98</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3 pxp-checked">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="" checked>
                                            Entry-Level
                                        </span>
                                    <span class="badge rounded-pill">44</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3 pxp-checked">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="" checked>
                                            Mid-Level
                                        </span>
                                    <span class="badge rounded-pill">35</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            Senior-Level
                                        </span>
                                    <span class="badge rounded-pill">45</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            Manager / Executive
                                        </span>
                                    <span class="badge rounded-pill">21</span>
                                </label>
                            </div>

                            <h3 class="mt-3 mt-lg-4">Salary Range</h3>
                            <div class="list-group mt-2 mt-lg-3">
                                <label class="list-group-item d-flex justify-content-between align-items-center pxp-checked">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="" checked>
                                            $700 - $1000
                                        </span>
                                    <span class="badge rounded-pill">34</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3 pxp-checked">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="" checked>
                                            $1000 - $1200
                                        </span>
                                    <span class="badge rounded-pill">22</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            $1200 - $1400
                                        </span>
                                    <span class="badge rounded-pill">67</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            $1500 - $1800
                                        </span>
                                    <span class="badge rounded-pill">12</span>
                                </label>
                                <label class="list-group-item d-flex justify-content-between align-items-center mt-2 mt-lg-3">
                                        <span class="d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="">
                                            $2000 - $3000
                                        </span>
                                    <span class="badge rounded-pill">26</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8 col-xxl-9">
                    <div class="pxp-jobs-list-top mt-4 mt-lg-0">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                @php
                                $num = 0;
                                foreach ($jobdata as $rs){
                                    $num +=1;
                                }
                                @endphp

                                <h2><span class="pxp-text-light">Showing</span> {{$num}} <span class="pxp-text-light">jobs</span></h2>
                            </div>
                            <div class="col-auto">
                                <select class="form-select">
                                    <option value="0" selected>Most relevant</option>
                                    <option value="1">Newest</option>
                                    <option value="2">Oldest</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($jobdata as $rs)
                        <div class="col-xxl-6 pxp-jobs-card-2-container">
                            <div class="pxp-jobs-card-2 pxp-has-border">
                                <div class="pxp-jobs-card-2-top">
                                    <a href="single-company-1.html" class="pxp-jobs-card-2-company-logo" style="background-image: url({{Storage::url($rs->image)}});"></a>
                                    <div class="pxp-jobs-card-2-info">
                                        <a href="/job/{{$rs->id}}" class="pxp-jobs-card-2-title">{{$rs->title}}</a>
                                        <div class="pxp-jobs-card-2-details">
                                            <a href="/joblist?location={{$rs->location}}&category_id=&subcategory_id=" class="pxp-jobs-card-2-location">
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
                                        <span class="pxp-jobs-card-2-date pxp-text-light">{{$rs->created_at}}</span> <a href="single-company-1.html" class="pxp-jobs-card-2-company">Artistre Studio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
                        <!--
                        <div class="col-auto">
                            <nav class="mt-3 mt-sm-0" aria-label="Jobs list pagination">
                                <ul class="pagination pxp-pagination">
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
                        -->
                        <div class="col-auto">
                            <a href="#" class="btn rounded-pill pxp-section-cta mt-3 mt-sm-0">Show me more<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
