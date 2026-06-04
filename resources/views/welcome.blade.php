@extends('layout')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
<p class="flex justify-center my-5">Trenutno vreme je {{date('H:i:s')}}</p>
@endsection

