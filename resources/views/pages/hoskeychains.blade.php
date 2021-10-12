@extends('layouts.default')
@section('title', '| Hoskeychains')
@section('content')
    <div class="bg--section-centred bg-cover">

        <!-- HERO -->
        <div class="pt-20 lg:pt-0 lg:h-screen flex flex-col justify-center">
            <div class="container px-4 mx-auto flex flex-col items-center">
                <div class="flex flex-col items-center max-w-2xl mx-10 text-center">
                    <h1 class="mt-20 mb-6 text-6xl font-goldplayBold">
                        world’s first NFT meme on Cardano
                    </h1>
                    <p class="leading-normal text-2xl mb-8 opacity-80">
                        With the release of Cardano Smart Contract and through the Alonzo Hard Fork, Cardano will enter the Goguen era. It would be...
                    </p>
                    <a href="#" class="block button-grad max-w-xs text-2xl mb-16 hover:bg-pos-100">
                        Buy Now
                    </a>
                </div>
                <div class="flex flex-row flex-wrap justify-center">
                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="{{ asset('assets/images/social--youtube.svg') }}" width="40" height="40" alt="Youtube">
                    </a>
                    <a href="https://discord.gg/envpS3VT" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="{{ asset('assets/images/social--discord.svg') }}" width="40" height="40" alt="discord">
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
                    <a href="https://t.me/joinchat/YNmt7ziQxkkxYmU9" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="{{ asset('assets/images/social--telegram.svg') }}" width="40" height="40" alt="Telegram">
                    </a>
                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="{{ asset('assets/images/social--medium.svg') }}" width="40" height="40" alt="Medium">
                    </a>
                    <a href="https://twitter.com/cardingo_io" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="{{ asset('assets/images/social--twitter.svg') }}" width="40" height="40" alt="Twitter">
                    </a>
                </div>
            </div>
        </div>
        <div>
            <img src="{{ asset('assets/images/divider1.svg') }}" class="w-screen">
        </div>
    </div>


    <!-- COLLECTIONS -->

    <section class="bg-quinary py-16">
        <div class="container">
            <div class="flex flex-wrap -mx-4 overflow-hidden mb-32">
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        0.1% Incredibly rare!
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">01 The Golden Dingos</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Gold background</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Dingo body<br />(brown or white tail)</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 10</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--01-golden-dingos.png" alt="The Golden Dingos"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        0.38% Pretty damn rare!
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">02 Bosses of the Aquatic Krew</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Aquatic body</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Chains (any chain)</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 38</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--02-aquatic-bosses.png" alt="Bosses of the Aquatic Krew"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        0.71% Crazy rare!
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">03 Zombie Western Guys</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Zombie body</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Cowboy outfit<br />(any color)</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 71</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--03-zombie-western.png" alt="Zombie Western Guys"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        1% Rare
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">04 Aquatic Krew</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Aquatic body</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 100</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--04-aquatic-crew.png" alt="Aquatic Krew"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        2% Quite Special
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">05 Tropical Cardingos</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Hawaii hat</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 200</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--05-tropical-cardingos.png" alt="Tropical Cardingos"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        5% Very uncommon
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">06 Cardano lovers</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Cardano shades</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 500</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--06-cardano-lovers.png" alt="Cardano lovers"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        7% Lucky to get one
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">07 Original Gangstas</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">OG chains</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 700</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--07-original-gangstas.png" alt="Original Gangstas"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        10% Special on their own
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">08 Passionate Cardingos</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Red background</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 1000</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--08-passionate-cardingos.png" alt="Passionate Cardingos"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        18% Nice to have
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">09 Bronze medallists</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Bronze Keychain</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 1800</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--09-bronze-medallists.png" alt="Bronze medallists"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <div class="mb-6">
                                    <span class="bg-nonary rounded-3xl px-6 py-2 font-goldplayBold rarity-p">
                                        40% Enter the club
                                    </span>
                                </div>
                                <h3 class="text-3xl font-goldplaySemibold mb-6">10 Cardingo Red Label</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Red Keychain</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: 4000</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--10-cardingo-red-label.png" alt="Cardingo Red Label"></div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="mb-10 text-5xl font-goldplayBold text-center lowercase">
                Legendary items
            </h2>
            <p class="mb-12 text-center">Aso known as "Hidden gems" (These are incredibly unique!!!)</p>
            <div class="flex flex-wrap -mx-4 overflow-hidden">
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <h3 class="text-3xl font-goldplaySemibold mb-6">The Dingo Boss</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Dingo with white tail</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Gum</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">3D glasses</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: JUST 1!!!!</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--the-dingo-boss.png" alt="The Dingo Boss"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <h3 class="text-3xl font-goldplaySemibold mb-6">The Scary One</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Zombie body</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Dead eyes</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Fangs</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Afro hair</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: JUST 1!!!!</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--the-scary-one.png" alt="The Scary One<"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <h3 class="text-3xl font-goldplaySemibold mb-6">The Clint Eastwood</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Fair skin</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Brown poncho</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Cowboy hat</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Eagle</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: JUST 1!!!!</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--the-clint-eastwood.png" alt="The Hungover Elf"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-1/2">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 pr-6">
                                <h3 class="text-3xl font-goldplaySemibold mb-6">The Hungover Elf</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Tanned Elf</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Hearts Underwear</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Lobster Mic</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: JUST 1!!!!</span>
                            </div>
                            <div class="w-full md:w-1/2 mt-10 md:mt-0"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--the-hungover-elf.png" alt="The Hungover Elf"></div>
                        </div>
                    </div>
                </div>
                <div class="my-4 px-4 w-full overflow-hidden lg:w-4/5">
                    <div class="h-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/3 pr-6">
                                <h3 class="text-3xl font-goldplaySemibold mb-6">The Aquatic Couple</h3>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Aquatic body</span>
                                </div>
                                <div class="flex flex-row mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="#5465FF">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-lg">Aquatic outfit</span>
                                </div>
                                <span class="block text-quaternary text-xl font-goldplayBold mt-6">Distribution: JUST 2!!!!</span>
                            </div>
                            <div class="w-full md:w-1/3 mt-10 md:mt-0 md:pl-8"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--the-aquatic-couple-1.png" alt="The Aquatic couple"></div>
                            <div class="w-full md:w-1/3 mt-10 md:mt-0 md:pl-8"><img class="w-full rounded-2xl" src="assets/images/hoskeychain--the-aquatic-couple-2.png" alt="The Aquatic couple"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg--section-middle bg-cover">
        <img src="{{ asset('assets/images/divider2.png') }}" class="w-full mb-20">
        <div class="container flex flex-col items-center">
           
            <div class="w-full bg-gradient-to-br from-quinary to-senary rounded-2xl p-6 md:p-12 mb-20 md:mb-32">
                <h2 class="mb-12 text-5xl font-goldplayBold text-center lowercase">
                    Cardingo categories <span class="font-goldplayRegular">(sub-collections)</span>
                </h2>
                <div class="category-table table-wrapper">
                    <table id="example" class="w-full font-goldplaySemibold">
                        <thead class="bg-senary">
                            <tr>
                                <th style="width: 5%">No.</th>
                                <th style="width: 60%" class="text-left">Cardingo categories (sub-collections)</th>
                                <th style="width: 10%">Amount</th>
                                <th style="width: 5%">%</th>
                                <th style="width: 15%">Example</th>
                                <th style="width: 10%">Total</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>
                                    01
                                </td>
                                <td class="text-left">
                                    “Golden Dingos” --> Gold background & Dingo body (brown or white tail)
                                </td>
                                <td>
                                    10
                                </td>
                                <td>
                                    0.10%
                                </td>
                                <td>
                                    nft_1078.png
                                </td>
                                <td>
                                    10000
                                </td>
                            </tr>  
                            <tr>
                                <td>
                                    02
                                </td>
                                <td class="text-left">
                                    “Golden Dingos” --> Gold background & Dingo body (brown or white tail)
                                </td>
                                <td>
                                    10
                                </td>
                                <td>
                                    0.10%
                                </td>
                                <td>
                                    nft_1078.png
                                </td>
                                <td>
                                    10000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    03
                                </td>
                                <td class="text-left">
                                    “Golden Dingos” --> Gold background & Dingo body (brown or white tail)
                                </td>
                                <td>
                                    10
                                </td>
                                <td>
                                    0.10%
                                </td>
                                <td>
                                    nft_1078.png
                                </td>
                                <td>
                                    10000
                                </td>
                            </tr>  
                            <tr>
                                <td>
                                    04
                                </td>
                                <td class="text-left">
                                    “Golden Dingos” --> Gold background & Dingo body (brown or white tail)
                                </td>
                                <td>
                                    10
                                </td>
                                <td>
                                    0.10%
                                </td>
                                <td>
                                    nft_1078.png
                                </td>
                                <td>
                                    10000
                                </td>
                            </tr>  
                            <tr>
                                <td>
                                    05
                                </td>
                                <td class="text-left">
                                    “Golden Dingos” --> Gold background & Dingo body (brown or white tail)
                                </td>
                                <td>
                                    10
                                </td>
                                <td>
                                    0.10%
                                </td>
                                <td>
                                    nft_1078.png
                                </td>
                                <td>
                                    10000
                                </td>
                            </tr>  
                            <tr>
                                <td>
                                    06
                                </td>
                                <td class="text-left">
                                    “Golden Dingos” --> Gold background & Dingo body (brown or white tail)
                                </td>
                                <td>
                                    10
                                </td>
                                <td>
                                    0.10%
                                </td>
                                <td>
                                    nft_1078.png
                                </td>
                                <td>
                                    10000
                                </td>
                            </tr>
                            <tr class="bg-senary font-goldplayRegular">
                                <td colspan="6" class="text-left">
                                    <div class="flex flex-row">
                                        Total Amount <span class="font-goldplayBold ml-4 mr-16">8419</span>
                                        Total Percent <span class="font-goldplayBold ml-4 mr-16">84.19 %</span>
                                        Rest to 10k <span class="font-goldplayBold ml-4">1551</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-senary font-goldplayRegular">
                                <td colspan="6" class="text-left">
                                    <span class="font-goldplayBold block mb-4">Notes:</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus bibendum nisl euismod neque, facilisis. Massa at fusce etiam quis lectus nunc nunc, quis vitae. Ac eu venenatis porta sit ornare lobortis libero lobortis. Arcu, tortor feugiat ultrices vitae ut nisi, quam. Placerat a, vestibulum elit diam ultricies. Vivamus ut id nibh viverra mi id. Egestas id in interdum ultrices mauris donec sit.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        <div class="container flex flex-col items-center">
            <h2 class="mb-12 text-5xl font-goldplayBold text-center max-w-xl lowercase">
                Frequently Asked <span class="text-nonary">Questions</span>
            </h2>
            <!-- container for all  -->
            <div class="accordion mb-20 md:mb-32">
            
                <!-- First accordian  -->
                <div class="a-container"> 
                    <p class="a-btn">Which wallet should I use? <span></span></p>
                    <div class="a-panel">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                </div>
            
                <!-- Second accordian  -->
                <div class="a-container"> 
                    <p class="a-btn">Title, header <span></span></p>
                    <div class="a-panel">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                </div>

                <!-- third accordian  -->
                <div class="a-container"> 
                    <p class="a-btn">Title, header <span></span></p>
                    <div class="a-panel">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                </div>
                
            </div>
            <h2 class="mb-8 text-5xl font-goldplayBold text-center lowercase">
                Project <span class="text-nonary">Information</span>
            </h2>
            <div class="flex flex-wrap -mx-5 w-full overflow-hidden mb-20 md:mb-32">
                <div class="my-5 md:px-5 w-full overflow-hidden md:w-1/2">
                    <div class="bg-quinary h-full rounded-3xl p-6 md:p-10">
                        <h3 class="mb-8 text-3xl font-goldplayBold">
                            Coolest Scarcities on Cardano
                        </h2>
                        <p>
                        There are 10 collections within this CocoLoco series. As you see above, the rarest collection offers you a .2% rarity, which is extremely unique. The least unique collection has 40% uniqueness; ...not so unique, but still valuable to have; it is a limited series after all!
                        </p>
                    </div>
                </div>
                <div class="my-5 md:px-5 w-full overflow-hidden md:w-1/2">
                    <div class="bg-quinary h-full rounded-3xl p-6 md:p-10">
                        <h3 class="mb-8 text-3xl font-goldplayBold">
                            About the most Rare Collections
                        </h2>
                        <p>
                        There are 10 collections within this CocoLoco series. As you see above, the rarest collection offers you a .2% rarity, which is extremely unique. The least unique collection has 40% uniqueness; ...not so unique, but still valuable to have; it is a limited series after all!There are 10 collections within this CocoLoco series. As you see above, the rarest collection offers you a .2% rarity, which is extremely unique. The least unique collection has 40% uniqueness; ...not so unique, but still valuable to have; it is a limited series after all!
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="mb-8 text-5xl font-goldplayBold text-center max-w-xl">
                key features of <span class="text-nonary">Cardingo</span>
            </h2>
            <div class="flex flex-wrap -mx-8 overflow-hidden items w-full">
                <div class="my-10 px-8 w-full overflow-hidden md:w-1/2 lg:w-1/3 flex flex-col items-center text-center">
                    <div class="key-feature-disc font-goldplayBold">01</div>
                    <span class="font-goldplayBold text-2xl my-5">Cardano</span>
                    <p class="opacity-80">CocoLoco NFTs are minted and live on the Cardano blockchain. So if you are a ADA holder, you might appreciate holding the most chill and some of the most rare NFTs in the Cardano ecosystem </p>
                </div>
                <div class="my-10 px-8 w-full overflow-hidden md:w-1/2 lg:w-1/3 flex flex-col items-center text-center">
                    <div class="key-feature-disc font-goldplayBold">02</div>
                    <span class="font-goldplayBold text-2xl my-5">Cardano</span>
                    <p class="opacity-80">CocoLoco NFTs are minted and live on the Cardano blockchain. So if you are a ADA holder, you might appreciate holding the most chill and some of the most rare NFTs in the Cardano ecosystem </p>
                </div>
                <div class="my-10 px-8 w-full overflow-hidden md:w-1/2 lg:w-1/3 flex flex-col items-center text-center">
                    <div class="key-feature-disc font-goldplayBold">03</div>
                    <span class="font-goldplayBold text-2xl my-5">Cardano</span>
                    <p class="opacity-80">CocoLoco NFTs are minted and live on the Cardano blockchain. So if you are a ADA holder, you might appreciate holding the most chill and some of the most rare NFTs in the Cardano ecosystem </p>
                </div>
                <div class="my-10 px-8 w-full overflow-hidden md:w-1/2 lg:w-1/3 flex flex-col items-center text-center">
                    <div class="key-feature-disc font-goldplayBold">04</div>
                    <span class="font-goldplayBold text-2xl my-5">Cardano</span>
                    <p class="opacity-80">CocoLoco NFTs are minted and live on the Cardano blockchain. So if you are a ADA holder, you might appreciate holding the most chill and some of the most rare NFTs in the Cardano ecosystem </p>
                </div>
                <div class="my-10 px-8 w-full overflow-hidden md:w-1/2 lg:w-1/3 flex flex-col items-center text-center">
                    <div class="key-feature-disc font-goldplayBold">05</div>
                    <span class="font-goldplayBold text-2xl my-5">Cardano</span>
                    <p class="opacity-80">CocoLoco NFTs are minted and live on the Cardano blockchain. So if you are a ADA holder, you might appreciate holding the most chill and some of the most rare NFTs in the Cardano ecosystem </p>
                </div>
                <div class="my-10 px-8 w-full overflow-hidden md:w-1/2 lg:w-1/3 flex flex-col items-center text-center">
                    <div class="key-feature-disc font-goldplayBold">06</div>
                    <span class="font-goldplayBold text-2xl my-5">Cardano</span>
                    <p class="opacity-80">CocoLoco NFTs are minted and live on the Cardano blockchain. So if you are a ADA holder, you might appreciate holding the most chill and some of the most rare NFTs in the Cardano ecosystem </p>
                </div>
            </div>
        </div>
        <div class="pt-16">
            <img src="{{ asset('assets/images/divider1.svg') }}" class="w-screen">
        </div>
    </section>

    <section class="pt-16 bg-section4 bg-cover">
        <div class="container px-4 mx-auto flex flex-col items-center text-center">
            <p class="text-2xl opacity-80 max-w-2xl mb-12">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
            </p>
            <div class="flex flex-row flex-wrap justify-center mb-20">
                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="{{ asset('assets/images/social--youtube.svg') }}" width="40" height="40" alt="Youtube">
                </a>
                <a href="https://discord.gg/envpS3VT" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="{{ asset('assets/images/social--discord.svg') }}" width="40" height="40" alt="Discord">
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
                <a href="https://t.me/joinchat/YNmt7ziQxkkxYmU9" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="{{ asset('assets/images/social--telegram.svg') }}" width="40" height="40" alt="Telegram">
                </a>
                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="{{ asset('assets/images/social--medium.svg') }}" width="40" height="40" alt="Medium">
                </a>
                <a href="https://twitter.com/cardingo_io" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="{{ asset('assets/images/social--twitter.svg') }}" width="40" height="40" alt="Twitter">
                </a>
            </div>
            <p class="opacity-80 max-w-2xl mb-12">
                &#169; Copyright Cardingo Ltd. 2021 All Rights Reserved. Cardingo is the world’s first native NFT / meme token launched on Cardano smart contracts. We are not financial advisors - all investing carries a risk so, always perform your due diligence and
                invest wisely.
                <br /><br /> Made with dingos &#9829; in the OUTBACK<br /> Copyright &#169; 2021 | cardingo.io<br />
            </p>
            <img class="px-12 w-full max-w-4xl" src="{{ asset('assets/images/cardingos--crochunt.png') }}" alt="Cardingo croc hunt"  style="object-fit: contain;;" />
        </div>
        <div class="bg-senary">
            <img src="{{ asset('assets/images/divider2.png') }}" class="w-full">
        </div>
    </section>

    <!-- MODAL -->
    <section class="modal" id="modal-name-long" data-modal-target>
        <div class="modal__overlay" data-modal-close tabindex="-1"></div>
            <div class="modal__wrapper">
                <div class="modal__header">
                    <h3 class="modal__title text-xl font-goldplayBold">
                        Dingo Foundation
                    </h3>
                    <button class="modal__close" data-modal-close aria-label="Close Modal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#ffffff">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="modal__content">
                    <p class="mb-6">
                        While Cardingo is not Charity Token, Cardingo will make transparent and verifiable donations to specific registered charitable organizations that work to preserve the Dingo. We are proud to announce that we have partnered with the <a href="https://dingofoundation.org/" class="white" target="_blank">Australian Dingo Foundation</a> and will be providing them with donations as well as cross marketing opportunities. The foundation runs the Dingo Discovery Sanctuary and Research Centre.
                    </p>
                    <p class="mb-6">
                        <em>“The Australian Dingo Foundation</em> is a team of dedicated volunteers who undertake various tasks to ensure the wellbeing and high quality of care for the resident animals, as well as an array of ancillary tasks such as veterinary, legal and investment advice, molecular laboratory work, recreational training, fundraising, school education visits, and attendance at public and community events.”
                    </p>
                        The dingo is an ancient lineage of dog found in Australia and one of the most revered animals in aboriginal mythology. The Aboriginals believed the dingoes live both in the physical and mystical realms and can perceive evil spirits undetectable by man. Dingoes could never be fully tamed, but as apex predators with high intelligence, Aboriginals used dingoes to protect their homes and children and considered them equal to man. While over the years dingoes have been hunted and people have attempted to eradicate them, the world is slowly learning they are vital to the Australian ecosystem.
                    </p>        
                </div>
             </div>
        </div>
    </section>  

   

    <!-- Modal -->
    <script src="{{ asset('assets/js/modal.min.js') }}"></script>

    <!-- Lottie for animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Accordion -->
    <script>
        function initAcc(elem, option){
        //addEventListener on mouse click
        document.addEventListener('click', function (e) {
            //check is the right element clicked
            if (!e.target.matches(elem+' .a-btn')) return;
            else{
                //check if element contains active class
                if(!e.target.parentElement.classList.contains('active')){
                    if(option==true){
                         //if option true remove active class from all other accordions 
                        var elementList = document.querySelectorAll(elem +' .a-container');
                        Array.prototype.forEach.call(elementList, function (e) {
                            e.classList.remove('active');
                        });
                    }    
                    //add active class on cliked accordion     
                    e.target.parentElement.classList.add('active');
                }else{
                    //remove active class on cliked accordion     
                    e.target.parentElement.classList.remove('active');
                }
            }
        });
    }
     
    //activate accordion function
    initAcc('.accordion', true);
    </script>
    
@stop
