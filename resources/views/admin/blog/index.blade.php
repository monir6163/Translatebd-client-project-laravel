@extends('admin.master')

@section('content')

<div class="container-fluid">

	<div class="row">
		<div class="col-md-6">
			<h2>Blog Posts</h2>
		</div>
		<div class="col-md-6 create-button">
			<a href="{{ route('admin.blog.create') }}">
				<button class="btn btn-lg btn-info">Create Post</button>
			</a>
		</div>
		<hr class="my-4">

	</div>

	<div class="row">

		@foreach( $blogs as $blog )
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>{{ $blog->title }}</h4>
				</div>
				<div class="card-body">
					<p>{!! $blog->content !!}</p>
				</div>
			</div>
		</div>

		<div class="col-md-2 d-flex align-items-center justify-content-center">
			<a href="{{ route('admin.blog.edit',[ 'id' => $blog->id ]) }}">
				<button class="btn btn-info btn-lg">Edit</button>
			</a>
			<form action="{{ route('admin.blog.delete', ['id' => $blog->id]) }}" method="POST">
				@csrf
				@method('DELETE')
				<a href="{{ route('admin.blog.delete', ['id' => $blog->id]) }}"><button class="btn btn-info btn-lg mx-2">Delete</button></a>
			</form>
		</div>
		@endforeach


	</div>

</div>

{{ $blogs->links() }}


@endsection

@section('style')
<style>
	.card {
		border-radius: 5px !important;
		border: 1px solid #183153 !important;
	}

	.card-header {
		background-color: #183153 !important;
		color: #fff !important;
	}

	.card-header h4 {
		margin-bottom: 0px !important;
	}

	.card-body p {
		margin-bottom: 0px !important;
	}

	nav {
		margin-bottom: 2.5rem;
		display: flex;
		justify-content: center;
	}

	.create-button {
		text-align: right;
	}

	button {
		background-color: #183153 !important;
		color: #fff !important;
	}
</style>
@endsection