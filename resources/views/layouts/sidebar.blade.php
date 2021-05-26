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
              <li class="{{ (Request::segment(2) == 'users') ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-user"></i><span> Pengguna</span></a></li>
              <li class="{{ (Request::segment(2) == 'settings') ? 'active' : '' }}"><a class="nav-link" href="{{ route('settings.index') }}"><i class="fas fa-cog"></i><span> Pengaturan Website</span></a></li>
              @endif
            </ul>
    </aside>
  </div>