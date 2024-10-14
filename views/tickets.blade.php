@extends('base.base')

@section('content')
<div>
    <div class="mx-8 my-8">
        <h1>{{$movie_title}}</h1>
        <a href="/movies" class="rounded-md align bg-indigo-600 mx-auto my-8 px-3 py-3 text-sm font-semibold hover:bg-indigo-700 text-white">Back</a>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Nama</td>
                    <td>Seat Number</td>
                    <td>Status</td>
                    <td>Checked In Time</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp 
                @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $ticket->customer_name }}</td>
                    <td>{{ $ticket->seat_number }}</td>
                    <td>{{ $ticket->is_checked_in }}</td>
                    <td>{{ $ticket->check_in_time }}</td>
                    <td class="flex">
                        @if ($ticket->is_checked_in == 0)
                        <form action={{route('ticket.checkin', $ticket)}} method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="inline rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">check in</button>
                        </form>
                        @endif
                        
                        @if ($ticket->is_checked_in == 0)
                        <form action={{route('ticket.delete', $ticket)}} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">delete</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection