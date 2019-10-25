
<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('about') }}" href={{ route('about') }}>
                            {{ __('About') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">
                            {{ __('Projects') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">
                            {{ __('Contact') }}
                        </a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.querySelector('#logout-form').submit();
                            ">
                                {{ __('Logout') }}
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </li>
                    @endauth

                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </div>
    </div>
</nav>





