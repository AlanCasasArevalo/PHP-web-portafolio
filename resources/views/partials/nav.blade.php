<nav>
    <ul>
        <li class="{{setActiveCssClass('home')}}"><a href={{route('home')}}>@lang('Home')</a></li>
        <li class="{{setActiveCssClass('about')}}"><a href={{route('about')}}>@lang('About')</a></li>
        <li class="{{setActiveCssClass('contact')}}"><a href={{route('contact')}}>@lang('Contact')</a></li>
        <li class="{{setActiveCssClass('projects.*')}}"><a href={{route('projects.index')}}>@lang('Projects')</a></li>
    </ul>
</nav>
