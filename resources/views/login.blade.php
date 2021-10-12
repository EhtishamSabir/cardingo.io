@extends('parent')



@section('main')

<nav class="navbar navbar-expand-lg navbar-light bg-light h-25 w-100">



  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">

        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>

      </li>

      @if(!isset(Auth::user()->email))

      <li class="nav-item">

        <a class="nav-link" href="/signin">Login</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="/signup">Signup</a>

      </li>

     @endif

      @if(isset(Auth::user()->email))

      <li class="nav-item">

        <a class="nav-link" href="/logout">Logout</a>

      </li>

     @endif

     

    </ul>

  </div>

</nav>


<div class="container mt-5">


  @if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com')

  <script>window.location="{{url('/dashboard')}}"</script>

  @endif

  @if($message = Session::get('error'))

  <div class="alert alert-danger alert-block">

    <button type="button" class="close" data-dismiss="alert">x</button>

    <strong>{{$message}}</strong>

  </div>

  @endif

  @if($message = Session::get('success'))

  <div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">x</button>

    <strong>{{$message}}</strong>

  </div>

  @endif



  @if(count($errors) > 0)

  <div class="alert alert-danger">

    <ul>

      @foreach($errors->all() as $error)

      <li>

        {{ $error }}

      </li>

      @endforeach

    </ul>

  </div>

  @endif

  

  <div class="sufee-login d-flex align-content-center flex-wrap">

    <div class="container">

      <div class="login-content">

        <div class="login-logo">

          <a href="/">

            <img class="align-content w-50" src="{{asset('assets/images/logo.png')}}" alt="">

          </a>

        </div>

        <div class="login-form">

          <form method="post" action="login">

            {{csrf_field()}}

            <div class="form-group">

              <label>Email address</label>

              <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>

            </div>

            <div class="form-group">

              <label>Password</label>

              <input type="password" name="password" class="form-control" placeholder="Password">

            </div>

            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>

          </form>

        </div>

      </div>

    </div>

  </div>

  @endsection