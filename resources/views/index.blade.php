@extends('app')
@section('content')
<head>
    <title>{{$title}}</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="nav-link" href="{{ route('change.password') }}">Change Password</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('test.index') }}" tabindex="-1" aria-disabled="true">Self assesment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('test.history') }}" tabindex="-1" aria-disabled="true">History</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    <h1>welcome <b>{{Auth::user()->name}}</b></h1>
    <h2>ini bagian home</h2>
@Auth
@endauth
@guest
@endguest    
@endsection 