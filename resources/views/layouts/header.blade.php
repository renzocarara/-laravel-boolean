<header>
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Careers">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Route::currentRouteName() === 'homepage' ? "active" : "" }}">
                        <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'corso' ? "active" : "" }}">
                        <a class="nav-link" href="{{ route('corso') }}">Corso</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'dopo_corso' ? "active" : "" }}">
                        <a class="nav-link" href="{{ route('dopo_corso') }}">Dopo il corso</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'lezione' ? "active" : "" }}">
                        <a class="nav-link" href="{{ route('lezione') }}">Lezione gratuita</a>
                    </li>
                    <li id="cta-btn" class="nav-item">
                        <a class="nav-link" href="{{ route('candidati') }}">Candidati ora</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>