@extends('layout')

@section('pageTitle')
    Home
@endsection

@section('pageContent')

    <div class="container mt-4">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->price }} €</td>
                    <td>{{ $product->image }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

