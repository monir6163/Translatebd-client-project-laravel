@extends('admin.master')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Edit Blog Post</h2>
			<hr class="mb-5">
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 m-auto">
			<form action="{{ route('admin.blog.update', [ 'id' => $blog->id ]) }}" method="POST">
				@csrf
				<div class="mb-3">
					<label for="title" class="form-label">
						<h4><b>Title</b></h4>
					</label>
					<input type="text" name="title" class="form-control" id="title" placeholder="Enter your title" value="{{ $blog->title }}">
				</div>

				<div class="mb-3">
					<label for="content" class="form-label">
						<h4><b>Content</b></h4>
					</label>
					<textarea class="form-control" name="content" id="editor" rows="3" placeholder="Enter your content">{{ $blog->content }}</textarea>
				</div>

				<div class="mb-3">
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-lg btn-info">Update</button>
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