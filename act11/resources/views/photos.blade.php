@extends('layouts.app')

@section('title', 'Photos')

@section('content')
    <header class="mb-4">
        <p class="page-kicker mb-2">Behind the panels</p>
        <h1 class="display-5 fw-bold mb-2">Photos &amp; Drafts</h1>
        <p class="page-intro mb-0">A look at the finished cover and the art taking shape behind it.</p>
    </header>

    <div class="row g-4">
        <div class="col-lg-6">
            <section class="gallery-card">
                <h2 class="gallery-heading mb-0">Coming Soon: The Great Crossover</h2>
                <img class="gallery-art" src="{{ asset('images/cover-art.png') }}" alt="Colorful illustrated cover featuring the Robsite Multiverse heroes">
            </section>
        </div>
        <div class="col-lg-6">
            <section class="gallery-card">
                <h2 class="gallery-heading mb-0">Artist Early Drafts</h2>
                <img class="gallery-art" src="{{ asset('images/early-drafts.png') }}" alt="Pencil concept sketches of the main hero and costume variations">
            </section>
        </div>
    </div>
@endsection
