{{-- <div id="left-side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                 <li class="waves-effect"><a href="{{ route('dashboard') }}" class="{{ (Request::segment(2) == 'dashboard') ? 'active' : '' }}"><i class="lnr lnr-pie-chart"></i> <span>Dashboard</span></a></li>
                 <li class="waves-effect"><a href="{{ route('users.index') }}" class="{{ (Request::segment(2) == 'users') ? 'active' : '' }}"><i class="lnr lnr-users"></i> <span>Pengguna</span></a></li>  
                 <li class="waves-effect"><a href="{{ route('settings.index') }}" class="{{ (Request::segment(2) == 'settings') ? 'active' : '' }}"><i class="lnr lnr-cog"></i> <span>Pengaturan Website</span></a></li> 
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
        </div>
    </div>
</div>  --}}
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">{{config('web_config')['WEB_TITLE']}}</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">DU</a>
      </div>
      <ul class="sidebar-menu">
              <li class="{{ (Request::segment(2) == 'dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i><span> Dashboard</span></a></li>
              <li class="{{ (Request::segment(2) == 'users') ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users"></i><span> Pengguna</span></a></li>
              <li class="{{ (Request::segment(2) == 'settings') ? 'active' : '' }}"><a class="nav-link" href="{{ route('settings.index') }}"><i class="fas fa-cog"></i><span> Pengaturan Website</span></a></li>
            </ul>
    </aside>
  </div>