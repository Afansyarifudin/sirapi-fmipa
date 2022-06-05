<div class="header">
    <div class="logo logo-dark d-flex align-items-center justify-content-center">
        <a href="/home">
            <img alt="" src="{{ url('assets/images/logo2.png ') }}" height="50px">
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">

            <li class="desktop-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">

            @guest
                {{-- content --}}

            @else
                <li>
                    <h6 class="mt-2 mx-3 font-weight-semibold">
                        {{ Auth::user()->name }}
                    </h6>
                </li>
                <li class="dropdown dropdown-animated scale-left">
                    <div class="pointer" data-toggle="dropdown">
                        <div class="avatar avatar-icon  m-h-10 m-r-15">
                            <img alt="" src="{{ url('assets/images/avatar.png ') }}">
                        </div>
                    </div>
                    <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                        <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                            <div class="d-flex m-r-50">
                                <div class="avatar avatar-lg avatar-image">
                                    <img alt="" src="{{ url('assets/images/avatar.png ') }}">
                                </div>
                                <div class="m-l-10">
                                    <h5 class="m-b-2 text-dark font-weight-semibold">
                                        {{ Auth::user()->name }}
                                    </h5>
                                    {{-- <p class="m-b-0 opacity-07">UI/UX Desinger</p> --}}
                                </div>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item d-block p-h-15 p-v-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                    <span class="m-l-10">Profile</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-block p-h-15 p-v-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                    <span class="m-l-10">Pengaturan</span>
                                </div>
                            </div>
                        </a>
                        <a href=" {{ route('logout') }}" class="dropdown-item d-block p-h-15 p-v-10" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                    <span class="m-l-10">Logout</span>
                                </div>
                            </div>
                        </a>
                        <form id="logout-form" action=" {{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>
