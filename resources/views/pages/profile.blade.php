@extends('layouts.default')

@section('title', '| My NFTs')

@section('content')



    @if($message = Session::get('success'))

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

                    <h1 class="mb-12 text-5xl font-goldplayBold">

                        My NFTs

                    </h1>

                    @if(!$data->isEmpty())

                        <div class="flex flex-wrap -mx-4 overflow-hidden">

                            @foreach ($data as $wall)

                            <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/3">

                                <div class="bg-senary rounded-2xl">

                                    <img class="w-full rounded-t-2xl" src="{{ URL::to('/') }}/Uploads/{{$wall->url}}">

                                    <div class="p-4">

                                        <span class="block text-xs text-tertiary font-goldplayBold mb-1">Name</span>

                                        <span class="block text-lg mb-6">{{$wall->image_name}}</span>

                                        <span class="block text-xs text-tertiary font-goldplayBold mb-1">Price</span>

                                        <span class="block text-lg mb-6">{{$wall->amount}}</span>

                                        <span class="block text-xs text-tertiary font-goldplayBold mb-1">Status</span>

                                        <span class="block text-sm break-words mb-6">{{$wall->minted}}</span>

                                        <span class="block text-xs text-tertiary font-goldplayBold mb-1">TX ID</span>

                                        <span class="block text-sm break-words mb-6">{{$wall->tx_id}}</span>

                                    </div>

                                </div>

                            </div>

                            @endforeach

                        </div>

                    @else

                        <span>You don't have NFTs yet :( Go buy some!</span>

                    @endif

                </div>

            </div>

        </div>

    </div>



@stop

