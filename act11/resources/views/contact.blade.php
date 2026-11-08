@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="contact-hero mb-4">
        <p class="page-kicker mb-2">Get in touch</p>
        <h1>Let&rsquo;s start a conversation.</h1>
        <p class="page-intro mb-0">Questions, ideas, suggestions, and commissions are always welcome.</p>
    </section>

    <div class="contact-grid">
        <section>
            <h2 class="h3 mb-2">Send a message</h2>
            <p class="contact-copy">Fill in the details below and we&rsquo;ll get back to you soon.</p>
            <form class="contact-form">
                <label for="contact-name">Your name</label>
                <input class="form-control" id="contact-name" name="name" type="text" placeholder="Your name">

                <label for="contact-email">Email address</label>
                <input class="form-control" id="contact-email" name="email" type="email" placeholder="you@example.com">

                <label for="contact-message">Message</label>
                <textarea class="form-control" id="contact-message" name="message" placeholder="What would you like to talk about?"></textarea>

                <a class="send-button d-inline-block text-decoration-none" href="mailto:hello@robcomics.com">SEND MESSAGE&nbsp; &rarr;</a>
            </form>
        </section>

        <aside class="contact-details">
            <p class="page-kicker mb-2">Elsewhere</p>
            <h2 class="h3 mb-3">Prefer another way?</h2>

            <div class="contact-detail">
                <span class="contact-copy">Email</span>
                <p><a class="link-light text-decoration-none" href="mailto:hello@robcomics.com">hello@robcomics.com</a></p>
            </div>
            <div class="contact-detail">
                <span class="contact-copy">Phone</span>
                <p><a class="link-light text-decoration-none" href="tel:+525551234567">+52 555 123 4567</a></p>
            </div>
            <div class="contact-detail">
                <span class="contact-copy">Location</span>
                <p>Comic Avenue 123, Geek City, CP 54321</p>
            </div>
            <div class="contact-detail">
                <span class="contact-copy">Response time</span>
                <p>Usually within two business days</p>
            </div>
        </aside>
    </div>
@endsection
