<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      {{-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div> --}}
      <div class="sidebar-brand-text">Online Ticketing System Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('products') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Product</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/locations">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Locations</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/trips">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Trips</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="/bookings">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Bookings</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/users">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Users</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


  </ul>
