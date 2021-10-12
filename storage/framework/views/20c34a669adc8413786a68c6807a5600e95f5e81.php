<?php $__env->startSection('content'); ?>
    <div class="bg-section1 bg-cover">

        <!-- HERO -->
        <div class="pt-24 lg:h-screen flex flex-col justify-center">
            <div class="container px-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <div class="flex flex-col w-full md:w-1/2 justify-center items-start text-center md:text-left">
                    <h1 class="mt-20 mb-8 text-5xl font-goldplayBold">
                        curated designer NFT collections and marketplace on cardano
                    </h1>
                    <p class="leading-normal text-2xl mb-16 opacity-80">
                    ‘Those who stop dreaming are lost' - Australian Aboriginal Proverb/Cardingo is a Native non-fungible token (NFT) marketplace built on the Cardano blockchain...
                    </p>
                    <a href="#" class="button-grad mx-auto md:mx-0 text-2xl mb-10 hover:bg-pos-100" data-modal-trigger aria-controls="full-story-modal" aria-expanded="false">
                        full story
                    </a>
                </div>
                <div class="w-full md:w-1/2 py-6 text-center">
                    <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_oa8ll0al.json"  background="transparent"  speed="1" class="w-full px-12 lg:pl-20" loop  autoplay></lottie-player>
                </div>
            </div>
            <div class="container px-4 mx-auto">
                <div class="flex flex-row flex-wrap justify-center lg:justify-start mt-10">
                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="<?php echo e(asset('assets/images/social--youtube.svg')); ?>" width="40" height="40" alt="Youtube">
                    </a>
                    <a href="https://discord.gg/envpS3VT" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="<?php echo e(asset('assets/images/social--discord.svg')); ?>" width="40" height="40" alt="discord">
                    </a>
                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="<?php echo e(asset('assets/images/social--instagram.svg')); ?>" width="40" height="40" alt="Instagram">
                    </a>
                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="<?php echo e(asset('assets/images/social--github.svg')); ?>" width="40" height="40" alt="Github">
                    </a>
                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="<?php echo e(asset('assets/images/social--reddit.svg')); ?>" width="40" height="40" alt="Reddit">
                    </a>
                    <a href="https://t.me/joinchat/YNmt7ziQxkkxYmU9" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="<?php echo e(asset('assets/images/social--telegram.svg')); ?>" width="40" height="40" alt="Telegram">
                    </a>
                    <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="<?php echo e(asset('assets/images/social--medium.svg')); ?>" width="40" height="40" alt="Medium">
                    </a>
                    <a href="https://twitter.com/cardingo_io" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                        <img src="<?php echo e(asset('assets/images/social--twitter.svg')); ?>" width="40" height="40" alt="Twitter">
                    </a>
                </div>
            </div>
        </div>


        <!-- PRIMARY INFO -->

        <section class="pt-24">
            <div class="container px-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <div class="flex flex-col w-full md:w-2/5 justify-center items-center md:items-start text-center md:text-left md:mt-20 mb-12">
                    <h2 class="mb-8 text-5xl font-goldplayBold">
                        NFT marketplace
                    </h2>
                    <p class="leading-normal text-xl opacity-80 lg:pr-16 mb-6">
                        Crikey, what a little bewdy! Cardingo aims to expand the NFT landscape  for both artists and collectors by offering our simple NFT marketplace that harnesses the power of Cardano while offering utility and value. Through unique offerings Cardingo will connect Cardano fans worldwide to create an unstoppable pack and a beautiful gallery showcasing talented artists on the Cardano blockchain.
                    </p>
                    <a href="#" class="button-secondary-outline px-4 text-white" data-modal-trigger aria-controls="nft-marketplace-modal" aria-expanded="false">
                        Read more
                    </a>
                </div>
                <div class="w-full md:w-3/5 py-6 text-center">
                    <img class="w-full px-12" src="<?php echo e(asset('assets/images/cardingos--working.png')); ?>" alt="Cardingos creating" />
                </div>
            </div>
            <div>
                <img src="<?php echo e(asset('assets/images/divider1.svg')); ?>" class="w-screen">
            </div>
        </section>
    </div>


    <!-- COLLECTIONS -->

    <section class="bg-quinary py-16">
        <div class="container max-w-5xl mx-auto m-8">

            <!-- Search and Filters -->
            <form action="do_filter" method="GET" class="flex flex-wrap flex-col lg:flex-row mb-12">
                <?php echo e(csrf_field()); ?>

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
                    <!--<button class="bg-quinary border-secondary border-2 rounded-3xl py-3 px-8 border-solid">
                        Sort by
                    </button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <button class="button-secondary border-2px-trans ml-6">
                        Filter
                    </button>-->
                </div>
            </form>

            <!-- Slider -->
            <div class="swiper mySwiper mb-12">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <div class="flex flex-wrap flex-col lg:flex-row lg:mx-20 bg-gradient-to-br from-quinary to-senary rounded-2xl">
                                <div class="w-full text-white text-center lg:w-1/2 p-4 lg:p-20">
                                    <h2 class="mb-8 text-5xl font-goldplayBold">
                                        <img class="w-full" src="<?php echo e(asset('assets/images/logo-hoskeychains.png')); ?>" alt="Hoskeychains" />
                                    </h2>
                                    <p class="mb-8 md:mb-0">First collection of generative art by cardingo</p>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <img class="w-full rounded-b-2xl lg:rounded-bl-none lg:rounded-r-2xl" src="<?php echo e(asset('assets/images/slide1--cardingo-hoskeychains.gif')); ?>" alt="Cardingo to the moon!" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="flex flex-wrap flex-col lg:flex-row lg:mx-20 bg-gradient-to-br from-quinary to-senary rounded-2xl">
                                <div class="w-full text-white text-center lg:w-1/2 p-4 lg:p-20">
                                    <h2 class="mb-8 text-5xl font-goldplayBold">
                                        <img class="w-full" src="<?php echo e(asset('assets/images/logo-hoskeychains.png')); ?>" alt="Hoskeychains" />
                                    </h2>
                                    <p class="mb-8 md:mb-0">First collection of generative art by cardingo</p>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <img class="w-full rounded-b-2xl lg:rounded-bl-none lg:rounded-r-2xl" src="<?php echo e(asset('assets/images/slide2--cardingo-hoskeychains.gif')); ?>" alt="hoskeychains"
                                    />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="flex flex-wrap flex-col lg:flex-row lg:mx-20 bg-gradient-to-br from-quinary to-senary rounded-2xl">
                                <div class="w-full text-white text-center lg:w-1/2 p-4 lg:p-20">
                                    <h2 class="mb-8 text-5xl font-goldplayBold">
                                        <img class="w-full" src="<?php echo e(asset('assets/images/logo-hoskeychains.png')); ?>" alt="Hoskeychains" />
                                    </h2>
                                    <p class="mb-8 md:mb-0">First collection of generative art by cardingo</p>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <img class="w-full rounded-b-2xl lg:rounded-bl-none lg:rounded-r-2xl" src="<?php echo e(asset('assets/images/slide3--cardingo-hoskeychains.gif')); ?>" alt="Cardingo to the moon!"
                                    />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="flex flex-wrap flex-col lg:flex-row lg:mx-20 bg-gradient-to-br from-quinary to-senary rounded-2xl">
                                <div class="w-full text-white text-center lg:w-1/2 p-4 lg:p-20">
                                    <h2 class="mb-8 text-5xl font-goldplayBold">
                                        <img class="w-full" src="<?php echo e(asset('assets/images/logo-hoskeychains.png')); ?>" alt="Hoskeychains" />
                                    </h2>
                                    <p class="mb-8 md:mb-0">First collection of generative art by cardingo</p>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <img class="w-full rounded-b-2xl lg:rounded-bl-none lg:rounded-r-2xl" src="<?php echo e(asset('assets/images/slide4--cardingo-hoskeychains.gif')); ?>" alt="Cardingo to the moon!"
                                    />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="flex flex-wrap flex-col lg:flex-row lg:mx-20 bg-gradient-to-br from-quinary to-senary rounded-2xl">
                                <div class="w-full text-white text-center lg:w-1/2 p-4 lg:p-20">
                                    <h2 class="mb-8 text-5xl font-goldplayBold">
                                        <img class="w-full" src="<?php echo e(asset('assets/images/logo-hoskeychains.png')); ?>" alt="Hoskeychains" />
                                    </h2>
                                    <p class="mb-8 md:mb-0">First collection of generative art by cardingo</p>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <img class="w-full rounded-b-2xl lg:rounded-bl-none lg:rounded-r-2xl" src="<?php echo e(asset('assets/images/slide5--cardingo-hoskeychains.gif')); ?>" alt="Cardingo to the moon!"
                                    />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

            <!-- Card grid -->
            <div class="flex flex-wrap overflow-hidden sm:-mx-2 lg:-mx-3 some-list-counter-1 items">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:w-1/3 lg:my-3 lg:px-3 lg:w-1/5 transform transition hover:scale-105 duration-300 ease-in-out item">
                    <a href="/view/<?php echo e($wall->id); ?>" class="text-white block">
                        <div class="">
                            <div class="bg-gradient-to-br from-quinary to-senary rounded-2xl">
                                <div class="bg-septenary rounded-t-2xl px-4 py-1">
                                    <span class="uppercase text-xs opacity-50">Project id: <?php echo e($wall->nft_id); ?></span>
                                </div>
                                <div class="relative w-full pt-100p"> 
                                    <div class="fit-image-div">
                                        <img class="w-full h-full object-cover" src="<?php echo e(URL::to('/')); ?>/Uploads/<?php echo e($wall->url); ?>" alt="<?php echo e($wall->name); ?>">
                                    </div> 
                                </div>
                                <div class="p-4">
                                    <span class="block text-lg my-2">project: <?php echo e($wall->assets_name); ?></span>
                                    <span class="block text-lg my-2">collection: 
                                    <?php if($wall->collection_name!=''): ?>
                                    <?php echo e($wall->collection_name); ?>

                                        <?php else: ?> 
                                            Not Provided
                                        <?php endif; ?>    
                                    </span>
                                    <span class="block text-lg my-2">Status: 
                                         <?php if($wall->status=='minted'): ?>
                                            Minted
                                        <?php else: ?> 
                                            Not Minted
                                        <?php endif; ?>
                                    </span>
                                    <span class="block text-lg my-2">artist: <?php echo e($wall->artist_name); ?></span>
                                    <div class="flex flex-wrap flex-row">
                                        <?php if($wall->attr_1): ?>
                                            <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase"><?php echo e($wall->attr_1); ?></span>
                                        <?php endif; ?>
                                        <?php if($wall->attr_2): ?>
                                            <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase"><?php echo e($wall->attr_2); ?></span>
                                        <?php endif; ?>
                                        <?php if($wall->attr_3): ?>
                                            <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase"><?php echo e($wall->attr_3); ?></span>
                                        <?php endif; ?>
                                        <?php if($wall->attr_4): ?>
                                            <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase"><?php echo e($wall->attr_4); ?></span>
                                        <?php endif; ?>
                                        <?php if($wall->attr_5): ?>
                                            <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase"><?php echo e($wall->attr_5); ?></span>
                                        <?php endif; ?>
                                        <?php if($wall->attr_1=='' && $wall->attr_2=='' && $wall->attr_3=='' && $wall->attr_4=='' && $wall->attr_5==''): ?>
                                            <span class="block mr-4 my-3 px-3 py-1 bg-septenary rounded-md text-xs uppercase">No Attribute Provided</span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if($wall->status=='minted'): ?>
                                        <span class="block text-quaternary text-xl uppercase my-7">Sold Out</span>
                                    <?php else: ?> 
                                    <a href="/view/<?php echo e($wall->id); ?>" class="button-grad block w-36 py-3 px-0 my-4 hover:bg-pos-100">
                                        View
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <p class="lead mt-6">Displaying <span class="shownLength font-goldplayBold"></span> of <span class="listLength font-goldplayBold"></span> results</p>
            <div class="flex justify-center mt-12 buttonToogle">
                <button class="button-secondary-outline flex items-center showMore">
                    <svg xmlns="http://www.w3.org/2000/svg " class="h-4 w-4 mr-3 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                        <path stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " d="M19 13l-7 7-7-7m14-8l-7 7-7-7 " />
                    </svg>
                    Load more
                </button>
            </div>
        </div>
    </section>


    <!-- COMPANY INFO -->

    <section class="bg-section3 bg-cover bg-bottom">
        <img src="<?php echo e(asset('assets/images/divider2.png')); ?>" class="w-full">
        <div class="container px-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <div class="flex flex-col w-full md:w-3/5 justify-center text-center md:text-left">
                <h2 class="mb-8 text-5xl font-goldplayBold lowercase">
                    Our Dingos
                </h2>
                <div class="flex flex-wrap -mx-4 overflow-hidden mb-10">
                    <!-- some team members don't have about info yet -->
                    <?php echo $__env->make('includes.team',[
                        'modal' => 'sheila',
                        'image' => 'sarah-manager',
                        'alt' => 'Sheila - Manager',
                        'name' => 'Sheila',
                        'title' => 'Manager'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('includes.team',[
                        'modal' => 'rayzor',
                        'image' => 'rayzor-creative-director',
                        'alt' => 'Rayzor - Creative Director',
                        'name' => 'Rayzor',
                        'title' => 'Creative Director'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                            <img class="w-full rounded-3xl" src="<?php echo e(asset('assets/images/team--tom-advisor.png')); ?>" alt="Tom - Advisor" />
                        </div>
                        <div class="py-3">
                            <span class="block text-xl font-goldplayBold">Tom</span>
                            <span class="block text-quaternary">Advisor</span>
                        </div>
                    </div>
                    <?php echo $__env->make('includes.team',[
                        'modal' => 'ronnie',
                        'image' => 'ronnie-projects',
                        'alt' => 'Ronnie - Community Management',
                        'name' => 'Ronnie',
                        'title' => 'Community Management'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('includes.team',[
                        'modal' => 'taz',
                        'image' => 'taz-nft-consultant',
                        'alt' => 'Taz - Nft Consultant',
                        'name' => 'Taz',
                        'title' => 'Nft Consultant'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('includes.team',[
                        'modal' => 'ca',
                        'image' => 'mark-projects',
                        'alt' => 'CA - Projects',
                        'name' => 'CA',
                        'title' => 'Projects'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                            <img class="w-full rounded-3xl" src="<?php echo e(asset('assets/images/team--bricky-artist.png')); ?>" alt="Bricky - Artist" />
                        </div>
                        <div class="py-3">
                            <span class="block text-xl font-goldplayBold">Bricky</span>
                            <span class="block text-quaternary">Artist</span>
                        </div>
                    </div>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                            <img class="w-full rounded-3xl" src="<?php echo e(asset('assets/images/team--darz-artist.png')); ?>" alt="Darz - Artist" />
                        </div>
                        <div class="py-3">
                            <span class="block text-xl font-goldplayBold">Darz</span>
                            <span class="block text-quaternary">Artist</span>
                        </div>
                    </div>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                            <img class="w-full rounded-3xl" src="<?php echo e(asset('assets/images/team--mari-artist.png')); ?>" alt="Mari - Artist" />
                        </div>
                        <div class="py-3">
                            <span class="block text-xl font-goldplayBold">Mari</span>
                            <span class="block text-quaternary">Artist</span>
                        </div>
                    </div>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                            <img class="w-full rounded-3xl" src="<?php echo e(asset('assets/images/team--eth-dev.png')); ?>" alt="Eth - Dev" />
                        </div>
                        <div class="py-3">
                            <span class="block text-xl font-goldplayBold">Eth</span>
                            <span class="block text-quaternary">Dev</span>
                        </div>
                    </div>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                            <img class="w-full rounded-3xl" src="<?php echo e(asset('assets/images/team--chico-dev.png')); ?>" alt="Chico - Dev" />
                        </div>
                        <div class="py-3">
                            <span class="block text-xl font-goldplayBold">Chico</span>
                            <span class="block text-quaternary">Dev</span>
                        </div>
                    </div>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                            <img class="w-full rounded-3xl" src="<?php echo e(asset('assets/images/team--adam-advisor.png')); ?>" alt="Adam - Advisor" />
                        </div>
                        <div class="py-3">
                            <span class="block text-xl font-goldplayBold">Adam</span>
                            <span class="block text-quaternary">Advisor</span>
                        </div>
                    </div>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                            <img class="w-full rounded-3xl" src="<?php echo e(asset('assets/images/team--faz-research.png')); ?>" alt="Faz - Research" />
                        </div>
                        <div class="py-3">
                            <span class="block text-xl font-goldplayBold">Faz</span>
                            <span class="block text-quaternary">Research</span>
                        </div>
                    </div>
                </div>
                <h2 class="mb-8 text-5xl font-goldplayBold lowercase">
                    Partners
                </h2>
                <div class="flex flex-wrap -mx-4 overflow-hidden mb-10">
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <a href="#" data-modal-trigger aria-controls="partner-modal" aria-expanded="false">
                            <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                                <img class="w-full" src="<?php echo e(asset('assets/images/partners--dingo-sanctuary.png')); ?>" alt="Dingo Discovery Sanctuary and Research Centre" />
                            </div>
                            <div class="py-3">
                            <span class="block text-xl text-white font-goldplayBold mb-3">Dingo Discovery Sanctuary and Research Centre</span>
                                <button class="button-secondary-outline px-4 text-white">Read more</button>
                            </div>
                        </a>
                    </div>
                    <div class="my-4 px-4 overflow-hidden w-1/2 lg:w-1/4 text-center">
                        <a href="#" data-modal-trigger aria-controls="partner-modal" aria-expanded="false">
                            <div class="rounded-3xl w-full lg:h-40 overflow-hidden">
                                <img class="w-full" src="<?php echo e(asset('assets/images/partners--dingo-foundation.png')); ?>" alt="Australian Dingo Foundation" />
                            </div>
                            <div class="py-3">
                                <span class="block text-xl text-white font-goldplayBold mb-3">Australian Dingo Foundation</span>
                                <button class="button-secondary-outline px-4 text-white">Read more</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-2/5 py-6 text-center">
                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_ijm5uqlg.json"  background="transparent"  speed="1"  class="w-full px-12" loop  autoplay></lottie-player>
            </div>
        </div>
        <div class="container px-4 mx-auto mb-20">
            <h2 class="mb-8 text-5xl font-goldplayBold mt-32 text-center md:text-left lowercase">
                Roadmap
            </h2>
            <div class="flex flex-wrap">
                <div class="flex flex-col items-center md:items-start my-4 w-full md:w-1/2 mb-8 md:pr-40">
                    <h3 class="mb-6 text-2xl font-goldplayBold">Q4 2021</h3>
                    <h4 class="mb-3 text-xl text-quaternary">Phase 1</h4>
                    <ul class="list-disc pl-4 opacity-80">
                        <li>Logo & Branding, Character design</li>
                        <li>Website Launch and Marketplace - “buy option only at this time”</li>
                        <li>Cardingo Staking Pool launch with NFT airdrops to delegators</li>
                        <li>5 curated designer NFT collections - computer generative & artist generated</li>
                        <li>Partner with 2 Well Known Australian Artists</li>
                        <li>Partnered with The Australian Dingo Foundation - Donations</li>
                        <li>Merchandise design</li>
                        <li>Social media marketing phase 1</li>
                        <li>Cardingo Smash Club Launch</li>
                        <li>NFT game concept development </li>
                        <li>Tokenomics and Token Launch (TBC)</li>
                    </ul>
                </div>
                <div class="flex flex-col items-center md:items-start my-4 w-full md:w-1/2 mb-8 md:pr-40">
                    <h3 class="mb-6 text-2xl font-goldplayBold">Q1 2022</h3>
                    <h4 class="mb-3 text-xl text-quaternary">Phase 2</h4>
                    <ul class="list-disc pl-4 opacity-80">
                        <li>Include sell option to the marketplace full functional market place</li>
                        <li>Yoroi wallet integration</li>
                        <li> More NFT rewards added to Staking Pool</li>
                        <li>Partnership with 2 remote Australian Indigenous Artists</li>
                        <li>NFT competition</li>
                        <li>5 curated designer NFTs launch</li>
                        <li>Marketing efforts expand</li>
                        <li>NFT Game Launch</li>
                        <li>Cardingo Smash Club NFTs</li>
                        <li>Token listings on Native Cardano Dex</li>
                        <li> Partnerships</li>
                        <li>Dingo Donations Continue</li>
                        <li>Sale of NFTs for Donations</li>
                        <li>Cardingo Shop Opens – Merchandise Sales Begin</li>
                        <li>Other Cardano project Partnerships</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pt-16 flex justify-end lg:bg-ayers-rock relative">
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_8jlviym7.json"  background="transparent"  speed="1" class="cardingos-ayers-rock hidden lg:block"  loop  autoplay></lottie-player>
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_76uynore.json"  background="transparent"  speed="1"  class="w-full lg:hidden"  loop  autoplay></lottie-player>
        </div>
        <div class="pt-16">
            <img src="<?php echo e(asset('assets/images/divider1.svg')); ?>" class="w-screen">
        </div>
    </section>

    <section class="pt-16 bg-section4 bg-cover">
        <div class="container px-4 mx-auto flex flex-col items-center text-center">
            <p class="text-2xl opacity-80 max-w-2xl mb-12">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
            </p>
            <div class="flex flex-row flex-wrap justify-center mb-20">
                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="<?php echo e(asset('assets/images/social--youtube.svg')); ?>" width="40" height="40" alt="Youtube">
                </a>
                <a href="https://discord.gg/envpS3VT" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="<?php echo e(asset('assets/images/social--discord.svg')); ?>" width="40" height="40" alt="Discord">
                </a>
                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="<?php echo e(asset('assets/images/social--instagram.svg')); ?>" width="40" height="40" alt="Instagram">
                </a>
                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="<?php echo e(asset('assets/images/social--github.svg')); ?>" width="40" height="40" alt="Github">
                </a>
                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="<?php echo e(asset('assets/images/social--reddit.svg')); ?>" width="40" height="40" alt="Reddit">
                </a>
                <a href="https://t.me/joinchat/YNmt7ziQxkkxYmU9" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="<?php echo e(asset('assets/images/social--telegram.svg')); ?>" width="40" height="40" alt="Telegram">
                </a>
                <a href="" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="<?php echo e(asset('assets/images/social--medium.svg')); ?>" width="40" height="40" alt="Medium">
                </a>
                <a href="https://twitter.com/cardingo_io" target="_blank" class="mx-3 mb-4 transform transition hover:scale-150 duration-300 ease-in-out">
                    <img src="<?php echo e(asset('assets/images/social--twitter.svg')); ?>" width="40" height="40" alt="Twitter">
                </a>
            </div>
            <p class="opacity-80 max-w-2xl mb-12">
                &#169; Copyright Cardingo Ltd. 2021 All Rights Reserved. Cardingo is the world’s first native NFT / meme token launched on Cardano smart contracts. We are not financial advisors - all investing carries a risk so, always perform your due diligence and
                invest wisely.
                <br /><br /> Made with dingos &#9829; in the OUTBACK<br /> Copyright &#169; 2021 | cardingo.io<br />
            </p>
            <img class="px-12 w-full max-w-4xl" src="<?php echo e(asset('assets/images/cardingos--crochunt.png')); ?>" alt="Cardingo croc hunt"  style="object-fit: contain;;" />
        </div>
        <div class="bg-senary">
            <img src="<?php echo e(asset('assets/images/divider2.png')); ?>" class="w-full">
        </div>
    </section>

    <?php echo $__env->make('includes.modal',[
        'name' => 'sheila',
        'title' => 'Sheila - Manager',
        'about' => 'Sheila is a professional writer in the cryptocurrency industry and is Emurgo Foundations of Blockchain Certified. She manages Cardingo Communications and content updates to help keep investors informed.'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.modal',[
        'name' => 'rayzor',
        'title' => 'Rayzor - Creative Director',
        'about' => 'Rayzor is the mind behind Cardingo. A professional artist, he developed the project from the ground up to offer Cardano Fans worldwide curated designer NFTs.'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.modal',[
        'name' => 'ronnie',
        'title' => 'Ronnie - Community Management',
        'about' => 'Ronnie has experience as a community moderator for Cardano based projects and providing copy and communications for a variety of token launches. He now runs the Cardingo community communications and social media channels.'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.modal',[
        'name' => 'taz',
        'title' => 'Taz - Nft Consultant',
        'about' => 'Taz is a professional NFT caricature artist and is Emurgo Foundations of Blockchain Certified. He provides consulting on the marketing and promotions of Cardingo NFTs.'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.modal',[
        'name' => 'ca',
        'title' => 'CA - Projects',
        'about' => 'CA has been in emerging technologies as well as Crypto and blockchain since 2015 and serves as the Cardingo Projects Manager.'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <?php echo $__env->make('includes.modal',[
        'name' => 'full-story',
        'title' => 'Full Story',
        'about' => '
            <p class="mb-6">"Those who stop dreaming are lost" - Australian Aboriginal Proverb/Cardingo is a Native non-fungible token (NFT) marketplace built on the Cardano blockchain offering a Curated Designer NFT platform that connects talented artists with Cardano fans worldwide. The Cardingo designer CNFT collections consist of Artist Generated and Computer Generated NFTs with options to buy directly from the Cardingo marketplace. Our genesis series which consists of 6 collections have been dedicated to Cardano founder Charles Hoskinson.</p>
            <p>Cardingo’s Charles Hoskinson collections are created to show our support for Charles and his achievements and vision, not only for the Cardano community but on a global scale. These collections will be the first of its kind and Cardingo will not mint another Charles Hoskinson series ever again. These collections will become rare CNFT’s and, over time, become desired collectors items.</p>
        '
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.modal',[
        'name' => 'nft-marketplace',
        'title' => 'NFT marketplace',
        'about' => '
            <p class="mb-6">
                Crikey, What a Little Bewdy!
            </p>
            <p class="mb-6">
                Cardingo aims to expand the NFT landscape  for both artists and collectors by offering our simple NFT marketplace that harnesses the power of Cardano while offering utility and value. Through unique offerings Cardingo will connect Cardano fans worldwide to create an unstoppable pack and a beautiful gallery showcasing talented artists on the Cardano blockchain.
            </p>
            <p class="mb-6">
                <em>“On Cardingo, Collectors Don’t Buy What they Get, They buy What they Want.”</em>
            </p>
            <p class="mb-6">
                The first exclusive offer will be Cardingo Hoskinson NFT collections. Cardingo has developed several collections of Hoskinson series NFTs, both artist generated and computer generated. The collections are Hoskeychains, Smokeyhoskeys, Hoskeymates, Hoskeymation, Hoskeywords and HoskeyHuskell.
            </p>
            <p class="mb-6">
                In addition Cardingo has established its professional brand withs its dingo moscots Wandi and Moko, who are beautifully illustrated characters that support and defend the Cardano ecosystem.
            </p>
            <p class="mb-6">
                Cardingo will support selected artists, including traditional aboriginal artists, to mint NFTs on the Cardingo platform.
            </p>
            <p class="mb-6">
                Some features of the current Cardingo Platform are:
            </p>
            <ul class="list-disc ml-6 mb-8">
                <li>Wallet connect and buy option directly within the platform</li>
                <li>A mix of Computer generated and artists generated NFTS</li>
                <li>Exclusive Full Access marketplace for selected artists</li>
            </ul>
            <p class="mb-10">
                By only allowing selected artists, and never forcing investors to race to buy, Cardingo aims to create a gallery on Cardano that is curated, different, and not in competition with the many other well-loved CNFT platforms.
            </p>
            <h3 class="font-goldplayBold mb-6">ABORIGINAL ART</h3>
            <p class="mb-10">
                With Australia as the home base of Cardingo, the platform will feature several Aboriginal artists and pieces. Aboriginal art dates back 40-60k years ago and because of the lack of a written language, their stories were passed down through symbols and artwork. Aboriginal Art reflects the earliest period of this ancient culture; it has both artistic and anthropological merit. This is one of the reasons it is so valued and contemporary Aboriginal art is often the only source of income for some rural communities.
            </p>
            <p class="mb-10">
                <em>“Cardingo is a Curated Designer Cardano NFT Gallery”</em>
            </p>     
        '
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.modal',[
        'name' => 'partner',
        'title' => 'Dingo Foundation',
        'about' => '
            <p class="mb-6">
                While Cardingo is not Charity Token, Cardingo will make transparent and verifiable donations to specific registered charitable organizations that work to preserve the Dingo. We are proud to announce that we have partnered with the <a href="https://dingofoundation.org/" class="white" target="_blank">Australian Dingo Foundation</a> and will be providing them with donations as well as cross marketing opportunities. The foundation runs the Dingo Discovery Sanctuary and Research Centre.  
            </p>
            <p class="mb-6">
                <em>“The Australian Dingo Foundation</em> is a team of dedicated volunteers who undertake various tasks to ensure the wellbeing and high quality of care for the resident animals, as well as an array of ancillary tasks such as veterinary, legal and investment advice, molecular laboratory work, recreational training, fundraising, school education visits, and attendance at public and community events.”
            </p>
                The dingo is an ancient lineage of dog found in Australia and one of the most revered animals in aboriginal mythology. The Aboriginals believed the dingoes live both in the physical and mystical realms and can perceive evil spirits undetectable by man. Dingoes could never be fully tamed, but as apex predators with high intelligence, Aboriginals used dingoes to protect their homes and children and considered them equal to man. While over the years dingoes have been hunted and people have attempted to eradicate them, the world is slowly learning they are vital to the Australian ecosystem.
            </p>   
        '
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Swiper JS -->
    <script src="<?php echo e(asset('assets/js/swiper-bundle.min.js')); ?>"></script>

    <!-- Modal -->
    <script src="<?php echo e(asset('assets/js/modal.min.js')); ?>"></script>

    <!-- Lottie for animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
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
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/cardingo.io/public_html/resources/views/pages/home.blade.php ENDPATH**/ ?>