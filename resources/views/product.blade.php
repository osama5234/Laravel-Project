@extends('layout')
@section('title', 'Product Form')
@section('content')
    <div class="bg-image" style=" background-image: url({{ asset('images/bg.jpeg') }});">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ $product ? route('product.update',$product->id) : route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($product)
                @method('PATCH')

                @endif
                <div class="mb-3">
                    <label for="name" class="form-label text-white">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                        value="{{ $product ? $product->name : old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label text-white">Category</label>
                    <input type="number" name="category_id" class="form-control" id="category_id"
                        value="{{ $product ? $product->category_id : old('category_id') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-white">Description</label>
                    <textarea class="form-control" name="description" id="description"
                        value="{{ $product ? $product->description : old('description') }}">{{ $product ? $product->description : old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label text-white">Image</label>
                    <input type="file" name="image" class="form-control dropify" id="image"
                        data-default-file="{{ $product ? asset($product->image) : '' }}">
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>



            </form>
        </div>

    </div>

@endsection
