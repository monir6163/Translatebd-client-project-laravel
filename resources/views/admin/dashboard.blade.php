@extends('admin.master')

@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Three charts -->
    <!-- ============================================================== -->
    <div class="row justify-content-center">

        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info d-flex justify-content-center">
                <a href="{{ route('admin.translate.index') }}">
                    <h3 class="box-title">Translate</h3>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info d-flex justify-content-center">
                <a href="{{ route('admin.blog.index') }}">
                    <h3 class="box-title">Blog</h3>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info d-flex justify-content-center">
                <a href="{{ route('admin.about.index') }}">
                    <h3 class="box-title">About</h3>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info d-flex justify-content-center">
                <a href="{{ route('admin.termsCondition.index') }}">
                    <h3 class="box-title">Terms & Condition</h3>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info d-flex justify-content-center">
                <a href="{{ route('admin.privacyPolicy.index') }}">
                    <h3 class="box-title">Privacy & Policy</h3>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info d-flex justify-content-center">
                <a href="">
                    <h3 class="box-title">Seo Setting</h3>
                </a>
            </div>
        </div>

    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection
