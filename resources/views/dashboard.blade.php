@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">User Dashboard</h4>
                </div>
                <div class="card-body p-4">
                    <h2 class="h4">Hello, {{ Auth::user()->name }}!</h2>
                    <p class="text-success fw-bold">You are successfully logged in!</p>
                    <p>This is your private dashboard view, accessible only to authenticated users.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
