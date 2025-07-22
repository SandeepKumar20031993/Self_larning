@extends('layouts.app')

@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-info">Add New</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price (₹)</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $index => $product)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>₹{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <span class="badge bg-success">Active</span> {{-- Optional: make dynamic if needed --}}
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('products.delete', $product->id) }}" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash">delete</i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Optional: If this Submit is part of a bulk action --}}
        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection
