<nav class="navbar navbar-expand-md bg-white navbar-light" id="navTop">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="{{url('/')}}"><span>Logo Company</span></a>
            
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav navbar-primary w-100 ml-auto">
            <li class="nav-item">
                <a @if($curpage == "home") class="nav-link nav-active" @else class="nav-link" @endif @if($language == "id") href="{{route('home', 'id')}}" @else href="{{route('home', 'en')}}" @endif>@if($language == "id") Beranda @else Home @endif</a>
            </li>
            <li class="nav-item">
                <a @if($curpage == "about-us") class="nav-link nav-active" @else class="nav-link" @endif @if($language == "id") href="{{route('about', 'id')}}" @else href="{{route('about', 'en')}}" @endif>@if($language == "id") Tentang Kami @else About Us @endif</a>
            </li>
            <li class="nav-item">
                <a @if($curpage == "service") class="nav-link nav-active" @else class="nav-link" @endif @if($language == "id") href="{{route('service', 'id')}}" @else href="{{route('service', 'en')}}" @endif>@if($language == "id") Servis @else Service @endif</a>
            </li>
            <li class="nav-item">
                <a @if($curpage == "news") class="nav-link nav-active" @else class="nav-link" @endif @if($language == "id") href="{{route('news', 'id')}}" @else href="{{route('news', 'en')}}" @endif>@if($language == "id") Artikel @else News @endif</a>
            </li>
            <li class="nav-item">
                <a @if($curpage == "contact-us") class="nav-link nav-active" @else class="nav-link" @endif @if($language == "id") href="{{route('contact', 'id')}}" @else href="{{route('contact', 'en')}}" @endif>@if($language == "id") Kontak @else Contact Us @endif</a>
            </li>
            <div id="divLanguage">
                <li class="nav-item" style="margin-right: 2%;">
                    <a style="cursor: pointer" id="indonesia" @if($language == "id") class="nav-link nav-active" @else class="nav-link" @endif> ID</a>
                </li>
                <li class="nav-item" style="margin: 0;top: 5px;">
                    |
                </li>
                <li class="nav-item" style="margin-left:2%;">
                    <a style="cursor: pointer" id="english" @if($language == "en") class="nav-link nav-active" @else class="nav-link" @endif> EN </a>
                </li>
            </div>
        </ul>
        </div>
    </div>
</nav>