@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-primary" href="{{ route('password') }}">Update User</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
@endauth
@guest
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;" >
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Address</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="login">
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        </form>
      </div>
    </div>
  </nav>
@endguest
@endsection
