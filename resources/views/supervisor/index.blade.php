@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">

        <h1>Reservation List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Reservation Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Status</th>
                    <th scope="col">Remark</th>
                    {{-- <th scope="col">Meal</th> --}}
                    <th scope="col">Action</th>

                </tr>
            </thead>

            @foreach ($reservations as $reservation)
            <tbody>
                <tr>
                    <td>{{$reservation->name}}</td>
                    <td>{{$reservation->user->name}}</td>
                    <td>{{$reservation->time}}</td>
                    <td>{{$reservation->date}}</td>
                    <td>{{$reservation->phone}}</td>
                    <td>{{$reservation->status->name}}</td>
                    <td>{{$reservation->note}}</td>
                    {{-- <td>{{implode(', ', $reservation->meals()->get()->pluck('name')->toArray())}}</td> --}}
                    <td>
                        <a class="btn btn-sm btn-primary" href="supervisor/{{$reservation->id}}/edit">Edit</a> 
                    </td>
                </tr>
            </tbody>

            @endforeach
            
        </table>
        

    </div>
</div>


@endsection