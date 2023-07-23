@extends('layout')
@section('title', 'Products show')
@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:py-0">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md p-4">
            <h1 class="text-3xl font-semibold mb-4 text-center">Product Details</h1>
            <div class="flex flex-wrap justify-evenly">
                <div class="w-full md:w-1/2">
                    <p class="text-gray-600">ID:</p>
                    <p>{{ $Product['id'] }}</p>
                </div>
                <div class="w-full md:w-1/2">
                    <p class="text-gray-600">Name:</p>
                    <p>{{ $Product['name'] }}</p>
                </div>
                <div class="w-full md:w-1/2">
                    <p class="text-gray-600">Origin:</p>
                    <p>{{ $Product['origin'] }}</p>
                </div>
                <div class="w-full md:w-1/2">
                    <p class="text-gray-600">Price:</p>
                    <p>{{ $Product['price'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
