<div class="p-0 m-0 col-xl-2 w-100 col-md-3 col-sm-2" style="z-index: 100;">
    <ul class="position-fixed navbar-nav bg-gradient-primary sidebar sidebar-dark accordion d-flex flex-column justify-content-between"
        id="accordionSidebar">

        <div class="">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="mx-3 sidebar-brand-text">IoT Panel<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="my-0 sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Saklar -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-toggle-off"></i>
                    <span>Saklar</span></a>
            </li>
            <!-- Nav Item - Device -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-mobile"></i>
                    <span class="ml-2">Device</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
            </li>
        </div>

        <div class="px-3 mb-5">
            <a href=""
                class="btn btn-outline-light w-100 d-sm-none d-xl-block d-md-block">Dokumentasi</a>
            <a href="" class="btn btn-outline-light w-100 d-lg-none d-md-none"><i class="fas fa-book-open"
                    style="color: white;"></i></a>
        </div>

    </ul>
</div>
