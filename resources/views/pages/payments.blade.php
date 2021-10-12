@extends('layouts.default')
@section('title', '| Payments')
@section('content')

@if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com')

<!-- <script>window.location="{{url('/dashboard')}}"</script> -->

@else

<script>alert("You don't have permision to access this page!")</script>

<script>window.location="{{url('/')}}"</script>

@endif

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
                    <h1 class="mb-12 text-5xl font-goldplayBold flex-1">
                        All Minted NFT's
                    </h1>
                    <div class="payments-table table-wrapper">
                        <table id="example" class="w-full">
                            <thead class="bg-senary font-goldplaySemibold">
                                <tr>
                                    <th class="w-1/6">Image Name</th>
                                    <th class="w-1/6">Price</th>
                                    <th class="w-1/6">Buyer</th>
                                    <th class="w-1/6">Tx ID</th>
                                    <th class="w-1/6">Image</th>
                                    <th class="w-1/6">Mint Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-center items">
                                @foreach ($data as $wall)
                                <tr class="item">
                                    <td class="font-goldplayBold">
                                        {{$wall->image_name}}
                                    </td>
                                    <td class="font-goldplayBold">
                                        {{$wall->amount}}
                                    </td>
                                    <td>
                                        {{$wall->name}}
                                    </td>
                                    <td>
                                        {{$wall->tx_id}}
                                    </td>
                                    <td>
                                        <img class="img-responsive img-thumbnail" src="{{ URL::to('/') }}/Uploads/{{$wall->url}}">
                                    </td>
                                    <td>
                                        {{$wall->minted}}
                                    </td>
                                </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <p class="lead mt-6">Displaying <span class="shownLength font-goldplayBold"></span> of <span class="listLength font-goldplayBold"></span> results.</p>
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

@stop

