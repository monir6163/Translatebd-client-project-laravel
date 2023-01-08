@extends('admin.master')

@section('content')
<div class="container-fluid">


    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">On Page Seo Setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.privacyPolicy.update', $data->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Meta Title"
                                    value="{{$data->meta_title}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Meta Author</label>
                                <input type="text" name="meta_author" class="form-control" placeholder="Meta Author"
                                    value="{{$data->meta_author}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Meta Tags</label>
                                <input type="text" name="meta_tag" class="form-control" placeholder="Meta Tags"
                                    value="{{$data->meta_tag}}">
                                <small style="color: red; font-weight: bold">ex: tranlatebd, english to bangla,
                                    bangla</small>
                            </div>
                            <div class="form-group">
                                <label for="title">Meta Keyword</label>
                                <input type="text" name="meta_keywords" class="form-control" placeholder="Meta Keyword"
                                    value="{{$data->meta_keywords}}">
                                <small style="color: red; font-weight: bold">ex: tranlatebd, english to bangla, bangla
                                    to english</small>
                            </div>
                            <div class="form-group">
                                <label for="title">Meta Description</label>
                                <textarea type="text" name="meta_description"
                                    class="form-control"> {{$data->meta_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Google verification Code</label>
                                <input type="text" name="google_site_verification" class="form-control"
                                    value="{{$data->google_site_verification}}">
                                <small style="color: red; font-weight: bold">Only Put Here Search Console Meta Tag
                                    Code</small>
                            </div>
                            <div class="form-group">
                                <label for="title">Google Analytics Code</label>
                                <textarea type="text" name="google_analytics"
                                    class="form-control"> {{$data->google_analytics}}</textarea>
                                <small style="color: red; font-weight: bold">Only Put Here google analytics code
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="title">Google Adsence Code</label>
                                <textarea type="text" name="google_adsence_code"
                                    class="form-control"> {{$data->google_adsence_code}}</textarea>
                                <small style="color: red; font-weight: bold">Only Put Here google adsence code
                                </small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-lg btn-info">Save Seo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection


@section('style')
<style>
    button {
        background-color: #183153 !important;
        color: #fff !important;
    }
</style>
@endsection
