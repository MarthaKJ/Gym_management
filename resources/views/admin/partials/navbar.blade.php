<div class="fixed z-10 px-3  bg-white navbar lg:px-6 dark:bg-card-dark" style="width:calc(100vw - 250px)">
    <div class="flex-center-between">
        <div class="gap-1 flex-align-center md:gap-3">
            <a href="/" class="p-2 lg:hidden flex-shrink-0 !opacity-100">
                <h1 class="text-3xl font-bold text-primary">LG</h1>
            </a>
            <div class="icon-box lg:hidden open-icon">
                <i class="feather-menu"></i>
            </div>
        </div>

        <div class="flex-align-center gap-x-3 md:gap-x-1">
            {{-- {/* ---------------------------------Theme toggle------------------------------ */} --}}
            <div class="icon-box bg-slate-100 dark:bg-[#2b2b35] toggle-icon">

            </div>
            <div class="w-[1px] h-6 bg-slate-200 dark:bg-slate-700"></div>

            {{-- {/*------------------------------- Profile Dropdown toggle--------------------------------------------
            */} --}}
            <div class="relative flex-shrink-0 space-x-1 flex-align-center md:pl-4 profile sm:cursor-pointer py-2">

                <img src="{{ asset('images/avatar.png') }}" alt="" class="w-8 h-8 rounded-full" />
                <span>Admin</span>
                <i class="feather-chevron-down"></i>
                {{-- Dropdown --}}
                <div class="absolute right-0 top-full p-2 !rounded-xl w-52 card card-shadow dark:shadow-none dropdown">
                    <a href="{{ route('home') }}"
                        class="!opacity-100 p-2 space-x-3 rounded-lg flex-align-center sm:cursor-pointer hover:bg-slate-100 dark:hover:bg-hover-color-dark">
                        <i class="feather-globe text-muted"></i>
                        <span class="text-muted">Website</span>
                    </a>
                    <a href="{{ route('profile.edit') }}"
                        class="!opacity-100 p-2 space-x-3 rounded-lg flex-align-center sm:cursor-pointer hover:bg-slate-100 dark:hover:bg-hover-color-dark">
                        <i class="feather-user text-muted"></i>
                        <span class="text-muted">My Profile</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="!opacity-100 p-2 space-x-3 rounded-lg flex-align-center sm:cursor-pointer hover:bg-slate-100 dark:hover:bg-hover-color-dark">
                            <i class="feather-log-out"></i>
                            <span class="text-muted">Sign out</span>
                        </a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>