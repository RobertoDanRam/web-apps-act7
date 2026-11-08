@extends('layouts.app')

@section('title', 'Legends')

@section('content')
    <header class="mb-4">
        <p class="page-kicker mb-2">Stories from Rob Comics</p>
        <h1 class="display-5 fw-bold mb-2">Legends</h1>
        <p class="page-intro mb-0">Three chapters. One multiverse. Countless stories.</p>
    </header>

    <div class="row g-4">
        <div class="col-lg-4">
            <article class="card comic-card">
                <img class="comic-art" src="{{ asset('images/chapter-1.jpg') }}" alt="Three illustrated characters representing the first legends">
                <div class="card-body">
                    <p class="chapter-label mb-2">CHAPTER 1</p>
                    <h2 class="card-title">LEGENDS</h2>
                    <p class="card-text">WITNESS THE OLDEST, MOST MYSTERIOUS, AND STRANGEST STORIES TOLD AMONG THE INHABITANTS OF THE ROBSITE MULTIVERSE.</p>
                    <span class="watch-button">WATCH</span>
                </div>
            </article>
        </div>

        <div class="col-lg-4">
            <article class="card comic-card">
                <img class="comic-art" src="{{ asset('images/chapter-2.jpg') }}" alt="The heroes of the Robsite multiverse assembled">
                <div class="card-body">
                    <p class="chapter-label mb-2">CHAPTER 2</p>
                    <h2 class="card-title">MULTIVERSE: FIRE DESTINY</h2>
                    <p class="card-text">PREPARE FOR THE DIZZYING CONTINUATION OF THE LEGENDS. IN THIS CHAPTER, EVERYTHING GETS COMPLICATED AND SURPRISES LURK AROUND EVERY PANEL. WHAT YOU THOUGHT YOU KNEW WILL TAKE AN UNEXPECTED TURN.</p>
                    <span class="watch-button">WATCH</span>
                </div>
            </article>
        </div>

        <div class="col-lg-4">
            <article class="card comic-card">
                <img class="comic-art" src="{{ asset('images/chapter-3.jpg') }}" alt="A lone figure looks out over a pencil-sketched city">
                <div class="card-body">
                    <p class="chapter-label mb-2">CHAPTER 3</p>
                    <h2 class="card-title">SALVATION</h2>
                    <p class="card-text">THE HEROES ARE SEPARATED, THE MULTIVERSE IS UNPROTECTED, AND MULTIPLE VERSIONS OF THE LEGENDARY RED EMERGE. A NEW THREAT STALKS THEM, AND ONLY TOGETHER WILL THEY BE ABLE TO FACE IT. DO YOU DARE JOIN THIS EPIC BATTLE?</p>
                    <span class="watch-button">WATCH</span>
                </div>
            </article>
        </div>
    </div>
@endsection
