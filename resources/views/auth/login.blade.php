@extends('layout')
@section('title')

@section('content')

    <div>
        <h1>LOGIN</h1>
        <form method="POST" action="/login">
            @csrf
            <input name="email" type="email" placeholder="Email" required><br><br>
            <input name="password" type="password" placeholder="Password" required><br><br>
            <button type="submit">Login</button>
        </form>
    </div>


@endsection
