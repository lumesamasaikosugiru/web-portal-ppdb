@php
    $menus = [
        (object) [
            "title" => "Dashboard",
            "path" => "/",
            "icon" => "nav-icon fas fa-th",
        ],
        (object) [
            "title" => "Biodata",
            "path" => "biodata",
            "icon" => "nav-icon fas fa-file",
        ],
        (object) [
            "title" => "Berkas",
            "path" => "document",
            "icon" => "nav-icon fas fa-copy",
        ],
        (object) [
            "title" => "Pendaftaran",
            "path" => "registration",
            "icon" => "nav-icon fas fa-book",
        ],

    ];
@endphp
<aside class="main-sidebar sidebar-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('imgs/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-2"
            style="opacity: 1">
        <span class="brand-text font-weight-bold rounded shadow-sm "><b>PPDB WEB APP</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('templates/dist/img/user8-128x128.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                {{-- <a href="#" class="d-block">{{auth()->user()->name}}</a> --}}
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a href="{{ $menu->path[0] !== '/' ? '/' . $menu->path : $menu->path }}"
                            class="nav-link {{ request()->path() === $menu->path ? 'active' : '' }}">
                            <i class="nav-icon {{ $menu->icon }}"></i>
                            <p>
                                {{ $menu->title }}
                            </p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>
<!-- /.sidebar -->