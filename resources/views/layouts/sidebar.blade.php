@php
    $menus = [
        (object) [
            'title' => 'Dashboard',
            'path' => '',
            'icon' => 'fas fa-fw fa-tachometer-alt'
        ],
        (object) [
            'title' => 'Karyawan',
            'path' => 'employee',
            'icon' => 'fas fa-fw fa-id-card'
        ],
        (object) [
            'title' => 'Jabatan',
            'path' => 'position',
            'icon' => 'fas fa-fw fa-id-badge'
        ],
        (object) [
            'title' => 'Divisi',
            'path' => 'division',
            'icon' => 'fas fa-fw fa-industry'
        ],
        (object) [
            'title' => 'Penggajian',
            'path' => 'payroll',
            'icon' => 'fas fa-fw fa-money-check-alt'
        ]
    ];
@endphp
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Payroll</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @foreach ($menus as $menu)
        <li class="nav-item {{ $menu->path == '' 
            ? (request()->is('/') ? 'active' : '') 
            : (request()->is($menu->path.'*') ? 'active' : '') }}">
            <a class="nav-link" href="/{{ $menu->path }}">
                <i class="{{ $menu->icon }}"></i>
                <span>{{ $menu->title }}</span></a>
        </li>
    @endforeach

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->