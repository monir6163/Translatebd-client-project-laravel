@extends('admin.master')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">

		<!-- English To Bangla -->
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info">
				<?php $english_to_bangla = "English To Bangla" ?>
				<!-- {{ $english_to_bangla = "English To Bangla" }} -->
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $english_to_bangla ]) }}">
					<h3 class="box-title text-center">{{ $english_to_bangla }}</h3>
				</a>
				<a href="{{ route('admin.translate.create', [ 'translate_type' => $english_to_bangla ]) }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $english_to_bangla ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
		<!-- End English To Bangla -->

		<!-- Bangla To English -->
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info">
				<?php $bangla_to_english = "Bangla To English" ?>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $bangla_to_english ]) }}">
					<h3 class="box-title text-center">{{ $bangla_to_english }}</h3>
				</a>
				<a href="{{ route('admin.translate.create', [ 'translate_type' => $bangla_to_english ]) }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $bangla_to_english ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
		<!-- End Bangla To English -->

		<!-- English To Arabic -->
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info">
				<?php $english_to_arabic = "English To Arabic" ?>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $english_to_arabic ]) }}">
					<h3 class="box-title text-center">{{ $english_to_arabic }}</h3>
				</a>
				<a href="{{ route('admin.translate.create', [ 'translate_type' => $english_to_arabic ]) }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $english_to_arabic ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
		<!-- End English To Arabic -->

		<!-- Arabic To English -->
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info">
				<?php $arabic_to_english = "Arabic To English" ?>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $arabic_to_english ]) }}">
					<h3 class="box-title text-center">{{ $arabic_to_english }}</h3>
				</a>
				<a href="{{ route('admin.translate.create', [ 'translate_type' => $arabic_to_english ]) }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $arabic_to_english ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
		<!-- End Arabic To English -->

		<!-- English To Spanish -->
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info">
				<?php $english_to_spanish = "English To Spanish" ?>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $english_to_spanish ]) }}">
					<h3 class="box-title text-center">{{ $english_to_spanish }}</h3>
				</a>
				<a href="{{ route('admin.translate.create', [ 'translate_type' => $english_to_spanish ]) }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $english_to_spanish ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
		<!-- End English To Spanish -->

		<!-- Spanish To English -->
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info">
				<?php $spanish_to_english = "Spanish To English" ?>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $spanish_to_english ]) }}">
					<h3 class="box-title text-center">{{ $spanish_to_english }}</h3>
				</a>
				<a href="{{ route('admin.translate.create', [ 'translate_type' => $spanish_to_english ]) }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $spanish_to_english ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
		<!-- End Spanish To English -->

		<!-- English To Hindi -->
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info">
				<?php $english_to_hindi = "English To Hindi" ?>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $english_to_hindi ]) }}">
					<h3 class="box-title text-center">{{ $english_to_hindi }}</h3>
				</a>
				<a href="{{ route('admin.translate.create', [ 'translate_type' => $english_to_hindi ]) }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $english_to_hindi ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
		<!-- End English To Hindi -->

		<!-- Hindi To English -->
		<div class="col-lg-4 col-md-12">
			<div class="white-box analytics-info">
				<?php $hindi_to_english = "Hindi To English" ?>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $hindi_to_english ]) }}">
					<h3 class="box-title text-center">{{ $hindi_to_english }}</h3>
				</a>
				<a href="{{ route('admin.translate.create', [ 'translate_type' => $hindi_to_english ]) }}">
					<button class="btn btn-info btn-lg">Post Content</button>
				</a>
				<a href="{{ route('admin.translate.edit', [ 'translate_type' => $hindi_to_english ]) }}">
					<button class="btn btn-info btn-lg">Edit Content</button>
				</a>
			</div>
		</div>
		<!-- End Hindi To English -->

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