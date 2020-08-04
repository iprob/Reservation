@extends('layouts.app')

@section('content')

<form method="POST" action="{{ $reservation->exists ? route('reservation.update', $reservation) : route('reservation.store') }}" class="mb-4">

    @csrf

    @if($reservation->exists)

    @method('PUT')

    @endif

    <div class="form-group row d-flex justify-content-center">

        <label for="name" class="col-form-label ">Name</label>

        <div class="col-md-6 ">

            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $reservation->name) }}">

            @error('name')

            <span class="invalid-feedback" week="alert">

                <strong>{{ $message }}</strong>

            </span>

            @enderror

        </div>

    </div>

    <div class="form-group row d-flex justify-content-center">

        <label for="time" class="col-form-label ">Time</label>

        <div class="col-md-6 ">

            <input name="time" type="time" class="form-control @error('time') is-invalid @enderror" id="time" value="{{ old('time', $reservation->time) }}">

            @error('time')

            <span class="invalid-feedback" week="alert">

                <strong>{{ $message }}</strong>

            </span>

            @enderror

        </div>

    </div>

    <div class="form-group row d-flex justify-content-center">

        <label for="date" class="col-form-label ">Date</label>

        <div class="col-md-6 ">

            <input name="date" type="date" class="form-control @error('date') is-invalid @enderror" id="date" value="{{ old('date', $reservation->date) }}">

            @error('date')

            <span class="invalid-feedback" week="alert">

                <strong>{{ $message }}</strong>

            </span>

            @enderror

        </div>

    </div>

    <div class="form-group row d-flex justify-content-center">

        <label for="phone" class="col-form-label ">Phone</label>

        <div class="col-md-6 ">

            <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone', $reservation->phone) }}">

            @error('phone')

            <span class="invalid-feedback" week="alert">

                <strong>{{ $message }}</strong>

            </span>

            @enderror

        </div>

    </div>

    <div class="form-group row d-flex justify-content-center">

        <label for="note" class="col-form-label ">Note</label>

        <div class="col-md-6 ">

            <input name="note" type="text" class="form-control @error('note') is-invalid @enderror" id="note" value="{{ old('note', $reservation->note) }}">

            @error('note')

            <span class="invalid-feedback" week="alert">

                <strong>{{ $message }}</strong>

            </span>

            @enderror

        </div>

    </div>

    <div class="col-8 d-md-flex justify-content-center">

        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            back
        </a>

        <input type="submit" value="Save" class="btn btn-outline-primary ml-md-auto">

    </div>

</form>

@endsection