<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home') }}">
        <img src="{{asset('admin/images/logo/')}}" alt="">
        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="fe fe-users fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#userList" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-users fe-16"></i>
            <span class="ml-3 item-text">User List</span><span class="sr-only">(current)</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="userList">
            <li class="nav-item active">
              <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">All User</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Active User</span></a>
            </li>

          </ul>
        </li>
      </ul>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#withdraw" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-anchor fe-16"></i>
            <span class="ml-3 item-text">Withdraw</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="withdraw">
            <li class="nav-item">
              <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">All List</span></a>
            </li>
          </ul>
        </li>
      </ul>

      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Services</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="#">
            <i class="fe fe-calendar fe-16"></i>
            <span class="ml-3 item-text">View</span>
          </a>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Publications</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="#">
            <i class="fe fe-calendar fe-16"></i>
            <span class="ml-3 item-text">View</span>
          </a>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Experience</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="#">
            <i class="fe fe-calendar fe-16"></i>
            <span class="ml-3 item-text">View</span>
          </a>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Settings</span>
      </p>
    </nav>
  </aside>
