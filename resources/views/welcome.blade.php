<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Justin Jongstra</title>
    @vite (['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-default">
    <header id="header">
        <span class="nav">
            <ul>
                @php
                    $nav = [
                        'Home' => '/',
                        'Contact' => '#contact',
                        'About' => '#about-me',
                    ];
                    foreach ($nav as $key => $value) {
                        $active = request()->is($value) ? 'active' : '';
                        echo "<li class='$active hover-secondary text-neutral'><a href='$value'>$key</a></li>";
                    }
                @endphp
                @if (Route::has('login') && Auth::check())
                    <li class="hover-secondary text-neutral"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                    <li class="hover-secondary text-neutral"><a href="{{ route('login') }}">Login</a></li>
                @endif
            </ul>
        </span>
    </header>
    <main>
        <article>
            <div class="p1 fit-content">
                - Welcome To My Website -
            </div>

            <div class="p2 fit-content text-neutral">
                Justin Jongstra -
                &nbsp;
                Software Developer
            </div>
            <div class="p3 text-secondary">
                Student at <a class="text-neutral text-hover-primary" href="https://www.rijnijssel.nl/"
                    target="_blank">RijnIJssel</a>
            </div>
            <img class="img" src="images/justin.png" alt="Justin Jongstra">

            <div class="p4">
                <div class="typewrite text-neutral" id="typewriter">
                </div>
            </div>
            <div class="button fit-content">
                <a href="#gamepc">
                    <button class="btn-primary border-secondary hover-secondary projects-button">Projects</button>
                </a>
            </div>
        </article>
        <div id="projects">
            @include('components.projects')
        </div>

        @include('components.about-me')

        @include('components.contact')

        <div class='back-to-top'>
            <button class='btn' id="scrollToTop">
                <a href="#header">
                    <i class='bi-arrow-up-circle text-hover-primary text-secondary'></i>
                </a>
            </button>
        </div>

        @include('components.footer')

    </main>

</body>

</html>
