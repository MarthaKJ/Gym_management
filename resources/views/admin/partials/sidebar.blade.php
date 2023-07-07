<div
    class='modal fixed top-0 left-0 z-20 w-full h-full opacity-0 pointer-events-none bg-black/50 lg:static lg:opacity-100 lg:pointer-events-auto lg:bg-transparent transition-opacity duration-300'>
    <div
        class="dialog absolute left-0 px-2 top-0 max-w-[250px] lg:overflow-hidden overflow-auto lg:hover:overflow-auto w-full h-full bg-white dark:bg-card-dark -translate-x-[500px] lg:fixed lg:translate-x-0 lg:border-r dark:border-dark transition-transform duration-300">
        <div class="pt-3 pb-2 border-b flex-center-between dark:border-dark lg:hidden">
            <p class="uppercase">menu</p>
            <div class="icon-box lg:hidden close-icon">
                <i class="feather-x"></i>
            </div>
        </div>
        {{-- Logo --}}
        <a href="/" class="p-2 hidden lg:block !opacity-100 logo">
            <h1 class="text-primary text-3xl font-bold">
                LaraGym
            </h1>
        </a>
        <div class="mt-5">
            <ul>
                <li>
                    <a href="{{ route('dashboard.index') }}"
                        class="px-2 py-2 mb-3 flex-align-center gap-x-3 {{request()->is('/admin') ? 'active' : ''}}">
                        <i class="feather-grid"></i>
                        <span>Dashboard</span>

                    </a>
                </li>

                <li class="dropdown-link">
                    <a href="#"
                        class="px-2 py-2 my-2 flex-center-between  {{request()->is('/admin/members') ? 'active' : ''}}">
                        <div class="flex-align-center gap-x-3">
                            <i class="feather-users"></i>
                            <span>Member</span>
                        </div>
                        <i class="feather-chevron-down"></i>
                    </a>
                    <ul class="sub-menu pl-10">
                        <li class="active">
                            <a href="{{ route('members.index') }}">All members</a>
                        </li>
                        <li>
                            <a href="{{ route('members.create') }}">New members</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown-link">
                    <a href="#"
                        class="px-2 py-2 my-2 flex-center-between  {{request()->is('/admin/staff') ? 'active' : ''}}">
                        <div class="flex-align-center gap-x-3">
                            <i class="ri-file-user-line"></i>
                            <span>Staff</span>
                        </div>
                        <i class="feather-chevron-down"></i>
                    </a>
                    <ul class="sub-menu pl-10">
                        <li class="active">
                            <a href="{{ route('staff.index') }}">All staff</a>
                        </li>
                        <li>
                            <a href="{{ route('staff.create') }}">New staff</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown-link">
                    <a href="#"
                        class="px-2 py-2 my-2 flex-center-between  {{request()->is('/admin/plans') ? 'active' : ''}}">
                        <div class="flex-align-center gap-x-3">
                            <i class="feather-layers"></i>
                            <span>Plans</span>
                        </div>
                        <i class="feather-chevron-down"></i>
                    </a>
                    <ul class="sub-menu pl-10">
                        <li class="active">
                            <a href="{{ route('plans.index') }}">All plans</a>
                        </li>
                        <li>
                            <a href="{{ route('plans.create') }}">New plan</a>
                        </li>
                        <li>
                            <a href="{{ route('services.index') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('services.create') }}">New service</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown-link">
                    <a href="#"
                        class="px-2 py-2 my-2 flex-center-between  {{request()->is('/admin/subscriptions') ? 'active' : ''}}">
                        <div class="flex-align-center gap-x-3">
                            <i class="ri-price-tag-2-line"></i>
                            <span>Subscriptions</span>
                        </div>
                        <i class="feather-chevron-down"></i>
                    </a>
                    <ul class="sub-menu pl-10">
                        <li class="active">
                            <a href="{{ route('subscriptions.index') }}">All subscriptions</a>
                        </li>
                        <li>
                            <a href="{{ route('subscriptions.create') }}">New subscription</a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown-link">
                    <a href="#"
                        class="px-2 py-2 my-2 flex-center-between  {{request()->is('/admin/expenses') ? 'active' : ''}}">
                        <div class="flex-align-center gap-x-3">
                            <i class="feather-dollar-sign"></i>
                            <span>Expenses</span>
                        </div>
                        <i class="feather-chevron-down"></i>
                    </a>
                    <ul class="sub-menu pl-10">
                        <li class="active">
                            <a href="{{ route('expenses.index') }}">All expenses</a>
                        </li>
                        <li>
                            <a href="{{ route('expenses.create') }}">New expense</a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}">All categories</a>
                        </li>
                        <li>
                            <a href="{{ route('categories.create') }}">New category</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('users.index') }}"
                        class="px-2 py-2 my-2 flex-align-center gap-x-3 {{request()->is('/admin/users') ? 'active' : ''}}">
                        <i class="feather-users"></i>
                        <span>Users</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="{{ route('settings.index') }}"
                        class="px-2 py-2 my-3 flex-align-center gap-x-3 {{request()->is('/admin/settings') ? 'active' : ''}}">
                        <i class="feather-settings"></i>
                        <span>Settings</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>