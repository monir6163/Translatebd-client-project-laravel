@extends('admin.master')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">

		<!-- English To Bangla -->
		@foreach($translates as $translate)
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info d-flex flex-column justify-content-center">

				<a href="{{ route('admin.translate.edit', [ 'id' => $translate->id ]) }}">
					<h3 class="box-title">{{ ucwords($translate->translate_type) }}</h3>
				</a>
				<!--<a href="{{ route('admin.translate.create', [ 'id' => $translate->id ]) }}">-->
				<!--	<button class="btn btn-info btn-lg">Post Content</button>-->
				<!--</a>-->
				<a href="{{ route('admin.translate.edit', [ 'id' => $translate->id ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>

			</div>
		</div>
		@endforeach
		<!-- End English To Bangla -->

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