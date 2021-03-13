<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="{{route('home')}}">
            {{config('app.name')}}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link {{setActiveCssClass('home')}}"
                                        href={{route('home')}}>@lang('Home')</a></li>
                <li class="nav-item"><a class="nav-link {{setActiveCssClass('about')}}"
                                        href={{route('about')}}>@lang('About')</a></li>
                <li class="nav-item"><a class="nav-link {{setActiveCssClass('contact')}}"
                                        href={{route('contact')}}>@lang('Contact')</a></li>
                <li class="nav-item"><a class="nav-link {{setActiveCssClass('projects.*')}}"
                                        href={{route('projects.index')}}>@lang('Projects')</a></li>
                {{--        Esta directiva hace lo contrario que la directiva @auth hace que solo se muestre si no estmos logados  --}}
                @guest
                    <li class="nav-item"><a class="nav-link" href={{route('login')}}>Login</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="#"
                                            onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">>
                            {{ __('Logout') }}
                        </a></li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

