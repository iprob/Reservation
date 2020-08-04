@extends('layouts.app')

@section('content')
     
    @foreach ($user->roles as $role)
            
        @if ($role->name == "Supervisor")

            @include('supervisor.index')

        @endif

        @if ($role->name == "Admin")

            @include('admin.index')
            
        @endif

        @if ($role->name == "user")

            @include('user.index')

        @endif


    @endforeach

@endsection
