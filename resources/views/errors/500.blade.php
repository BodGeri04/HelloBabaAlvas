@extends('website.main')

@section('content')

<section class="sidebar-page-container">
    <div class="text-center mt-5">
        <h1>500 - Az oldal nem található</h1>
        <p>Sajnáljuk, de a keresett oldal nem létezik.</p>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3">Vissza a főoldalra</a>
    </div>
</section>
@endsection