@extends('layouts.master')

@section('head')
<title>Landing Page</title>
<link rel="stylesheet" href="/css/landing.css">
@endsection

@section('content')
<div class="nav">
    <h2>E-BOOK</h2>
    <div class="link">
        <a id="landing" href="#">Home</a>
        @if (Auth::check())
        <a href="/logout">Logout</a>
        @else
        <a href="/login">Login</a>
        @endif
    </div>
</div>

<div class="container">
    <div class="header">
        <h1>Better Solution For Your <br>
            Choice Book</h1>
        <p>We can access cook for online and free!</p>

        @if (Auth::check())
        <a href="/">
            <button>Sudah Login</button>
        </a>
        @else
        <a href="/register">
            <button>Register</button>
        </a>
        @endif
    </div>
</div>
@endsection
