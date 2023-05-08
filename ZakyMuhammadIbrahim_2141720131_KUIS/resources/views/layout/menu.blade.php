<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/dataMahasiswa" class="nav-link {{ Request::is('dataMahasiswa') ? 'active' : '' }}">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Data Mahasiswa
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="dataDosen" class="nav-link {{ Request::is('dataDosen') ? 'active' : '' }}">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Data Dosen
          </p>
        </a>
      </li>
    </ul>
  </nav>