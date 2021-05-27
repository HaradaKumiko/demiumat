<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">{{config('web_config')['WEB_TITLE']}}</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">DU</a>
      </div>
      <ul class="sidebar-menu">
              <li class="{{ (Request::segment(1) == 'dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i><span> Dashboard</span></a></li>
              <li class="{{ (Request::segment(1) == 'forums') ? 'active' : '' }}"><a class="nav-link" href="{{ route('forums.index') }}"><i class="fas fa-pencil-alt"></i><span> Forum</span></a></li>
              @if(auth::user()->role == 'Administrator')
              <li class="menu-header">Admin Page</li>
              <li class="{{ (Request::segment(2) == 'users') ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-user"></i><span> Pengguna</span></a></li>
              <li class="nav-item dropdown {{ (Request::segment(2) == 'cashs') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill-wave-alt"></i><span>Kas {{ config('web_config')['WEB_PLACE_NAME'] }}</span></a>
                <ul class="dropdown-menu">
                  <li class="{{ (Request::segment(4) == 'in') ? 'active' : '' }}"><a class="nav-link" href="{{route('cashs.createin')}}">Kas Masuk</a></li>
                  <li class="{{ (Request::segment(4) == 'out') ? 'active' : '' }}"><a class="nav-link" href="{{route('cashs.createout')}}">Kas Keluar</a></li>
                  <li class="{{ (Request::segment(3) == 'summary') ? 'active' : '' }}"><a class="nav-link" href="{{route('cashs.index')}}">Rekapitulasi Kas</a></li>
                </ul>
              </li>              
              <li class="{{ (Request::segment(2) == 'settings') ? 'active' : '' }}"><a class="nav-link" href="{{ route('settings.index') }}"><i class="fas fa-cog"></i><span> Pengaturan Website</span></a></li>
              @endif
            </ul>
    </aside>
  </div>