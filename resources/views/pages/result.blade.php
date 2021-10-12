@extends('layouts.default')
@section('title', '| Search Results')
@section('content')

    <div>
        <div class="container px-4 mx-auto">
            <div class="pt-24 flex flex-col justify-center items-center">
                <div class="w-full bg-quinary rounded-3xl p-6 md:p-12 my-14">
                    <h1 class="mb-12 text-5xl font-goldplayBold">
                        Search Results
                    </h1>
                    <form action="do_filter" method="GET" class="flex flex-wrap flex-col lg:flex-row mb-6">
                        {{csrf_field()}}
                        <div class="flex w-full lg:w-3/5 items-center rounded-3xl bg-quinary border-secondary border-2 mb-8">
                            <div class="w-full">
                                <input type="text" class="w-full px-4 py-1 text-white rounded-full focus:outline-none bg-quinary" require name="search" placeholder="What are you searching for?">
                            </div>
                            <div>
                                <button type="submit" class="button-secondary -m-px">
                                    Search
                                </button>
                            </div>
                        </div>
                        <div class="w-full flex items-center justify-center md:justify-end lg:w-2/5 mb-8">
                            <div class="custom-select select-selected--outline w-36">
                                <select name="order">
                                    <option>Order</option>
                                    <option value="asc">ASC</option>
                                    <option value="desc">DESC</option>

                                </select>
                            </div>
                            <div class="custom-select w-36 ml-6">
                                <select name="price">
                                    <option>Price</option>
                                    <option value="1-100">1-100</option>
                                    <option value="100-500">100-500</option>
                                    <option value="500-1000">500-1000</option>
                                </select>
                            </div>
            
                        </div>
                    </form>
                    
                    <div class="flex flex-wrap -mx-4 overflow-hidden some-list-counter-1">
                        @forelse ($data as $wall)
                            <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/3 transform transition hover:scale-105 duration-300 ease-in-out">
                                <a href="/view/{{$wall->id}}" class="text-white">
                                    <div class="bg-gradient-to-br from-quinary to-senary rounded-2xl">
                                        <div class="bg-septenary rounded-t-2xl px-4 py-1">
                                            <span class="uppercase text-xs opacity-50">Project id: {{$wall->nft_id}}</span>
                                        </div>
                                        <img class="w-full" src="{{ URL::to('/') }}/Uploads/{{$wall->url}}" alt="{{$wall->image_name}}">
                                        <div class="p-4">
                                            <span class="block text-lg my-2">project: {{$wall->assets_name}}</span>
                                            <span class="block text-lg my-2">collection: {{$wall->collection_name}}</span>
                                            <span class="block text-lg my-2">series: ?</span>
                                            <span class="block text-lg my-2">artist: {{$wall->artist_name}}</span>
                                            <div class="flex flex-row">
                                                @if($wall->attr_1)
                                                    <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase">{{$wall->attr_1}}</span>
                                                @endif
                                                @if($wall->attr_2)
                                                    <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase">{{$wall->attr_2}}</span>
                                                @endif
                                                @if($wall->attr_3)
                                                    <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase">{{$wall->attr_3}}</span>
                                                @endif
                                                @if($wall->attr_4)
                                                    <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase">{{$wall->attr_4}}</span>
                                                @endif
                                                @if($wall->attr_5)
                                                    <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase">{{$wall->attr_5}}</span>
                                                @endif
                                            </div>
                                            @if($wall->status=='sold')
                                                <span class="block text-quaternary text-xl uppercase my-4">Sold Out</span>
                                            @else 
                                            <a href="/view/{{$wall->id}}" class="button-grad block w-36 py-3 px-0 my-4 hover:bg-pos-100">
                                                View
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                        
                        @empty
                        <div class="text-quaternary flex flex-row items-center mb-3 ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Sorry! No Such Record Found
                        </div>
                        @endforelse
                </div>
            </div>
        </div>
    </div>

@stop
