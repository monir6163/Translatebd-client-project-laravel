@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @extends('users.master')

@section('content') --}}

<!-- Card Content -->
{{-- <div class="container card-content">
    <div class="row my-5 justify-content-center">

        <div class="col-sm-6 col-md-3 m-1 single-translate text-center py-3">
            <i class="fa-solid fa-language d-block mb-3"></i>
            <a href="{{ route('english_to_bangla') }}" class="btn btn-primary"
                alt="English To Bangla Translator">English To Bangla Translator</a>
        </div>
        <div class="col-sm-6 col-md-3 m-1 single-translate text-center py-3">
            <i class="fa-solid fa-language d-block mb-3"></i>
            <a href="{{ route('bangla_to_english') }}" class="btn btn-primary" alt="Bangla To English Translator">Bangla
                To English Translator</a>
        </div>


        <div class="col-sm-6 col-md-3 m-1 single-translate text-center py-3">
            <i class="fa-solid fa-language d-block mb-3"></i>
            <a href="{{ route('english_to_arabic') }}" class="btn btn-primary"
                alt="English To Arabic Translator">English To Arabic Translator</a>
        </div>
        <div class="col-sm-6 col-md-3 m-1 single-translate text-center py-3">
            <i class="fa-solid fa-language d-block mb-3"></i>
            <a href="{{ route('arabic_to_english') }}" class="btn btn-primary" alt="Arabic To English Translator">Arabic
                To English Translator</a>
        </div>


        <div class="col-sm-6 col-md-3 m-1 single-translate text-center py-3">
            <i class="fa-solid fa-language d-block mb-3"></i>
            <a href="{{ route('english_to_spanish') }}" class="btn btn-primary"
                alt="English To Spanish Translator">English To Spanish Translator</a>
        </div>
        <div class="col-sm-6 col-md-3 m-1 single-translate text-center py-3">
            <i class="fa-solid fa-language d-block mb-3"></i>
            <a href="{{ route('spanish_to_english') }}" class="btn btn-primary"
                alt="Spanish To English Translator">Spanish To English Translator</a>
        </div>


        <div class="col-sm-6 col-md-3 m-1 single-translate text-center py-3">
            <i class="fa-solid fa-language d-block mb-3"></i>
            <a href="{{ route('english_to_hindi') }}" class="btn btn-primary" alt="English To Hindi Translator">English
                To Hindi Translator</a>
        </div>
        <div class="col-sm-6 col-md-3 m-1 single-translate text-center py-3">
            <i class="fa-solid fa-language d-block mb-3"></i>
            <a href="{{ route('hindi_to_english') }}" class="btn btn-primary" alt="Hindi To English Translator">Hindi To
                English Translator</a>
        </div>


    </div>
</div> --}}
<!-- End Card Content -->

<!-- Main Content -->
{{-- <div class="container main-content mb-5">
    <div class="row">

        <div class="col-md-12 my-5">
            <h2 class="text-center">Latest Blog Posts</h2>
            <hr>
        </div>

        @foreach( $posts as $post )
        <div class="col-md-4 col-sm-12 mb-3">
            <div class="card">
                <div class="card-header text-center">
                    {{ $post->title }}
                </div>
                <div class="card-body text-center">
                    <a href='{{ route("single", ["id" => $post->id]) }}'><button class='btn btn-success'>Read
                            More</button></a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div> --}}
<!-- End Main Content -->

{{-- @endsection


@section('style')

<style>
    button {
        background-color: #183153 !important;
        color: #fff !important;
        width: 50% !important;
    }

    .navbar-dark .navbar-toggler {
        text-align: left !important;
        width: 15% !important;
    }
</style>

@endsection --}}

@endsection
