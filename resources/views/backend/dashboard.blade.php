@extends('backend.template')
@section('title', 'Dashboard')
@section('content')
    <h2>Dashboard</h2>
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <ul>
        <li>Nama : {{ session('name') }}</li>
        <li>Id : {{ session('id_user') }}</li>
        <li>level : {{ session('level') }}</li>
    </ul>
@endsection
