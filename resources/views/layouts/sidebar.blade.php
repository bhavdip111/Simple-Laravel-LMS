<section class="sidebar">
    <div class="avatar">
        <figure class="avatar-figure">
            <img src="//api.adorable.io/avatars/151/jason%40jason.com" class="avatar__img" width="150" height="150" />
            <figcaption class="avatar__name">{{ Auth::user()->name }}</figcaption>
        </figure>
        <span class="avatar__status">Enrolled in 1 course(s)</span>
    </div>
    <nav class="sidebar-nav">
        <ul class="sidebar-nav__links">
            <li>
                <a class="sidebar-nav__link" href="{{ url('/') }}"><object type="image/svg+xml" data="{{ asset('img/icons/home.svg') }}" class="sidebar-icon" style="margin-top:-3px"></object>Home</a>
            </li>
            <li>
                <a class="sidebar-nav__link" href="{{ url('/courses') }}"><object type="image/svg+xml" data="{{ asset('img/icons/courses.svg') }}" class="sidebar-icon"></object>Courses</a>
            </li>
            <li>
                <a class="sidebar-nav__link" href="#"><object type="image/svg+xml" data="{{ asset('img/icons/settings.svg') }}" class="sidebar-icon"></object>Settings</a>
            </li>
            @if (Auth::user()->is('admin'))
                <li>
                    <a class="sidebar-nav__link" href="#"><object type="image/svg+xml" data="{{ asset('img/icons/lecturers.svg') }}" class="sidebar-icon"></object>Lecturers</a>
                </li>
                <li>
                    <a class="sidebar-nav__link" href="#"><object type="image/svg+xml" data="{{ asset('img/icons/students.svg') }}" class="sidebar-icon"></object>Students</a>
                </li>
            @endif
        </ul>
    </nav>
</section>