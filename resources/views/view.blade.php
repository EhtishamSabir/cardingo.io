@extends('layouts.default')
@section('title', '| Asset Details')
@section('content')

    <div class="bg-section-other bg-cover">
        <div class="container px-4 mx-auto">
            <div class="py-40 flex flex-wrap flex-col md:flex-row">
                <div class="w-full md:w-1/3 mb-6">
                    <img class="block rounded-3xl w-full mb-10" src="{{ URL::to('/') }}/Uploads/{{$data[0]->url}}" alt="{{$data[0]->name}}">
                    <div class="flex flex-row flex-wrap justify-between">
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="{{ asset('assets/images/social--youtube-v2.svg') }}"  alt="Youtube">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="{{ asset('assets/images/social--tiktok-v2.svg') }}"  alt="TikTok">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="{{ asset('assets/images/social--instagram-v2.svg') }}"  alt="Instagram">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="{{ asset('assets/images/social--discord-v2.svg') }}"  alt="Discord">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="{{ asset('assets/images/social--github-v2.svg') }}"  alt="Github">
                        </a>
                        <a href="" class="mb-4 transform transition hover:scale-125 duration-300 ease-in-out w-14-perc">
                            <img src="{{ asset('assets/images/social--telegram-v2.svg') }}"  alt="Telegram">
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-2/3 md:pl-10">
                    <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl">
                        <div class="bg-septenary rounded-t-3xl p-4 md:p-8">
                            <div class="mb-6 opacity-80">Assets Details</div>
                            <div class="flex flex-wrap flex-row">
                                <span class="block border-secondary border-2 rounded-3xl py-3 px-7 border-solid mr-4">
                                    {{$data[0]->price}} ADA
                                </span>
                                @if($data[0]->status=='minted')
                                    <span class="block text-quaternary text-xl uppercase my-4">Sold Out</span>
                                @else 
                                <div class="custom-select outline-select select-selected--outline w-32 mr-4">
                                    <select name="order">
                                        <option>QTY</option>
                                        <option value="asc">1</option>
                                        <option value="desc">2</option>
                                        <option value="desc">3</option>
                                        <option value="desc">4</option>
                                        <option value="desc">5</option>
                                    </select>
                                </div>
                                <a href="/buy/{{$data[0]->id}}/{{$data[0]->price}}" class="button-secondary border-2px-trans uppercase w-full md:w-auto mt-4 md:mt-0">Buy</a>
                                @endif
                                
                            </div>
                        </div>
                        <!--<form action="do_filter" method="GET" class="jumbotron mt-5">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="inputEmail4">Filter</label>
                                <input type="text" class="form-control" require name="search" placeholder="Search Name">
                            </div>
                            <div class="col-md-3 mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-md">Search</button>
                        </div>
                        </form>-->
                        <div class="p-4 md:p-8">
                            <div class="flex flex-wrap overflow-hidden md:-mx-4 items-end">
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Asset Name</span>
                                    <div class="input-bb-secondary min-h-66px">{{$data[0]->image_name}}</div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Asset ID</span>
                                    <div class="input-bb-secondary min-h-66px">{{$data[0]->nft_id}}</div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Project</span>
                                    <div class="input-bb-secondary min-h-66px">
                                        @if($data[0]->collection_name!='')
                                        {{$data[0]->collection_name}}
                                        @else 
                                            Not Provided
                                        @endif
                                    </div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Listing ID</span>
                                    <div class="input-bb-secondary min-h-66px">{{$data[0]->id}}</div>
                                </div>
                                <!-- <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Policy</span>
                                    <div class="input-bb-secondary min-h-66px">???</div>
                                </div> -->
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Quantity</span>
                                    <div class="input-bb-secondary min-h-66px">{{$data[0]->quantity}}</div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Mint Status</span>
                                    <div class="input-bb-secondary min-h-66px">{{$data[0]->status}}</div>
                                </div>
                                <div class="w-full overflow-hidden mb-12 md:my-4 md:px-4 md:w-1/2">
                                    <span class="input-bb-label">Listed On</span>
                                   
                                    <div class="input-bb-secondary min-h-66px"> @php
                                   echo date('d/m/Y H:i:s A', strtotime($data[0]->created_at));
                                    @endphp</div>
                                </div>
                            </div>
                            @if($data[0]->attr_1)
                            <span class="input-bb-label block mb-4">Tags</span>
                            <div class="flex flex-wrap flex-row">
                                @if($data[0]->attr_1)
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase">{{$data[0]->attr_1}}</span>
                                @endif
                                @if($data[0]->attr_2)
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase">{{$data[0]->attr_2}}</span>
                                @endif
                                @if($data[0]->attr_3)
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase">{{$data[0]->attr_3}}</span>
                                @endif
                                @if($data[0]->attr_4)
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase">{{$data[0]->attr_4}}</span>
                                @endif
                                @if($data[0]->attr_5)
                                    <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase">{{$data[0]->attr_5}}</span>
                                @endif
                                @if($data[0]->attr_1=='' && $data[0]->attr_2=='' && $data[0]->attr_3=='' && $data[0]->attr_4=='' && $data[0]->attr_5=='')
                                 <span class="block mr-4 my-3 px-6 py-3 bg-septenary rounded-md text-2xl uppercase">No Attribute Provided</span>
                                @endif
                            </div>
                            @endif
                            
                            <span class="input-bb-label mt-3">Description</span>
                            <p class="opacity-80 my-10">
                            @if($data[0]->long_description!='')
                            {{$data[0]->long_description}}
                            @else 
                                Not Provided
                            @endif
                            </p>
                         
                                
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

 


@stop
