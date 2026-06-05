@extends('layout')

@section('pageTitle')
    Shop
@endsection

@section('pageContent')

    @foreach($products as $product)
        <p class="d-flex justify-content-center mt-3">
            {{ $product }}
            @if(in_array($product, $productsOnSale))
                - {{$saleMessage}}
            @endif
        </p>
    @endforeach

@endsection
