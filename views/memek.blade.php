@extends('base.base')

@section('content')

@if(session('success'))
    <div id="success-alert" class="fixed mx-auto mt-4 w-1/3 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-md" role="alert">
        <div class="flex justify-between items-center">
            <span>{{ session('success') }}</span>
            <button onclick="document.getElementById('success-alert').style.display='none'" class="text-green-700 hover:text-green-900 font-bold ml-4">
                &times;
            </button>
        </div>
    </div>
@endif



<div class="mx-auto my-4  container grid gap-4 grid-cols-3">
    @foreach ($movies as $movie)
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-4">
            <p class="text-2xl font-semibold text-gray-800">{{ $movie['movie_title'] }}</p>
            <p class="text-sm text-gray-600">{{ $movie['duration'] }}</p>
            <p class="text-sm text-gray-600">{{ $movie['release_date'] }}</p>
        </div>
        <a href="{{route('ticket.show', $movie)}}" class="rounded-md align bg-indigo-600 mx-auto my-4 px-3 py-3 text-sm font-semibold hover:bg-indigo-700 text-white">Check Ticket</a>
        <a href="{{route('ticket.create', $movie)}}" class="rounded-md align bg-indigo-600 mx-auto my-4 px-3 py-3 text-sm font-semibold hover:bg-indigo-700 text-white">Add</a>
    </div>
    
    @endforeach
    
</div>



@endsection