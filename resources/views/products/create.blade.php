@extends('layouts.app') {{-- Or use your layout file if different --}}

@section('content')
    <div class="container">
        <h2 class="mb-4">Add New Product</h2>

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

        {{-- Create Product Form --}}
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Product Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price (₹) <span class="text-danger">*</span></label>
                <input type="number" name="price" id="price" class="form-control" step="0.01"
                    value="{{ old('price') }}" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Description <span class="text-danger">*</span></label>
                <input type="text" name="des" id="des"class="form-control" value="{{ old('description') }}"
                    required>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-success">Save Product</button>
            </div>
        </form>
    </div>
@endsection
