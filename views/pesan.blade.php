@extends('base.base')

@section('content')

<h1></h1>

<form action="{{route('ticket.insert', $movie)}}" method="POST" class="max-w-sm my-10 mx-auto">
    @csrf
  <div class="mb-5">
  <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
    <div class="mt-2">
        <input type="text" name="name" id="name"  value="{{ old('name') }}" class="@error('name') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
        @error('name')
            <div class="border border-red-500 text-red-500 text-xs italic ">{{ $message }}</div>
        @enderror
    </div>
  </div>
  <div class="mb-5">
  <label for="seat_number" class="block text-sm font-medium leading-6 text-gray-900">Seat</label>
    <div class="mt-2">
        <input type="text" name="seat_number" id="seat_number" value="{{ old('seat_number') }}" class="@error('seat_nunber') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
        @error('seat_number')
            <div class="border border-red-500 text-red-500 text-xs italic ">{{ $message }}</div>
        @enderror
    </div>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection


