<div class="header">
    <div class="logo logo-dark d-flex align-items-center justify-content-center">
        <img alt="" src="{{ url('assets/images/e-arsip2.png ') }}" height="50px">
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
                <li class="dropdown dropdown-animated scale-left">
                    <div class="pointer" data-toggle="dropdown">
                        <div class="avatar avatar-icon  m-h-10 m-r-15">
                            <i class="anticon anticon-user"></i>

                        </div>
                    </div>
                    <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                        <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                            <div class="d-flex m-r-50">
                                <div class="avatar avatar-lg avatar-image">
                                    <img src="" alt="">
                                </div>
                                <div class="m-l-10">
                                    <h5 class="m-b-2 text-dark font-weight-semibold">
                                        {{ Auth::user()->name }}
                                    </h5>
                                    {{-- <p class="m-b-0 opacity-07">UI/UX Desinger</p> --}}
                                </div>
                            </div>
                        </div>
                        <a href="" class="dropdown-item d-block p-h-15 p-v-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                    <span class="m-l-10">Setting</span>
                                </div>
                                <i class="anticon font-size-10 anticon-right"></i>
                            </div>
                        </a>
                        <a href=" {{ route('logout') }}" class="dropdown-item d-block p-h-15 p-v-10" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                    <span class="m-l-10">Logout</span>
                                </div>
                                <i class="anticon font-size-10 anticon-right"></i>
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
