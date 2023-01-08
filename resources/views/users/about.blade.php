@extends('users.master')

@section('content')

<div class="container" style="min-height: 69.3vh;">

	<h2 class="text-center my-5">About</h2>

	<div class="row d-flex justify-content-center">

		<div class="col-md-10 mb-5">
			<div class="card">
				<div class="card-header text-center">
					<h2>{{ $about->title }}</h2>
				</div>
				<div class="card-body">
					<p>{!! $about->content !!}</p>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection


@section('style')
<style>
</style>
@endsection