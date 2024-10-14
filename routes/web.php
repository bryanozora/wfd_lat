<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Models\movies;
use App\Http\Controllers\TicketController;

Route::get('/movies', function () {
    return view('memek', ['movies' => movies::all()]);
});

Route::get('/movies/tickets/{movie:id}', [TicketController::class, 'show'])->name('ticket.show');

Route::get('/movies/book/{movie:id}', [TicketController::class, 'create'])->name('ticket.create');

Route::post('/ticket/submit/{movie:id}',  [TicketController::class, 'insert'])->name('ticket.insert');

Route::put('/ticket/checkin/{ticket:id}', [TicketController::class, 'checkIn'])->name('ticket.checkin');

Route::delete('/ticket/delete/{ticket:id}', [TicketController::class, 'delete'])->name('ticket.delete');

