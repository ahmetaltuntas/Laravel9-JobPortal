@extends('layouts.companybase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)


@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection


@section('content')
    <div class="pxp-dashboard-content-details">
        <h1>New Job Offer</h1>
        <p class="pxp-text-light">Add a new job to your company's jobs list.</p>

        <form action="{{route('companycp.storejob')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mt-4 mt-lg-5">
                <div class="col-xxl-6">
                    <div class="mb-3">
                        <label for="pxp-company-job-title" class="form-label">Job title</label>
                        <input type="text" id="pxp-company-job-title" name="title" class="form-control" placeholder="Add title">
                        <input type="text" name="user_id" class="form-control" value="{{Auth::id()}}" hidden>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <label for="pxp-company-job-location" class="form-label">Location</label>
                    <input type="text" id="pxp-company-job-location" name="location" class="form-control" placeholder="E.g. San Francisco, CA">
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="mb-3">
                        <label for="pxp-company-job-category" class="form-label">Category</label>
                        <select id="pxp-company-job-category" name="category_id" class="form-select">
                            @foreach($data as $rs)
                                <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="pxp-company-job-description" class="form-label">Job description</label>
                <textarea class="form-control" id="pxp-company-job-description" name="description" placeholder="Type the description here..."></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#pxp-company-job-description' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
            </div>

            <div class="row">
                <div class="col-md-6 col-xxl-3">
                    <div class="mb-3">
                        <label for="pxp-company-job-experience" class="form-label">Experience</label>
                        <input type="text" id="pxp-company-job-experience" name="experience" class="form-control" placeholder="E.g. Minimum 3 years">
                    </div>
                    <div class="mb-3">
                        <label for="pxp-company-job-experience" class="form-label">Keywords</label>
                        <input type="text" id="pxp-company-job-experience"  name="keywords" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="mb-3">
                        <label for="pxp-company-job-level" class="form-label">Career level</label>
                        <select id="pxp-company-job-level" name="level" class="form-select">
                            <option value="No Experience" selected="">No Experience</option>
                            <option value="Entry-Level">Entry-Level</option>
                            <option value="Mid-Level">Mid-Level</option>
                            <option value="Senior-Level">Senior-Level</option>
                            <option value="Manager / Executive">Manager / Executive</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="mb-3">
                        <label for="pxp-company-job-type" class="form-label">Employment type</label>
                        <select id="pxp-company-job-type" name="typeof" class="form-select">
                            <option value="Full Time" selected="">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Remote">Remote</option>
                            <option value="Internship">Internship</option>
                            <option value="Contract">Contract</option>
                            <option value="Training">Training</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="mb-3">
                        <label for="pxp-company-job-salary" class="form-label">Salary</label>
                        <input type="text" id="pxp-company-job-experience"  name="salary" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option selected="">True</option>
                            <option>False</option>
                        </select>
                    </div>

                </div>

            </div>
            <div class="pxp-candidate-photo mb-3">
                <input type="file" id="pxp-candidate-photo-choose-file" name="image" accept="image/*">
                <label for="pxp-candidate-photo-choose-file" class="pxp-cover"><span>Upload<br>Photo</span></label>
            </div>
            <div class="mt-4 mt-lg-5">
                <button class="btn rounded-pill pxp-section-cta" type="submit">Publish Job</button>
            </div>
        </form>
    </div>
@endsection
