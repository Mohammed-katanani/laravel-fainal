@extends('layout')
@section('title', 'Products')
@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:py-0">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start">
            <h1 class="text-3xl text-center font-semibold">PRODUCTS PAGE</h1>
        </div>
        @if (count($Products) > 0)
        <ul>
            @foreach ($Products as $product)
                <a href="{{ route('products.show', ['product' => $product->id]) }}">
                    <li class="mt-4 p-4 bg-white list-none">{{ $product->id }}, {{ $product->name }}, {{ $product->origin }}</li>
                </a>
            @endforeach
        </ul>
        @else
        <p>no data</p>
        @endif

    </div>
</div>
@endsection
