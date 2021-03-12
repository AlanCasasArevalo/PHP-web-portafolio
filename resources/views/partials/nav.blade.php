<nav>
    <ul>
        <li class="{{setActiveCssClass('home')}}"><a href={{route('home')}}>@lang('Home')</a></li>
        <li class="{{setActiveCssClass('about')}}"><a href={{route('about')}}>@lang('About')</a></li>
        <li class="{{setActiveCssClass('contact')}}"><a href={{route('contact')}}>@lang('Contact')</a></li>
        <li class="{{setActiveCssClass('projects.*')}}"><a href={{route('projects.index')}}>@lang('Projects')</a></li>
        {{--        Esta directiva hace lo contrario que la directiva @auth hace que solo se muestre si no estmos logados  --}}
        @guest
            <li><a href={{route('login')}}>Login</a></li>
        @else
            <li><a href="#"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">>
                    {{ __('Logout') }}
                </a></li>

        @endguest
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

