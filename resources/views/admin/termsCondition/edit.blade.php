@extends('admin.master')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Edit About Content</h2>
			<hr class="mb-5">
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 m-auto">
			<form action="{{ route('admin.termsCondition.update') }}" method="POST">
				@csrf
				<div class="mb-3">
					<label for="title" class="form-label">
						<h4><b>Title</b></h4>
					</label>
					<input type="text" name="title" class="form-control" id="title" placeholder="Enter your title" value="{{ $termsCondition->title }}">
				</div>

				<div class="mb-3">
					<label for="content" class="form-label">
						<h4><b>Content</b></h4>
					</label>
					<textarea class="form-control" name="content" id="editor" rows="3" placeholder="Enter your content">{{ $termsCondition->content }}</textarea>
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

	.ck-editor__editable {
		min-height: 200px;
		border-radius: 0px 0px 5px 5px !important;
	}

	/* ck-toolbar ck-toolbar_grouping */
	.ck-toolbar {
		border-radius: 5px 5px 0px 0px !important;
	}
</style>
@endsection


@section('script')

<script>
	ClassicEditor
		.create(document.querySelector('#editor'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});
</script>


@endsection