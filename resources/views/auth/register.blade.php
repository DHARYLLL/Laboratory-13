@extends('layout')
@section('title')

@section('content')

    <div>
        <form action="/register" method="POST">
            @csrf

            <h1>Register</h1>
            <input type="text" name="name" id="name" placeholder="Name" required><br><br>
            <input type="email" name="email" id="email" placeholder="Email" required><br><br>
            <input name="password" type="password" placeholder="Password" required><br><br>
            <input name="password_confirmation" type="password" placeholder="Confirm Password" required><br><br>
            <button type="submit">Register</button>
        </form>
    </div>


@endsection
