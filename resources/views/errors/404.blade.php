@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h1>404 - Az oldal nem található</h1>
    <p>Sajnáljuk, de a keresett oldal nem létezik.</p>
    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Vissza a főoldalra</a>
</div>
@endsection
