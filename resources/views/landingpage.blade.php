@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body text-center p-5">
                    <h1 class="display-4 fw-bold mb-3">Welcome to our App</h1>
                    <p class="lead text-muted mb-4">This is the public Landing Page available for guest users.</p>
                    <div>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection