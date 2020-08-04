<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Status;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    
    // public function index()
    // {
    //     //
    // }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Reservation $supervisor)
    {
        $statuses = Status::all();
        return view('supervisor.edit', compact('supervisor','statuses'));
    }

    
    public function update(Request $request, Reservation $supervisor)
    {
        $supervisor->status()->associate($request->status_id);
        $supervisor->note = $request->note;
        $supervisor->save();
        return redirect()->route('home');
    }

    
    public function destroy($id)
    {
        //
    }
}
