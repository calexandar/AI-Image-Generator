@extends('layouts.app')

@section('content')
    <div class="w-1/4 mx-auto">
        <h1>Here is your image</h1>

        <img src="{{ $url }}" alt="{{ $description }}">
        <p>{{ $description }}</p>
        <div class="my-4">
            <a href="{{ route('home') }}" class="inline-flex justify-center rounded-md bg-emerald-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 
            focus-visible:outline-offset-2 focus-visible:outline-emerald-500"> Back To Form</a>
            <button 
                onclick="window.location.reload()"
                class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 
                focus-visible:outline-offset-2 focus-visible:outline-indigo-500 btn-loader" >
                Generate Again
            </button>
        </div>
    </div>
    
@endsection