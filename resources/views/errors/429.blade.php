@extends('layouts.mainApp')
@push('title')
Too Many Requests
@endpush
@section('section')
<main>
    <div class="container">
        <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <h1>404</h1>
            <h2>Too Many Requests.</h2>
            <a class="btn" href="{{ route('home') }}">Back to home</a>
        </section>
    </div>
</main>
@endsection