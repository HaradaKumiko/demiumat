<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href=""><img src="{{ Storage::url('assets/'.config('web_config')['WEB_LOGO']) }}" alt="Logo" width="70"  class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="
                        @if(auth::user()->role == 'siswa')
                        {{auth::user()->siswa->getAvatar()}}
                        @else
                        
                        @endif"
                        class="img-circle" alt="Avatar"> <span>{{auth::user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('myprofile') }}"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                       <li> <a class="lnr lnr-exit" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> --}}
        </li>
                 </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>