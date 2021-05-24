<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                 <li><a href="{{ route('dashboard') }}" class="{{ (Request::segment(2) == 'dashboard') ? 'active' : '' }}"><i class="lnr lnr-pie-chart"></i> <span>Dashboard</span></a></li>
                 <li><a href="{{ route('setting.index') }}" class="{{ (Request::segment(2) == 'settings') ? 'active' : '' }}"><i class="lnr lnr-users"></i> <span>Pengguna</span></a></li>  
                 <li><a href="{{ route('setting.index') }}" class="{{ (Request::segment(2) == 'settings') ? 'active' : '' }}"><i class="lnr lnr-cog"></i> <span>Pengaturan Website</span></a></li> 
                <li><a href="" class="{{ (Request::segment(1) == 'forum') ? 'active' : '' }}"><i class="lnr lnr-bubble"></i> <span>Forum </span></a></li>
                <li><a href="" class="{{ (Request::segment(1) == 'siswa') ? 'active' : '' }}"><i class="lnr lnr-users"></i> <span>Siswa</span></a></li>
                <li><a href="" class="{{ (Request::segment(1) == 'guru') ? 'active' : '' }}"><i class="lnr lnr-users"></i> <span>Guru</span></a></li>
                <li><a href="" class="{{ (Request::segment(1) == 'blog') ? 'active' : '' }}"><i class="lnr lnr-pencil"></i> <span>Blog</span></a></li>
            </ul>
        </nav>
    </div>
</div>