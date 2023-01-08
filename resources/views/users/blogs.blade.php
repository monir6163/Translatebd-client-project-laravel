@extends('users.master')

@section('content')

<div class="container" style="min-height: 69.3vh;">
	<h2 class="text-center my-5">Blog Posts</h2>

	<div class="row">

		@foreach( $posts as $post )
		<div class="col-md-6 col-sm-12 mb-5">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center justify-content-between">
						<div class="col-md-6 col-sm-12 post-title">
							<a href='{{ route("single", ["id" => $post->id]) }}'>
								<h4 class="card-title">{{ $post->title }}</h4>
							</a>
						</div>
						<div class="col-md-6 col-sm-12 post-content read-more">
							<a href='{{ route("single", ["id" => $post->id]) }}'><button class='btn btn-success'>Read More</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</div>

<div class="nav_link">
	{{ $posts->links() }}
</div>

@endsection


@section('style')
<style>
	/* .card {
		border-radius: 5px !important;
		border: 1px solid #183153 !important;
	}

	.card-header {
		background-color: #183153 !important;
		color: #fff !important;
	}

	.card-body p {
		margin-bottom: 0px !important;
	} */

	.card-header a {
		text-decoration: none !important;
		/* color: #181818; */
	}

	.read-more {
		text-align: right;
	}

	.read-more a button {
		background-color: #183153 !important;
	}

	.nav_link nav {
		margin-bottom: 2.5rem;
		display: flex;
		justify-content: center;
	}
	
	@media (max-width: 480px) {

      .post-title,
      .post-content{
          display: flex;
          justify-content: center !important;
      }
      
      .post-content{
          margin-top: .8rem;
          margin-bottom: .5rem;
      }
    }
	
	
</style>
@endsection