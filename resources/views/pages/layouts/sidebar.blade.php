<div class="dashboard-left-menu">
    <div class="logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/images/white-logo.svg') }}">
        </a>
    </div>
    <div class="dashboard-menu">
        <ul class="mainmenu">
            <li class="{{ request()->is('dashboard*') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/home.png') }}"> Home</a>
            </li>
            <li
                class="{{ request()->is('all-clients*') || request()->is('clients-upcoming-trips*') || request()->is('clients-calendar*') || request()->is('client-detail-view*') ? 'active' : '' }}">
                <a href="#"><img src="{{ asset('assets/images/Clients.png') }}"> Clients</a>
                <ul>
                    <li class="{{ request()->is('all-clients*') ? 'active' : '' }}">
                        <a href="{{ route('allClient') }}">All clients</a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('to-do*') ? 'active' : '' }}">
                <a href="{{ route('toDO') }}"><img src="{{ asset('assets/images/To-do.png') }}"> To-do</a>
            </li>
            <li class="{{ request()->is('agents*') ? 'active' : '' }}">
                <a href="{{ route('agents') }}"><img src="{{ asset('assets/images/Agents.png') }}"> Agents</a>
            </li>
            @if(Auth::check() && auth()->user()->role_id == App\ModelsExtended\Role::Super_Admin)
            <li class="{{ request()->is('partners*') ? 'active' : '' }}">
                <a href="{{ route('partners') }}"><img src="{{ asset('assets/images/Partners.png') }}"> Partners</a>
            </li>
            <li class="{{ request()->is('inquires*') ? 'active' : '' }}">
                <a href="{{ route('inquires') }}"><img src="{{ asset('assets/images/Partners.png') }}"> Inquires</a>
            </li>
            <li class="{{ request()->is('company-communications*') ? 'active' : '' }}">
                <a href="{{ route('companyCommunications') }}"><img src="{{ asset('assets/images/Partners.png') }}"> Company Communications</a>
            </li>
            <li class="{{ request()->is('faqs*') ? 'active' : '' }}">
                <a href="{{ route('faqs') }}"><img src="{{ asset('assets/images/Partners.png') }}"> FAQs</a>
            </li>
            @endif
            <li class="{{ request()->is('settings*') ? 'active' : '' }}">
                <a href="{{ route('settings') }}"><img src="{{ asset('assets/images/Settings.png') }}">
                    Settings</a>
            </li>
        </ul>
    </div>
    <div class="dashboard-menu-sidebar">
        <div class="inner d-flex flex-wrap">
            <div class="image">
                <!-- <img src="{{ asset('assets/images/clients-2.png') }}"> -->
                @if(Auth::check() && auth()->user()->image_url)
                <img src="{{auth()->user()->image_url}}">
                @else
                <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
                @endif
            </div>
            <div class="content white">
                <h3>{{auth()->user() ? auth()->user()->name : 'User Name'}} </h3>
                <a class="text-ellipsis"
                    title="{{auth()->user() ? textTruncate(auth()->user()->email,25) : 'User@gmail'}}"
                    href="javascript:void(0)">{{auth()->user() ? textTruncate(auth()->user()->email,20) : 'User@gmail'}}</a>
            </div>
        </div>
        <div class="dashboard-logout" style="display: none;">
            <ul>
                <li>
                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-question-circle-fill"></i> Help</a>
                </li>
            </ul>
        </div>
    </div>
</div>