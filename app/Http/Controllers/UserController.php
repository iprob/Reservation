<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveReservation;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function create()
    {
        return view('user.create', [
            'reservation' => new Reservation
        ]);
    }


    public function store(SaveReservation $request)
    {
        $reservation = Reservation::create($request->only('name','time', 'date','note','phone'));
        $reservation->save();
        return redirect()->route('home');
    }

    
    public function show($id)
    {
        //
    }

    public function edit(Reservation $reservation)
    {
        return view('user.create', compact('reservation'));
    }

    
    public function update(SaveReservation $request, Reservation $reservation)
    {
        $reservation->update($request->only('name','time', 'date','note','phone'));
        $reservation->save();
        return redirect()->route('home')->with('notice', trans(':name was successfully updated.', ['name' => $reservation->name]));
    }

    
    public function destroy($id)
    {
        //
    }
}
