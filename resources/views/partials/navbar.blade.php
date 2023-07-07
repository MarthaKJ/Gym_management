<header>
    <div
        class="hidden md:flex-center-between py-1 text-sm bg-primary text-slate-200 border-slate-600 px-[4%] md:px-[6%]">
        <div class="flex-align-center gap-x-3">
            <p class="capitalize">
                laragym@gym.co.ug
            </p>
            <p>hotline (+256) 775 358738</p>
        </div>
        <div class="gap-2 left-nav flex-align-center">
            <div class="icon-box bg-slate-200 text-slate-600 hover:bg-slate-300">
                <i class="feather-facebook"></i>
            </div>
            <div class="icon-box bg-slate-200 text-slate-600 hover:bg-slate-300">
                <i class="feather-instagram"></i>
            </div>
            <div class="icon-box bg-slate-200 text-slate-600 hover:bg-slate-300">
                <i class="feather-twitter"></i>
            </div>
            <div class="icon-box bg-slate-200 text-slate-600 hover:bg-slate-300">
                <i class="ri-pinterest-line"></i>
            </div>
        </div>

    </div>

    <div class="max-w-7xl py-2 px-4 bg-card-dark/80 flex-center-between mx-auto relative">
        <a href="/">
            <h1><span class="text-4xl md:text-5xl font-bold">Lara<span class="text-primary">Gym</span></span> &trade;
            </h1>
        </a>

        {{-- Navbar desktop --}}
        <div class="gap-x-4 md:gap-x-8 nav-menu hidden md:flex-align-center">
            <a href="#" class="uppercase active">home</a>
            <a href="#about" class="uppercase">about</a>
            <a href="#services" class="uppercase">services</a>
            <a href="#pricing" class="uppercase">pricing</a>
            <a href="#contact" class="uppercase">contact</a>
        </div>


        {{-- Navbar desktop --}}
        <div
            class="mobile-nav h-0 overflow-hidden  nav-menu md:hidden absolute top-full left-0 bg-card-dark/80 w-full transition-a">
            <div class="gap-y-8 flex flex-col p-4">
                <a href="#" class="uppercase active">home</a>
                <a href="#about" class="uppercase">about</a>
                <a href="#services" class="uppercase">services</a>
                <a href="#pricing" class="uppercase">pricing</a>
                <a href="#contact" class="uppercase">contact</a>
            </div>
        </div>

        {{-- Right Nav --}}

        <div class="flex-align-center gap-x-3">
            @guest
            <div class="flex-align-center gap-x-3">
                <a href="/login" class="uppercase btn btn-primary">login</a>
                <a href="/register" class="uppercase btn border-primary text-primary shadow shadow-primary">register</a>
            </div>
            @endguest

            @auth
            <div class="relative flex-shrink-0 space-x-1 flex-align-center md:pl-4 profile sm:cursor-pointer py-2">

                <img src="{{ asset('images/avatar.png') }}" alt="" class="w-8 h-8 rounded-full" />
                <span>{{auth()->user()->name}}</span>
                <i class="feather-chevron-down"></i>
                {{-- Dropdown --}}
                <div
                    class="absolute right-0 top-full p-2 !rounded-xl w-52 card !bg-card-dark !border-dark !shadow-none dropdown">
                    @if (auth()->user()->isAdmin == 1)
                    <a href="{{ route('dashboard.index') }}"
                        class="!opacity-100 p-2 space-x-3 rounded-lg flex-align-center sm:cursor-pointer  hover:bg-hover-color-dark">
                        <i class="feather-grid text-muted"></i>
                        <span class="text-muted">Dashboard</span>
                    </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="!opacity-100 p-2 space-x-3 rounded-lg flex-align-center sm:cursor-pointer  hover:bg-hover-color-dark">
                            <i class="feather-log-out"></i>
                            <span class="text-muted">Sign out</span>
                        </a>

                    </form>

                </div>
            </div>
            @endauth

            <div class="md:hidden toggle-icon">
                <div class="icon-box bg-dark-light hover:bg-card-dark">
                    <i class="feather-menu"></i>
                </div>
            </div>
        </div>
    </div>
</header>