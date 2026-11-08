<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RobComics - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            color-scheme: dark;
            --page-bg: #090909;
            --surface: #151515;
            --line: #383333;
            --red: #c8101e;
            --red-bright: #f12635;
            --muted: #b6b0b0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: var(--page-bg);
            color: #f7f2f2;
        }

        main { flex: 1; }

        .site-nav,
        .site-footer {
            background: var(--red);
        }

        .site-nav .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: .75rem 1.5rem;
        }

        .site-nav .navbar-brand,
        .site-nav .nav-link {
            color: #fff;
        }

        .site-nav .navbar-brand {
            font-weight: 800;
            letter-spacing: .04em;
        }

        .site-nav .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }

        .site-nav .navbar-nav {
            flex-direction: row;
            gap: .35rem;
        }

        .site-nav .nav-link {
            padding: .5rem .75rem;
            font-size: .9rem;
        }

        .site-nav .nav-link.active {
            color: #fff !important;
            font-weight: 800;
            box-shadow: inset 0 -2px #fff;
        }

        .site-footer {
            color: #fff;
            font-size: .8rem;
        }

        .site-footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: .75rem 1.5rem;
        }

        .site-footer p { margin: 0; }

        .footer-nav {
            display: flex;
            gap: 1rem;
        }

        .footer-nav a {
            color: #fff;
            text-decoration: none;
        }

        .footer-nav a:hover { text-decoration: underline; }

        .page-kicker {
            color: var(--red-bright);
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .page-intro { color: var(--muted); }

        .comic-card,
        .gallery-card,
        .contact-panel {
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: .35rem;
            background: var(--surface);
            color: #f7f2f2;
        }

        .comic-card { height: 100%; }

        .comic-art {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
        }

        .comic-card .card-body {
            display: flex;
            flex-direction: column;
            padding: 1.4rem;
        }

        .comic-card h2 {
            color: #fff;
            font-size: 1.35rem;
            font-weight: 900;
            letter-spacing: .04em;
        }

        .chapter-label {
            color: var(--red-bright);
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .14em;
        }

        .comic-card p,
        .contact-copy { color: var(--muted); }

        .story-tag {
            display: inline-block;
            margin-top: .5rem;
            padding: .3rem .6rem;
            border: 1px solid var(--red);
            color: #fff;
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .12em;
        }

        .watch-button {
            align-self: flex-start;
            margin-top: auto;
            padding: .5rem 1rem;
            border: 1px solid var(--red-bright);
            color: #fff;
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .14em;
        }

        .gallery-card { height: 100%; }

        .gallery-heading {
            padding: .9rem 1.1rem;
            background: var(--red);
            color: #fff;
            font-size: .95rem;
            font-weight: 800;
            letter-spacing: .07em;
            text-transform: uppercase;
        }

        .gallery-art {
            display: block;
            width: 100%;
            height: min(58vh, 530px);
            min-height: 250px;
            object-fit: contain;
            background: #050505;
        }

        .contact-hero {
            position: relative;
            overflow: hidden;
            padding: clamp(2rem, 6vw, 4rem);
            border-left: 5px solid var(--red);
            background: #181313;
        }

        .contact-hero h1 {
            max-width: 700px;
            margin: .4rem 0;
            font-family: Georgia, serif;
            font-size: clamp(2.5rem, 6vw, 4.25rem);
            font-weight: 700;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: clamp(2rem, 6vw, 4rem);
            padding: 2rem clamp(0rem, 5vw, 3rem);
        }

        .contact-grid h2,
        .contact-grid h3 {
            font-family: Georgia, serif;
            font-weight: 700;
        }

        .contact-form label {
            display: block;
            margin: 1rem 0 .4rem;
            color: #f1eaea;
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .contact-form .form-control {
            border-color: #494141;
            border-radius: .2rem;
            background: #111;
            color: #fff;
        }

        .contact-form .form-control::placeholder { color: #918989; }
        .contact-form textarea { min-height: 115px; }

        .send-button {
            margin-top: 1rem;
            padding: .65rem 1rem;
            border: 0;
            border-bottom: 2px solid var(--red-bright);
            background: transparent;
            color: #fff;
            font-size: .8rem;
            font-weight: 800;
            letter-spacing: .12em;
        }

        .contact-details {
            padding-left: clamp(1rem, 4vw, 3rem);
            border-left: 1px solid var(--line);
        }

        .contact-detail {
            padding: 1rem 0;
            border-bottom: 1px solid var(--line);
        }

        .contact-detail p { margin: .25rem 0 0; }

        @media (max-width: 767.98px) {
            .site-nav .container { justify-content: center; }
            .site-nav .navbar-collapse { flex-basis: 100%; justify-content: center; }
            .contact-grid { grid-template-columns: 1fr; }
            .contact-details { padding: 1.5rem 0 0; border-top: 1px solid var(--line); border-left: 0; }
            .site-footer .container { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg site-nav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">ROB COMICS</a>
            <div class="navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('photos') ? 'active' : '' }}" href="{{ route('photos') }}">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="site-footer py-3 mt-auto">
        <div class="container">
            <p>Prepared by: Roberto Daniel Ramos Flores <span class="d-block d-sm-inline">| Activity 11</span></p>
            <nav class="footer-nav" aria-label="Footer navigation">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('photos') }}">Photos</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>
        </div>
    </footer>
</body>
</html>
