@extends('layout')
@section('title', 'Products create')
@section('content')
    <div class="form-container">
        <div class="form-wrapper">
            <h1 class="form-heading text-center">Create a new Product</h1>
                <form action="{{ route('products.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-input">
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" id="price" class="form-input">
                </div>
                <div class="form-group">
                    <label for="origin" class="form-label">Origin:</label>
                    <input type="text" name="origin" id="origin" class="form-input">
                </div>

                <div class="form-submit">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
