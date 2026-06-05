@extends('layout')

@section('pageTitle')
    Home
@endsection

@section('pageContent')

    @if($hour >= 0 && $hour <= 12)
        <p class="d-flex justify-content-center mt-3">Dobro jutro!</p>
    @else
        <p class="d-flex justify-content-center mt-3">Dobar dan</p>
    @endif

<p class="d-flex justify-content-center mt-3">Trenutno vreme je {{ $currentTime }}</p>
<p class="d-flex justify-content-center mt-3">Trenutno sati: {{ $hour }}</p>
@endsection

