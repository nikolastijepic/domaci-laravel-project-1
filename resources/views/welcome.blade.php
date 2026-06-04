@extends('layout')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
<p class="d-flex justify-content-center mt-3">Trenutno vreme je {{date('H:i:s')}}</p>
@endsection

