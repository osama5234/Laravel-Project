@extends('layout')
@section('title', 'Product Table')
@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->description }}</td>
                        <td><img src="{{ $product->image }}" class="img-fluid image" alt=""></td>
                        <td><a href="{{ route('product.edit',$product->id)}}"class="btn btn-primary">Edit</a></td>

                        <td>
                            <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container text-center">
        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
    </div>
@endsection
