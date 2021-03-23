
<nav id="navbarTop" class="navbar navbar-expand-lg navbar-dark navbar-custom" style="background-color: #081c15;">
    <div class="container">
        <a class="navbar-brand" href=" {{ url('/') }}">
            <img width="100px" height="100px" src="{{ asset('images/favicon.webp')}}" alt="SAM OUR THE BOX LOGO" title="SAM OUR THE BOX LOGO">
            Briefing | The Box
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2 mt-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="btn btn-outline-white btn-outline" href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-outline-white btn-outline" href="{{ route('login') }}">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-outline-white btn-outline" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<script>
    $("#navbarTop").scrollspy({ offset: -75 });
</script>