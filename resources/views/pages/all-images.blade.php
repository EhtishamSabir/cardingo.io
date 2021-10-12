@extends('layouts.default')
@section('title', '| All Images')
@section('content')

    @if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com')
    <!-- <script>window.location="{{url('/dashboard')}}"</script> -->
    @else
    <script>alert("You don't have permision to access this page!")</script>
    <script>window.location="{{url('/')}}"</script>
    @endif

    @if($message=Session::get('success'))
    <div class="mt-32 flex bg-success p-6" role="alert">
        <div class="container px-4 mx-auto items-center">
            <div class="flex flex-row alert alert-success alert-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <!--<button type="button" class="close text-2xl mr-6" data-dismiss="alert">x</button>-->
                <span class="text-2xl">{{$message}}</span>
            </div>
        </div>
    </div>
    @endif

    <div>
        <div class="container px-4 mx-auto">
            <div class="pt-24 flex flex-col justify-center items-center">
            
                <div class="w-full bg-gradient-to-br from-quinary to-senary rounded-3xl p-6 md:p-12 my-14">
                    <div class="flex flex-wrap flex-col md:flex-row mb-12">
                        <h1 class="mb-8 text-5xl font-goldplayBold flex-1">
                            All Images
                        </h1>
                        <div>
                            <a href="/dashboard" class="button-grad hover:bg-pos-100 block flex flex-row px-9 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add Image
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-wrap flex-col md:flex-row pb-6 mb-6 border-b-2 border-solid border-secondary">
                        <div class="w-full md:w-2/3 text-2xl font-goldplaySemibold">
                            Image Details
                        </div>
                        <div class="w-full md:w-1/3 md:pl-6 text-2xl font-goldplaySemibold">
                            Json
                        </div>
                    </div>
                    <div class="items">
                    @foreach ($data as $wall)
                    <div class="flex flex-wrap flex-col md:flex-row mb-6 item">
                        <div class="w-full md:w-2/3 rounded-3xl bg-senary p-6">
                            <div class="flex flex-wrap flex-col md:flex-row">
                                <div class="w-full md:w-1/3">
                                    <img class="w-full rounded-3xl" src="{{ URL::to('/') }}/Uploads/{{$wall->url}}">
                                </div>
                                <div class="w-full md:w-2/3 md:pl-6">
                                    <span class="block text-3xl mt-6 md:mt-0 font-goldplaySemibold mb-6">{{$wall->image_name}}</span>
                                    <span class="block text-tertiary font-goldplaySemibold mb-3">Attributes</span>
                                    <div class="mb-6">
                                        @if($wall->label_1!='')
                                        {{$wall->label_1}} : {{$wall->attr_1}}
                                        @endif
                                        @if($wall->label_2!='')
                                        | {{$wall->label_2}} : {{$wall->attr_2}} |
                                        @endif
                                        @if($wall->label_3!='')
                                        {{$wall->label_3}} : {{$wall->attr_3}} |
                                        @endif
                                        @if($wall->label_4!='')
                                        {{$wall->label_4}} : {{$wall->attr_4}} |
                                        @endif
                                        @if($wall->label_5!='')
                                        {{$wall->label_5}} : {{$wall->attr_5}}
                                        @endif
                                    </div>
                                    <div class="flex flex-row mb-6">
                                        <div class="w-1/2">
                                            <span class="text-tertiary font-goldplaySemibold mr-3">Price:</span>
                                            <span class="font-goldplayBold">${{$wall->price}}</span>
                                        </div>
                                        <div class="w-1/2">
                                            <span class="text-tertiary font-goldplaySemibold mr-3">Status:</span>
                                            <span class="font-goldplayBold opac">{{$wall->status}}</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center">
                                        <span class="block text-tertiary font-goldplaySemibold mr-3">Action:</span>

                                        <a href="@if($wall->status=='minted') javascript:void(0) @else /delete/{{$wall->id}} @endif" class="button-red hover:bg-pos-100 block flex flex-row items-center px-4 py-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            @if($wall->status=='minted') Cannot Delete @else Delete @endif
                                             
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 md:pl-3 text-2xl json">
                            <div class="p-6 bg-senary mt-6 md:mt-0 rounded-3xl">
                                <!--<div class="flex flex-1 rounded-3xl bg-senary p-6">{{$wall->json_data}}</div>-->
                                <textarea class="bg-senary focus:outline-none" rows="6" readonly> {{$wall->json_data}}</textarea>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div>
                        <p class="lead">Displaying <span class="shownLength font-goldplayBold"></span> of <span class="listLength font-goldplayBold"></span> results.</p>
                        <div class="flex justify-center mt-12 buttonToogle">
                            <button class="button-secondary-outline flex items-center showMore">
                                <svg xmlns="http://www.w3.org/2000/svg " class="h-4 w-4 mr-3 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                                    <path stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " d="M19 13l-7 7-7-7m14-8l-7 7-7-7 " />
                                </svg>
                                Load more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop