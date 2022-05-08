
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown">
                <a href="{{ route('home') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dahsboard</span>
                </a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-file-done"></i>
                    </span>
                    <span class="title">Publikasi</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="">Penelitian Dosen</a>
                    </li>
                    <li>
                        <a href="">SK Kenaikan Pangkat</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-mail"></i>
                    </span>
                    <span class="title">Surat</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="">Surat Masuk</a>
                    </li>
                    <li>
                        <a href="">Surat Keluar</a>
                    </li>
                </ul>
            </li> --}}
            {{-- Sidebar Role Dosen --}}
            @role('dosen')
            <li class="nav-item dropdown">
                <a href="">
                    <span class="icon-holder">
                        <i class="anticon anticon-solution"></i>
                    </span>
                    <span class="title" >Data Arsip</span>
                </a>
            </li>
            @endrole()
            {{-- Sidebar Role Operator--}}
            @role('operator')
            <li class="nav-item dropdown">
                <a href="">
                    <span class="icon-holder">
                        <i class="anticon anticon-solution"></i>
                    </span>
                    <span class="title" >Manajemen Arsip</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="">
                    <span class="icon-holder">
                        <i class="anticon anticon-solution"></i>
                    </span>
                    <span class="title" >Kategori</span>
                </a>
            </li>
            @endrole()
            {{-- sidebar role admin --}}
            @role('admin')
            <li class="nav-item dropdown">
                <a href="">
                    <span class="icon-holder">
                        <i class="anticon anticon-solution"></i>
                    </span>
                    <span class="title" >Manajemen User</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="">
                    <span class="icon-holder">
                        <i class="anticon anticon-solution"></i>
                    </span>
                    <span class="title" >Role</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="">
                    <span class="icon-holder">
                        <i class="anticon anticon-solution"></i>
                    </span>
                    <span class="title" >Permission</span>
                </a>
            </li>
            @endrole()
            {{-- role yang bisa di akses semua user --}}
            <li class="nav-item dropdown">
                <a href="#">
                    <span class="icon-holder">
                        <i class="anticon anticon-setting"></i>
                    </span>
                    <span class="title" >Pengaturan</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <span class="icon-holder">
                        <i class="anticon anticon-setting"></i>
                    </span>
                    <span class="title" >Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
