@extends('layouts.user_type.auth')

@section('content')
    
    <h1>This is Profile Edit</h1>

    {{-- <form action="{{ route('admin.user.store') }}" method="POST"> --}}
        <form action="{{ route('/profile/store',  $user->id) }}" method="POST">
            @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name" value="{{ old('email', $user->name) }}" >
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ old('email', $user->email) }}" disabled="disabled">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" name="password_confirmation" placeholder="Password">
            <label for="floatingPassword">Password Confirmation</label>
        </div>

        <input class="btn btn-primary active mb-0 text-white " type="submit" value="Submit" placeholder="Update">

    </form>
@endsection