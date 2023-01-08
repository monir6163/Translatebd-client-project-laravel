@extends('users.master')

@section('content')

<div class="container-fluid" style="min-height: 74.3vh;">

	<div class="row">

		@if(Session::has('mail_success'))
		<div class="col-md-8 m-auto mt-4">
			<div class="alert alert-success">
				{{ Session::get('mail_success') }}
			</div>
		</div>
		@endif

		<div class="col-md-12">
			<h2 class="text-center mt-4">Contact Us</h2>
			<hr class="mb-5">
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 m-auto">
			<form action="{{ route('sendmail') }}" method="POST">
				@csrf
				<div class="mb-3">
					<label for="email" class="form-label">
						<h4><b>Email</b></h4>
					</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
				</div>

				<div class="mb-3">
					<label for="title" class="form-label">
						<h4><b>Title</b></h4>
					</label>
					<input type="text" name="title" class="form-control" id="title" placeholder="Enter your title" required>
				</div>

				<div class="mb-3">
					<label for="content" class="form-label">
						<h4><b>Content</b></h4>
					</label>
					<textarea class="form-control" name="content" id="editor" rows="3" placeholder="Enter your content" required></textarea>
				</div>

				<div class="mb-5">
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-lg btn-info">Send</button>
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>

</div>


@endsection

@section('style')
<style>
	input,
	textarea {
		border-radius: 5px !important;
		border: 1px solid #183153 !important;
	}

	button {
		background-color: #183153 !important;
		color: #fff !important;
		width: 100% !important;
	}

	.ck-editor__editable {
		min-height: 200px;
		border-radius: 0px 0px 5px 5px !important;
	}

	/* ck-toolbar ck-toolbar_grouping */
	.ck-toolbar {
		border-radius: 5px 5px 0px 0px !important;
	}

	.navbar-dark .navbar-toggler {
		text-align: left !important;
		width: 15% !important;
	}
</style>
@endsection

@section('script')

<script>
	ClassicEditor
		.create(document.querySelector('#editor'), {

			ckfinder: {
				uploadUrl: '{{ route("admin.blog.upload", ["_token" => csrf_token() ]) }}'
			}

		})
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});
</script>


@endsection