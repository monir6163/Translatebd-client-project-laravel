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
		<div class="col-lg-6 col-md-12">
			<div class="white-box analytics-info pb-5 text-center mt-5">
				<a href="{{ route('admin.about.edit') }}">
					<h1 class="box-title my-3">About Page Content</h1>
				</a>
				<a href="{{ route('admin.about.create') }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.about.edit') }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection


@section('style')
<style>
	button {
		background-color: #183153 !important;
		color: #fff !important;
	}
</style>
@endsection