@extends('users.master')

@section('content')

<div class="container">

	<div class="row d-flex justify-content-center">

		<div class="col-md-10 my-5">
			<div class="card">
				<div class="card-header text-center">
					<h2>{{ ucwords($single_post->title) }}</h2>
				</div>
				<div class="card-body">
					<p>{!! $single_post->content !!}</p>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection


@section('style')

<style>
	.navbar .nav-item:not(:last-child) {
		margin-right: 35px;
	}

	.dropdown-toggle::after {
		transition: transform 0.15s linear;
	}

	.show.dropdown .dropdown-toggle::after {
		transform: translateY(3px);
	}

	.dropdown-menu {
		margin-top: 0;
	}

	.header-top .logo {
		text-decoration: none;
	}

	.logo h3 {
		line-height: normal;
		margin-bottom: 0 !important;
	}

	.logo .first {
		color: #166ebe;
	}

	.logo .second {
		color: #183153;
	}

	.header-top .nav a {
		margin: 0 !important;
		padding: 0 !important;
		border: 0.1rem solid #183153;
		width: 2.2rem;
		height: 2.2rem;
		border-radius: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.header-top .nav a i {
		color: #183153 !important;
		font-size: 1.3rem;
	}

	.top-textarea a {
		color: #fff !important;
	}

	.bg-primary {
		background-color: #183153 !important;
	}

	.bg-primary .navbar-nav li a {
		color: #fff !important;
	}

	.bg-primary .navbar-nav li ul li a {
		color: #183153 !important;
	}

	.card-content .row {
		margin: 0;
	}

	.card-content .single-translate {
		background-color: #183153;
		border-radius: 5px;
	}

	.card-content .single-translate i {
		font-size: 2.5rem;
		color: #fff !important;
	}

	.card-content .single-translate a {
		background-color: #183153 !important;
		border-color: #fff !important;
	}

	.single-translate a {
		text-transform: uppercase;
	}

	.top-textarea {
		color: #fff;
		background: #183153;
		border-radius: 5px 5px 0 0;
	}

	.input-textarea>div {
		padding: 0px !important;
	}

	.input-textarea textarea {
		border-radius: 0px 0px 5px 5px;
	}

	.change-icon i {
		color: #183153;
		font-size: 1.5rem;
		transform: rotate(90deg);
		border: 0.2rem solid #183153;
		border-radius: 100%;
	}

	.blog-post h2 {
		text-align: center;
		color: #183153 !important;
		text-transform: uppercase;
	}

	.main-content .card-header {
		font-size: 1.5rem;
	}

	.footer {
		background-color: #183153 !important;
		color: #fff;
	}

	.footer .row {
		display: flex;
		align-items: center;
	}

	.footer .quick-nav-link a {
		color: #fff !important;
	}

	.footer .social-link a {
		margin: 0 !important;
		padding: 0 !important;
		border: 0.1rem solid #fff !important;
		width: 2.2rem;
		height: 2.2rem;
		border-radius: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		color: #fff !important;
	}

	/* .footer .address ul {
  list-style: none;
} */

	hr {
		border: 0.1rem solid;
	}

	/* Responsive CSS */
	@media screen and (max-width: 767px) {}
</style>

@endsection


@section('scripts')

<script>
	const $dropdown = $(".dropdown");
	const $dropdownToggle = $(".dropdown-toggle");
	const $dropdownMenu = $(".dropdown-menu");
	const showClass = "show";

	$(window).on("load resize", function() {
		if (this.matchMedia("(min-width: 768px)").matches) {
			$dropdown.hover(
				function() {
					const $this = $(this);
					$this.addClass(showClass);
					$this.find($dropdownToggle).attr("aria-expanded", "true");
					$this.find($dropdownMenu).addClass(showClass);
				},
				function() {
					const $this = $(this);
					$this.removeClass(showClass);
					$this.find($dropdownToggle).attr("aria-expanded", "false");
					$this.find($dropdownMenu).removeClass(showClass);
				}
			);
		} else {
			$dropdown.off("mouseenter mouseleave");
		}
	});
</script>

@endsection