@extends('layouts.user_type.auth')

@section('title', 'Profile')

@section('content')
    
    <h1>This is Profile Create</h1>

    {{-- <form action="{{ route('admin.user.store') }}" method="POST"> --}}
    <form class="my-4" action="" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="vlkvlsk">
            <label for="floatingInput">svsd</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <input class="btn btn-primary active mb-0 text-white " type="submit" value="Submit" placeholder="Send">

    </form>
@endsection