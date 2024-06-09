<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GreenHouse-IoT</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset("assets/images/logos/favicon.png") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/styles.min.css") }}" />
  <link rel="stylesheet" href="http://datapanel.fikrimubarok5.web.id/GreenHouse-IoT/public/assets/css/styles.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
            <h1 class="card-title fw-semibold">-</h1>
          </a>
          <div class="cursor-pointer close-btn d-xl-none d-block sidebartoggler" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
            </li>
            <li>
                <span class="sidebar-divider lg"></span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                <iconify-icon icon="solar:planet-3-line-duotone"></iconify-icon>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li>
                <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                <span class="hide-menu">Device</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('device') }}" aria-expanded="false">
                <iconify-icon icon="solar:widget-add-line-duotone"></iconify-icon>
                <span class="hide-menu">Sensor</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('saklar') }}" aria-expanded="false">
                <iconify-icon icon="solar:layers-minimalistic-bold-duotone"></iconify-icon>
                <span class="hide-menu">Sensor</span>
              </a>
            </li>
            {{-- <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('jenis') }}" aria-expanded="false">
                <iconify-icon icon="solar:layers-minimalistic-bold-duotone"></iconify-icon>
                <span class="hide-menu">Jenis Sensor</span>
              </a>
            </li> --}}
            <li>
              <span class="sidebar-divider lg"></span>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('pages.index') }}" aria-expanded="false">
                <iconify-icon icon="solar:user-line-duotone"></iconify-icon>
                <span class="hide-menu">User</span>
              </a>
            </li>
            <li>
              <span class="sidebar-divider lg"></span>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="javascript:void(0)">
                <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="px-0 navbar-collapse justify-content-end" id="navbarNav">
            <ul class="flex-row navbar-nav ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ route('profile.edit') }}" class="gap-2 d-flex align-items-center dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="mx-3 mt-2 btn btn-outline-primary d-block">Logout</button>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      @yield('content')
    </div>
  </div>
  {{-- <link rel="stylesheet" href={{URL::asset("/css/sensorPage.css")}}> --}}
  {{-- <script src="/assets/libs/jquery/dist/jquery.min.js"></script> --}}
  <script src={{asset("assets/libs/jquery/dist/jquery.min.js")}}></script>
  {{-- <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script> --}}
  <script src={{asset("assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
  {{-- <script src="/assets/js/sidebarmenu.js"></script> --}}
  <script src={{asset("assets/js/sidebarmenu.js")}}></script>
  {{-- <script src="/assets/js/app.min.js"></script> --}}
  <script src={{asset("assets/js/app.min.js")}}></script>
  {{-- <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script> --}}
  <script src={{asset("assets/libs/apexcharts/dist/apexcharts.min.js")}}></script>
  {{-- <script src="/assets/libs/simplebar/dist/simplebar.js"></script> --}}
  <script src={{asset("assets/libs/simplebar/dist/simplebar.js")}}></script>
  {{-- <script src="/assets/js/dashboard.js"></script> --}}
  <script src={{asset("assets/js/dashboard.js")}}></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  {{-- <script src={{URL::asset("https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js")}}></script> --}}
</body>

</html>
