@extends('layouts.master')

@section('head')
<title>Dashboard Page</title>
<link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('content')
    <div class="sidebar">
        <strong>E-BOOK</strong>

        <ul style="list-style: none;">
           <a href="/dashboard"><li>> Dashboard</li></a>
           <a href=""><li> Users</li></a>
           <a href=""><li> Book</li></a>
           <a href=""><li> Category Book</li></a>
        </ul>
    </div>

    <div class="content">
        <h1>Dashboard</h1>
        <h4>Admin</h4>
    </div>
@endsection