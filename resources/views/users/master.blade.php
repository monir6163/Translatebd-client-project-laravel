<!DOCTYPE html>
<html lang="en">
@php
$info=DB::table('seos')->get();
@endphp

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $info[0]->google_analytics }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '{{ $info[0]->google_analytics }}');
    </script>
    {{-- google site verification --}}
    <meta name="google-site-verification" content="{{
        $info[0]->google_site_verification
    }}" />

    {{-- google adsense --}}
    <script data-ad-client="{{ $info[0]->google_adsence_code }}" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"> </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- meta all in one seo pack --}}
    <meta name="description" content="{{
            $info[0]->meta_description
        }}">
    <meta name="keywords" content="{{
            $info[0]->meta_keywords
        }}">
    <meta name="author" content="{{
            $info[0]->meta_author
        }}">
    <meta name="tags" content="{{
            $info[0]->meta_tag
        }}">



    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <title>{{
        $info[0]->meta_title
        }}</title>
    <style>
        /* body {
			min-height: 100%;
			position: relative;
		}

		.footer {
			position: absolute !important;
			bottom: 0 !important;
		} */

        .header-top .nav a {
            width: 2rem;
            height: 2rem;
        }

        @media screen and (max-width: 480px) {

            .top-logo {
                text-align: center !important;
                margin-bottom: .8rem !important;
            }

            .top-social-nav ul {
                justify-content: center !important;
            }
        }
    </style>
    @yield('style')
</head>

<body>

    <!-- Header Top -->
    <div class="container header-top">
        <div class="row my-3">

            <!-- Logo -->
            <div class="col-md-6 col-sm-12 top-logo">
                <a href="{{ route('index') }}" class="logo">
                    <h3><span class="first">TRANSLATE </span><span class="second">BD</span></h3>
                </a>
            </div>
            <!-- End Logo -->

            <!-- Social Nav -->
            <div class="col-md-6 col-sm-12 top-social-nav">
                <ul class="nav justify-content-end">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page" href="https://www.facebook.com/translatebd/">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" aria-current="page" href="https://twitter.com/translatebd">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" aria-current="page" href="http://www.linkedin.com/in/translatebd">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" aria-current="page" href="https://instagram.com/mahfujnet">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Social Nav -->

        </div>
    </div>
    <!-- End Header Top -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item active"> <a class="nav-link" href="{{ route('index') }}">Home </a> </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Translate </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('english_to_bangla') }}"
                                    alt="English to Bangla Translator">English to Bangla Translator</a></li>
                            <li><a class="dropdown-item" href="{{ route('bangla_to_english') }}"
                                    alt="Bangla to English Translator">Bangla to English Translator</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ route('english_to_arabic') }}"
                                    alt="English to Arabic Translator">English to Arabic Translator</a></li>
                            <li><a class="dropdown-item" href="{{ route('arabic_to_english') }}"
                                    alt="Arabic to English Translator">Arabic to English Translator</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ route('english_to_spanish') }}"
                                    alt="English to Spanish Translator">English to Spanish Translator</a></li>
                            <li><a class="dropdown-item" href="{{ route('spanish_to_english') }}"
                                    alt="Spanish to English Translator">Spanish to English Translator</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ route('english_to_hindi') }}"
                                    alt="English to Hindi Translator">English to Hindi Translator</a></li>
                            <li><a class="dropdown-item" href="{{ route('hindi_to_english') }}"
                                    alt="Hindi to English Translator">Hindi to English Translator</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}"> Blog Posts </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"> About </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"> Contact </a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="{{ route('terms-condition') }}"> Terms & Condition </a></li> -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('privacy-policy') }}"> Privacy & Policy </a>
                    </li>
                </ul>
            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
    </nav>
    <!-- End Navigation -->


    @yield('content')


    <!-- Footer -->
    <div class="container-fluid footer pt-4 pb-4">
        <div class="row">

            <div class="col-md-4 col-sm-12 quick-nav-link">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blogs') }}">Blog Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('terms-condition') }}">Terms & Condition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('privacy-policy') }}">Privacy & Policy</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-12 address py-4">
                <ul class="nav justify-content-center">
                    <li class="nav-item mx-1">
                        <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Phone: +8801771458618
                    </li>
                    <li class="nav-item mx-1">
                        <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;Email: translatebds@gamil.com
                    </li>
                    <li class="nav-item mx-1">
                        <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Made in Bangladesh
                    </li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-12 social-link">
                <ul class="nav justify-content-center">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page" href="https://www.facebook.com/translatebd/">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" aria-current="page" href="https://twitter.com/translatebd">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" aria-current="page" href="http://www.linkedin.com/in/translatebd">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" aria-current="page" href="https://instagram.com/mahfujnet">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- End Footer -->


    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>

    @yield('scripts')

</body>

</html>
