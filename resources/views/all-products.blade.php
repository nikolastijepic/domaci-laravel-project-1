@extends('layout-admin')

@section('pageTitle')
    Products - Admin
@endsection

@section('pageContent')

    <div class="container mt-4">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr @if(session('new_product_id') === $product->id) class="table-success" @endif>
                    <td class="fw-bold fs-5"> {{ $product->name }}</td>
                    <td class="text-break">{{ $product->description }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->price }} &euro;</td>
                    <td>{{ $product->image }}</td>
                    <td class="d-flex align-items-center gap-2">
                        <a class="btn btn-primary" href="{{ route('admin.product.edit', ['product' => $product->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('admin.product.delete', ['product' => $product->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
