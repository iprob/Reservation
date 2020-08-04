<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveReservation;
use App\Meal;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function create()
    {
        $meals = Meal::all();
        return view('user.create', [
            'reservation' => new Reservation,
            'meals' => $meals
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
        $meals = Meal::all();
        return view('user.create', compact('reservation','meals'));
    }

    
    public function update(SaveReservation $request, Reservation $reservation)
    {
        $reservation->update($request->only('name','time', 'date','note','phone','meal'));
        //dd($reservation);
        $reservation->save();
        //$reservation->meals()->sync(request()->meals);
        return redirect()->route('home')->with('notice', trans(':name was successfully updated.', ['name' => $reservation->name]));
    }

    
    public function destroy(Reservation $reservation)
    {
        dd('delete');
        $reservation->delete();
        return redirect()->route('home');
    }
}
