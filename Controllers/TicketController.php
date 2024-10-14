<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tickets;
use App\Models\movies;
use Illuminate\Support\Carbon;

class TicketController extends Controller
{
    public function show(movies $movie) {
        $tickets = tickets::all()->where('movie_id', $movie->id);
        return view('/tickets', ['tickets' => $tickets, 'movie_title' => $movie->movie_title]);
    }

    public function create(movies $movie) {

        return view('/pesan', ['movie' => $movie]);
    }

    public function insert(Request $request, movies $movie) {
        $request->validate([
            'name' => 'required | max:100',
            'seat_number' => 'required | max:5'
        ], [
            'name.required' => 'nama customer harus diisi',
            'name.max' => 'nama customer maksimal 100 karakter',
            'seat_number.required' => 'nomor kursi harus diisi',
            'seat_number.max' => 'nomor kursi maksimal 5 karakter'
        ]);

        $ticket = new tickets;
        $ticket->movie_id = $movie->id;
        $ticket->customer_name = $request->name;
        $ticket->seat_number = $request->seat_number;
        $ticket->save();

        return redirect('/movies')->with('success', 'data berhasil disimpan');
    }

    public function checkIn(tickets $ticket){
        $ticket->is_checked_in = 1;
        $ticket->check_in_time = Carbon::now();
        $ticket->save();

        return redirect('/movies')->with('success', 'data berhasil diupdate');
    }

    public function delete(tickets $ticket){
        $ticket->delete();

        return redirect('/movies')->with('success', 'data berhasil dihapus');
    }
}
