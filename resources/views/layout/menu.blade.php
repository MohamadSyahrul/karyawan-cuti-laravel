{{-- <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true"> --}}
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                    {{-- <div class="brand-logo"></div> --}}
                    <h2 class="brand-text mb-0">MCeasy</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{  request()->is('/') ? 'active' : '' }}"><a href="{{url('/')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span>Apps</span>
            </li>
            <li class="nav-item {{  request()->routeIs('karyawan.*') ? 'active' : '' }}">
                <a href="{{route('karyawan.index')}}"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Karyawan">Karyawan</span></a>
            </li>

            <li class="nav-item {{  request()->is('karyawan-lama') ? 'active' : '' }}">
                <a href="{{url('karyawan-lama')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Karyawan">Karyawan Lama</span></a>
            </li>


            <li class=" nav-item {{  request()->routeIs('cuti.*') ? 'active' : '' }}">
                <a href="{{route('cuti.index')}}"><i class="feather icon-user-minus"></i><span class="menu-title" data-i18n="Card">Daftar Cuti</span></a>
            </li>
            <li class=" nav-item {{  request()->Is('daftar-karyawan-cuti') ? 'active' : '' }}">
                <a href="{{url('daftar-karyawan-cuti')}}"><i class="feather icon-check-circle"></i><span class="menu-title" data-i18n="Card">Karyawan Cuti</span></a>
            </li>

            
            <li class=" nav-item {{  request()->Is('karyawan-cuti-lebih-dari-satu') ? 'active' : '' }}">
                <a href="{{url('karyawan-cuti-lebih-dari-satu')}}"><i class="feather icon-clipboard"></i><span class="menu-title" data-i18n="Card">Karyawan Cuti lebih dari</span></a>
            </li>

            <li class=" nav-item {{  request()->Is('sisa-cuti') ? 'active' : '' }}">
                <a href="{{url('sisa-cuti')}}"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="Card">Sisa Cuti</span></a>
            </li>
           
        </ul>
    </div>
    