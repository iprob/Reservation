
<div class="container">
    <div class="row">

        <a class=" btn btn-sm btn-success ml-auto mb-4" href="{{route('reservation.create')}}">Create a new Reservation</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Reservation Name</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Remark</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            @foreach ($user->reservations as $reservation)
            <tbody>
                <tr>
                    <td>{{$reservation->name}}</td>
                    <td>{{$reservation->time}}</td>
                    <td>{{$reservation->date}}</td>
                    <td>{{$reservation->status->name}}</td>
                    <td>{{$reservation->note}}</td>
                    <td><a class="btn btn-sm btn-primary" href="reservation/{{$reservation->id}}/edit">Edit</a></td>
                </tr>
            </tbody>

            @endforeach

        </table>

    </div>
</div>
