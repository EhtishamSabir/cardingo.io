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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 closed-icon" fill="none" viewBox="0 0 24 24" stroke="#ffffff">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <ul class="menu font-goldplayBlack">
                        @if(!isset(Auth::user()->email))
                        
                        <li class="menu-item"><a href="#">Token <span class="font-goldplayRegular">(coming soon)</span></a></li>
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
                                <li class="menu-item"><a href="https://t.me/joinchat/YNmt7ziQxkkxYmU9" target="_blank">Telegram</a></li>
                                <li class="menu-item"><a href="https://twitter.com/cardingo_io" target="_blank">Twitter</a></li>
                                <li class="menu-item"><a href="https://discord.gg/envpS3VT" target="_blank">Discord</a></li>
                                <li class="menu-item"><a href="#">Medium</a></li>
                                <li class="menu-item"><a href="#">Reddit</a></li>
                                <li class="menu-item"><a href="#">Github</a></li>
                            </ul>
                        </li>                
                        <li class="menu-item"><a href="/signin">Login</a></li>
                        <li class="menu-item" style="margin-right: 0;">
                            <a href="/signup" style="color: white;" class="button-grad block text-center mx-3 lg:mx-0 color-white  mt-4 lg:mt-0 py-3 px-10 hover:bg-pos-100">
                                Sign up
                            </a>
                        </li>
                        @endif
                        @if(isset(Auth::user()->email))
                        <li class="menu-item">
                            <a class="nav-link {{ (request()->is('/')) ? 'current' : '' }}" href="/">Home</a>
                        </li>
                        @endif
                        @auth
                        @if(isset(Auth::user()->email) && Auth::user()->email=='admin@admin.com')
                        <li class="menu-item">
                            <a class="nav-link {{ (request()->is('dashboard')) ? 'current' : '' }}" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="menu-item">
                            <a class="nav-link {{ (request()->is('all-images')) ? 'current' : '' }}" href="/all-images">All Images</a>
                        </li>
                        <li class="menu-item">
                            <a class="nav-link {{ (request()->is('payments')) ? 'current' : '' }}" href="/payments">Payments</a>
                        </li>
                        @else
                        <li class="menu-item">
                            <a class="nav-link {{ (request()->is('profile')) ? 'current' : '' }}" href="/profile">Dashboard</a>
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