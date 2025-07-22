@extends('layouts.app') {{-- Or change to your actual layout --}}

@section('content')
    <div class="container">
        <h2 class="mb-4">Edit Product</h2>

        {{-- Display Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Edit Product Form --}}
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- For PUT method spoofing --}}

            <div class="mb-3">
                <label for="name" class="form-label">Product Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price (₹) <span class="text-danger">*</span></label>
                <input type="number" name="price" id="price" class="form-control" step="0.01"
                    value="{{ old('price', $product->price) }}" required>
            </div>

               <div class="mb-3">
                <label for="name" class="form-label">Description <span class="text-danger">*</span></label>
                <input type="text" name="description" id="des"class="form-control" value="{{ old('description', $product->description) }}"
                    >
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>
@endsection
