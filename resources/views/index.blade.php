<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>

        Carding

    </title>

    <meta name="description" content="" />

    <meta name="keywords" content="" />

    <meta name="author" content="" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}" >

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nav.min.css') }}" >

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}" >

</head>



<body class="leading-relaxed tracking-normal text-primary bg-quinary font-goldplayMedium text-sm md:text-base md:leading-relaxed">





    <!-- NAV -->



    <header class="header transition-all duration-200">

        <div class="container">

            <section class="wrapper">

                <a href="/">

                    <!--Icon from: http://www.potlabicons.com/ -->

                    <img src="{{ asset('assets/images/logo-horizontal.png') }}" width="253" height="75" alt="CARDINGO">

                </a>

                <div class="lg:hidden flex flex-1 justify-end">

                    <button type="button" class="opened-menu">

                    <span></span>

                    <span></span>

                    <span></span>

                    <span></span>

                </button>

                </div>

                <div class="overlay"></div>

                <nav class="navbar flex flex-1 justify-end">

                    <button type="button" class="closed-menu">

                      <img src="{{ asset('assets/images/close.svg') }}" class="closed-icon" alt="close">

                    </button>

                    <ul class="menu font-goldplayBlack text-lg">

                        <li class="menu-item"><a href="#">Token <span class="font-goldplayRegular">(coming soon)</a></li>

                        <li class="menu-item menu-item-has-children">

                            <a href="#" data-toggle="sub-menu">Nfts<i class="expand"></i></a>

                            <ul class="sub-menu lg:text-center font-goldplayRegular">

                                <li class="menu-item"><a href="#">New</a></li>

                                <li class="menu-item"><a href="#">Rarity</a></li>

                                <li class="menu-item"><a href="#">Pixel Art</a></li>

                                <li class="menu-item"><a href="#">Illustrations</a></li>

                                <li class="menu-item"><a href="#">Collectibles</a></li>

                            </ul>

                        </li>

                        <li class="menu-item menu-item-has-children">

                            <a href="#" data-toggle="sub-menu">Community<i class="expand"></i></a>

                            <ul class="sub-menu lg:text-center font-goldplayRegular">

                                <li class="menu-item"><a href="#">Contact Form</a></li>

                                <li class="menu-item"><a href="#">Telegram</a></li>

                                <li class="menu-item"><a href="#">Twitter</a></li>

                                <li class="menu-item"><a href="#">Discord</a></li>

                                <li class="menu-item"><a href="#">Medium</a></li>

                                <li class="menu-item"><a href="#">Reddit</a></li>

                                <li class="menu-item"><a href="#">Github</a></li>

                            </ul>

                        </li>

                        @if(!isset(Auth::user()->email))                        

                        <li class="menu-item"><a href="/signin">Login</a></li>

                        <li class="menu-item" style="margin-right: 0;">

                            <a href="/signup" style="color: white;" class="block text-center mx-3 lg:mx-0 color-white bg-gradient-to-r from-secondary via-tertiary to-tertiary font-goldplaySemibold rounded-3xl mt-4 lg:mt-0 py-3 px-10 shadow transform transition bg-size-200 bg-pos-0 hover:bg-pos-100 duration-200 ease-in-out">

                                Sign up

                            </a>

                        </li>

                        @endif

                        @auth

                        @if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com')

                        <li class="menu-item">

                            <a class="nav-link" href="/dashboard">Dashboard</a>

                        </li>

                        @else

                        <li class="menu-item">

                            <a class="nav-link" href="/profile">Dashboard</a>

                        </li>

                        @endif

                        @endauth

                        @if(isset(Auth::user()->email))

                        <li class="menu-item">

                            <a class="nav-link" href="/logout">Logout</a>

                        </li>

                        @endif

                    </ul>

                </nav>

            </section>

        </div>

    </header>





    <!-- ALERT -->



    @if($message = Session::get('success'))

    <div class="mt-32 flex bg-secondary p-6">

        <div class="container px-4 mx-auto items-center">

            <div class="alert alert-success alert-block">

                <button type="button" class="close text-2xl mr-6" data-dismiss="alert">x</button>

                <strong>{{$message}}</strong>

            </div>

        </div>

    </div>

    @endif





    

    <div class="bg-section1 bg-cover">



        <!-- HERO -->

        <div class="pt-24 lg:h-screen flex flex-col justify-center">

            <div class="container px-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">

                <div class="flex flex-col w-full md:w-1/2 justify-center items-start text-center md:text-left">

                    <h1 class="mt-20 mb-8 text-6xl font-goldplayBold">

                        world’s first NFT meme on Cardano

                    </h1>

                    <p class="leading-normal text-2xl mb-16 opacity-80">

                        With the release of Cardano Smart Contract and through the Alonzo Hard Fork, Cardano will enter the Goguen era. It would be...

                    </p>

                    <a href="#" class="m-auto md:mx-0 bg-gradient-to-r from-secondary via-tertiary to-tertiary font-goldplaySemibold text-2xl rounded-3xl mb-10 py-4 px-16 shadow-lg transform transition-all bg-size-200 bg-pos-0 hover:bg-pos-100 duration-200 ease-in-out">

                        full story

                    </a>

                </div>

                <div class="w-full md:w-1/2 py-6 text-center">

                    <img class="w-full px-12 lg:pl-20" src="{{ asset('assets/images/cardingos--rocket.png') }}" alt="Cardingo to the moon!" />

                </div>

            </div>

            <div class="container px-4 mx-auto">

                <div class="flex flex-row flex-wrap justify-center lg:justify-start mt-10">

                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                        <img src="{{ asset('assets/images/social--youtube.svg') }}" width="40" height="40" alt="Youtube">

                    </a>

                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                        <img src="{{ asset('assets/images/social--tiktok.svg') }}" width="40" height="40" alt="TikTok">

                    </a>

                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                        <img src="{{ asset('assets/images/social--instagram.svg') }}" width="40" height="40" alt="Instagram">

                    </a>

                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                        <img src="{{ asset('assets/images/social--github.svg') }}" width="40" height="40" alt="Github">

                    </a>

                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                        <img src="{{ asset('assets/images/social--reddit.svg') }}" width="40" height="40" alt="Reddit">

                    </a>

                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                        <img src="{{ asset('assets/images/social--telegram.svg') }}" width="40" height="40" alt="Telegram">

                    </a>

                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                        <img src="{{ asset('assets/images/social--medium.svg') }}" width="40" height="40" alt="Medium">

                    </a>

                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                        <img src="{{ asset('assets/images/social--twitter.svg') }}" width="40" height="40" alt="Twitter">

                    </a>

                </div>

            </div>

        </div>





        <!-- PRIMARY INFO -->



        <section class="pt-24">

            <div class="container px-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">

                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left md:mt-20">

                    <h2 class="mb-8 text-5xl font-goldplayBold">

                        NFT marketplace

                    </h2>

                    <p class="leading-normal text-xl mb-16 opacity-80 lg:pr-16">

                        Crikey, what a little bewdy! The exclusive and super fluffy cardingo NFTs are up for grab. Get yourself the very first set of NFTs minted on the Cardano blockchain and join the new era in the making. Cardingo gives you access to the super exciting NFT

                        marketplace which will make your NFT shopping easy without charging you ridiculous fees and unnecessary hassle. You can even transact your NFTs and collectibles just as you transact your ADA coins with little as no fees just like ADA.

                        It has never been so easy, it’s ridgy-didge!

                    </p>

                </div>

                <div class="w-full md:w-3/5 py-6 text-center">

                    <img class="w-full px-12" src="{{ asset('assets/images/cardingos--working.png') }}" alt="Cardingos creating" />

                </div>

            </div>

            <div>

                <img src="{{ asset('assets/images/divider1.svg') }}" class="w-screen">

            </div>

        </section>

</div>





    <!-- COLLECTIONS -->



    <section class="bg-quinary py-16">

        <div class="container max-w-5xl mx-auto m-8">



            <!-- Filters -->

            <div class="flex flex-wrap flex-col lg:flex-row mb-12">

                <form action="do_filter" method="GET" class="flex w-full lg:w-3/5 items-center rounded-3xl bg-quinary border-secondary border-2 mb-8">

                    {{csrf_field()}}

                    <div class="w-full">

                        <input type="text" class="w-full px-4 py-1 text-white rounded-full focus:outline-none bg-quinary" require name="search" placeholder="What are you searching for?">

                    </div>

                    <div>

                        <button type="submit" class="flex items-center justify-center py-3 px-8 text-gray-100 rounded-3xl bg-secondary -m-px">

                            <!--<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"

                                xmlns="http://www.w3.org/2000/svg">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>

                            </svg>-->

                            Search

                        </button>

                    </div>

               

                <div class="w-full flex items-center justify-end lg:w-2/5 mb-8">

                    <button class="bg-quinary border-secondary border-2 rounded-3xl py-3 px-8 border-solid">

                        Sort by

                    </button>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

                    </svg>

                    <button class="bg-secondary border-secondary border-2 rounded-3xl py-3 px-8 border-solid ml-6">

                        Filter

                    </button>

                </div>
                </form>

            </div>



            <!-- Slider -->

            <div class="swiper mySwiper mb-12">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <div class="flex flex-wrap flex-col lg:flex-row lg:mx-20 bg-gradient-to-br from-quinary to-senary rounded-2xl">

                            <div class="w-full lg:w-1/2 p-4 lg:p-20">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam

                            </div>

                            <div class="w-full lg:w-1/2">

                                <img class="w-full max-h-96 rounded-b-2xl lg:rounded-bl-none lg:rounded-r-2xl" src="{{ asset('assets/images/image.jpeg') }}" alt="Cardingo to the moon!"

                                />

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="flex flex-wrap flex-col lg:flex-row lg:mx-20 bg-gradient-to-br from-quinary to-senary rounded-2xl">

                            <div class="w-full lg:w-1/2 p-4 lg:p-20">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam

                            </div>

                            <div class="w-full lg:w-1/2">

                                <img class="w-full max-h-96 rounded-b-2xl lg:rounded-bl-none lg:rounded-r-2xl" src="{{ asset('assets/images/image.jpeg') }}" alt="Cardingo to the moon!"

                                />

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="flex flex-wrap flex-col lg:flex-row lg:mx-20 bg-gradient-to-br from-quinary to-senary rounded-2xl">

                            <div class="w-full lg:w-1/2 p-4 lg:p-20">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam

                            </div>

                            <div class="w-full lg:w-1/2">

                                <img class="w-full max-h-96 rounded-b-2xl lg:rounded-bl-none lg:rounded-r-2xl" src="{{ asset('assets/images/image.jpeg') }}" alt="Cardingo to the moon!"

                                />

                            </div>

                        </div>

                    </div>

                </div>

                <div class="swiper-button-next"></div>

                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>

            </div>



            <!-- Card grid -->

            <div class="flex flex-wrap -mx-4 overflow-hidden">
            
        

                @foreach ($data as $wall)
                <li class="some-list-4">
                <!--@php

                    echo $wall;

                @endphp-->

                <a href="/view/{{$wall->id}}">

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/3">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-2xl">

                            <div class="bg-septenary rounded-t-2xl px-4 py-1">

                                <span class="uppercase text-xs opacity-50">Project id: {{$wall->nft_id}}</span>

                            </div>

                            <img class="" src="{{ URL::to('/') }}/Uploads/{{$wall->url}}" alt="{{$wall->name}}">

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

                                <a href="/view/{{$wall->id}}" style="color: white;" class="block w-36 color-white bg-gradient-to-r from-secondary to-tertiary font-goldplaySemibold rounded-3xl my-4 py-3 shadow opacity-90 transform transition hover:opacity-100 duration-200 ease-in-out text-center">

                                    View

                                </a>

                                @endif

                            </div>

                        </div>

                    </div>

                </a>
                </li>
                @endforeach
               
            </div>

            <div class="flex justify-center mt-12">

                <button class="flex items-center bg-quinary border-secondary border-2 rounded-3xl py-3 px-8 border-solid ">

                    <svg xmlns="http://www.w3.org/2000/svg " class="h-4 w-4 mr-3 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">

                        <path stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " d="M19 13l-7 7-7-7m14-8l-7 7-7-7 " />

                    </svg>

                    Load more

                </button>

            </div>

        </div>

    </section>





    <!-- COMPANY INFO -->



    <section class="pt-32 lg:pt-64 bg-section3 bg-cover">

        <div class="container px-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">

            <div class="flex flex-col w-full md:w-3/5 justify-center text-center md:text-left">

                <h2 class="mb-8 text-5xl font-goldplayBold">

                    team

                </h2>

                <div class="flex flex-wrap -mx-4 overflow-hidden mb-10">

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/4 text-center">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl w-full h-40">

                            <!--img-->

                        </div>

                        <div class="py-3">

                            <span class="block text-xl font-goldplayBold">John Doe</span>

                            <span class="block text-quaternary">Programmer</span>

                        </div>

                    </div>

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/4 text-center">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl w-full h-40">

                            <!--img-->

                        </div>

                        <div class="py-3">

                            <span class="block text-xl font-goldplayBold">John Doe</span>

                            <span class="block text-quaternary">Programmer</span>

                        </div>

                    </div>

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/4 text-center">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl w-full h-40">

                            <!--img-->

                        </div>

                        <div class="py-3">

                            <span class="block text-xl font-goldplayBold">John Doe</span>

                            <span class="block text-quaternary">Programmer</span>

                        </div>

                    </div>

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/4 text-center">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl w-full h-40">

                            <!--img-->

                        </div>

                        <div class="py-3">

                            <span class="block text-xl font-goldplayBold">John Doe</span>

                            <span class="block text-quaternary">Programmer</span>

                        </div>

                    </div>

                </div>

                <h2 class="mb-8 text-5xl font-goldplayBold">

                    Partners

                </h2>

                <div class="flex flex-wrap -mx-4 overflow-hidden mb-10">

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/4 text-center">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl w-full h-40">

                            <!--img-->

                        </div>

                        <div class="py-3">

                            <span class="block text-xl font-goldplayBold">John Doe</span>

                            <span class="block text-quaternary">Programmer</span>

                        </div>

                    </div>

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/4 text-center">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl w-full h-40">

                            <!--img-->

                        </div>

                        <div class="py-3">

                            <span class="block text-xl font-goldplayBold">John Doe</span>

                            <span class="block text-quaternary">Programmer</span>

                        </div>

                    </div>

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/4 text-center">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl w-full h-40">

                            <!--img-->

                        </div>

                        <div class="py-3">

                            <span class="block text-xl font-goldplayBold">John Doe</span>

                            <span class="block text-quaternary">Programmer</span>

                        </div>

                    </div>

                    <div class="my-4 px-4 w-full overflow-hidden md:w-1/2 lg:w-1/4 text-center">

                        <div class="bg-gradient-to-br from-quinary to-senary rounded-3xl w-full h-40">

                            <!--img-->

                        </div>

                        <div class="py-3">

                            <span class="block text-xl font-goldplayBold">John Doe</span>

                            <span class="block text-quaternary">Programmer</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="w-full md:w-2/5 py-6 text-center">

                <img class="w-full px-12" src="{{ asset('assets/images/cardingos--army.png') }}" alt="Cardingo army" />

            </div>

        </div>

        <div class="container px-4 mx-auto mb-20">

            <h2 class="mb-8 text-5xl font-goldplayBold mt-32">

                roadmap

            </h2>

            <div class="flex flex-wrap">

                <div class="my-4 w-full sm:w-1/3">

                    <h3 class="mb-6 text-2xl font-goldplayBold">Q3 2021</h3>

                    <h4 class="mb-3 text-xl text-quaternary">Phase 1</h4>

                    <ul class="list-disc pl-4 opacity-80">

                        <li>website launch</li>

                        <li>nft launch</li>

                        <li>nft sale</li>

                        <li>social meida</li>

                        <li>reach out</li>

                    </ul>

                </div>

                <div class="my-4 w-full lg:w-1/3">

                    <h3 class="mb-6 text-2xl font-goldplayBold">Q1 2022</h3>

                    <h4 class="mb-3 text-xl text-quaternary">Phase 2</h4>

                    <ul class="list-disc pl-4 opacity-80">

                        <li>website launch</li>

                        <li>nft launch</li>

                        <li>nft sale</li>

                        <li>social meida</li>

                        <li>reach out</li>

                    </ul>

                </div>

                <div class="my-4 w-full lg:w-1/3">

                    <h3 class="mb-6 text-2xl font-goldplayBold">Q2 2022</h3>

                    <h4 class="mb-3 text-xl text-quaternary">Phase 3</h4>

                    <ul class="list-disc pl-4 opacity-80">

                        <li>website launch</li>

                        <li>nft launch</li>

                        <li>nft sale</li>

                        <li>social meida</li>

                        <li>reach out</li>

                    </ul>

                </div>

            </div>

        </div>

        <div class="mt-20">

            <img src="{{ asset('assets/images/divider1.svg') }}" class="w-screen">

        </div>

    </section>





    <!-- FOOTER -->



    <section class="pt-16 mb-32 bg-section4 bg-cover">

        <div class="container px-4 mx-auto flex flex-col items-center text-center">

            <p class="text-2xl opacity-80 max-w-2xl mb-12">

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected

            </p>

            <div class="flex flex-row flex-wrap justify-center mb-20">

                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                    <img src="{{ asset('assets/images/social--youtube.svg') }}" width="40" height="40" alt="Youtube">

                </a>

                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                    <img src="{{ asset('assets/images/social--tiktok.svg') }}" width="40" height="40" alt="TikTok">

                </a>

                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                    <img src="{{ asset('assets/images/social--instagram.svg') }}" width="40" height="40" alt="Instagram">

                </a>

                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                    <img src="{{ asset('assets/images/social--github.svg') }}" width="40" height="40" alt="Github">

                </a>

                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                    <img src="{{ asset('assets/images/social--reddit.svg') }}" width="40" height="40" alt="Reddit">

                </a>

                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                    <img src="{{ asset('assets/images/social--telegram.svg') }}" width="40" height="40" alt="Telegram">

                </a>

                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                    <img src="{{ asset('assets/images/social--medium.svg') }}" width="40" height="40" alt="Medium">

                </a>

                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">

                    <img src="{{ asset('assets/images/social--twitter.svg') }}" width="40" height="40" alt="Twitter">

                </a>

            </div>

            <p class="opacity-80 max-w-2xl mb-12">

                &#169; Copyright Cardingo Ltd. 2021 All Rights Reserved. Cardingo is the world’s first native NFT / meme token launched on Cardano smart contracts. We are not financial advisors - all investing carries a risk so, always perform your due diligence and

                invest wisely.

                <br /><br /> Made with dingos &#9829; in the OUTBACK<br /> Copyright &#169; 2021 | cardingo.io<br />

            </p>

            <img class="px-12 w-full max-w-4xl" src="{{ asset('assets/images/cardingos--crochunt.png') }}" alt="Cardingo croc hunt" />

        </div>

    </section>



    <!-- Header bg on scroll -->

    <script>

        const navbar = document.querySelector('header');

        window.onscroll = () => {

            if (window.scrollY > 40) {

                navbar.classList.add('bg-senary');

                navbar.classList.add('shadow-lg');

            } else {

                navbar.classList.remove('bg-senary');

                navbar.classList.remove('shadow-lg');

            }

        };

    </script>



    <!-- Nav JS -->

    <script src="{{ asset('assets/js/navscript.js') }}" defer></script>



    <!-- Swiper JS -->

    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>



    <!-- Initialize Swiper -->

    <script>

        var swiper = new Swiper(".mySwiper", {

            spaceBetween: 30,

            centeredSlides: true,

            autoplay: {

                delay: 2500,

                disableOnInteraction: false,

            },

            pagination: {

                el: ".swiper-pagination",

                clickable: true,

            },

            navigation: {

                nextEl: ".swiper-button-next",

                prevEl: ".swiper-button-prev",

            },

        });

    </script>

</body>



</html>

