@extends('layouts.default')
@section('title', '| Login')
@section('content')

    @if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com')
    <script>window.location="{{url('/dashboard')}}"</script>
    @endif

    <div class="py-16 md:py-0">
        <div class="container px-4 mx-auto">
            <div class="pt-24 h-screen flex flex-col justify-center items-center">
            
                <div class="w-full md:w-500px bg-gradient-to-br from-quinary to-senary rounded-3xl p-10">
                    <h1 class="mb-12 text-5xl font-goldplayBold text-center">
                        Welcome Back!
                    </h1>
                    @if($message = Session::get('error'))
                    <div class="text-quaternary flex flex-row items-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $message }}
                    </div>
                    @endif

                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
                    @endif

                    @if(count($errors) > 0)
                    <div class="text-quaternary mb-8">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li class="flex flex-row items-center my-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" action="login">
                        {{csrf_field()}}
                        <div class="mb-12">
                            <label class="block uppercase opacity-80">Email address</label>
                            <input type="email" name="email" class="w-full py-4 py-1 text-white text-3xl focus:outline-none bg-transparent border-solid border-secondary border-b-2" value="{{ old('email') }}" autocomplete="email" autofocus>
                        </div>
                        <div class="mb-10">
                            <label class="block uppercase opacity-80">Password</label>
                            <input type="password" name="password" class="w-full py-4 py-1 text-white text-3xl focus:outline-none bg-transparent border-solid border-secondary border-b-2" value="{{ old('email') }}">
                        </div>
                        <button type="submit" class="button-grad text-xl my-5 w-full hover:bg-pos-100">
                            Sign in
                        </button>
                        <div class="text-center">
                            <span class="opacity-80">Dont have an account? <a href="/signup" class="font-goldplayBold">Signup</a></span>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>

@stop
