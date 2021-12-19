<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    @yield('css')

</head>
<body>

<!-- Start Make Panel  -->
<section class="container-fluid p-0">

    <!--  Start Make Menu   -->
    <section class="menu">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">

            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('panel.index') }}">panel</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('panel.showData') }}">Seo</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('slider.index') }}">Slider</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('about.index') }}">About</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('product.index') }}">Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route("team.index") }}">Team</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('post.index') }}">Post</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route("info.index") }}">Information</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('social.index') }}">Social</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route("link.index") }}">RelatedLink</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route("contact.index") }}">Contact</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('home.page') }}"
                           target="_blank">show-website</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout-panel') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf  {{-- token --}}
                        </form>
                    </li>


                </ul>
            </div>
        </nav>
    </section>
    <!--  End Make Menu     -->


    <!--  Start Make Content Panel  -->
    <section class="content">
        @yield('content')
    </section>
    <!--  End Make Content Panel    -->


</section>
<!-- End Make Panel    -->


<!--  js link  -->
<script src="{{asset("js/app.js")}}"></script>
@yield('js')
</body>
</html>
