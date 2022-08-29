<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin') }}" class=" logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    {{-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-sign-out"></i></a> --}}
                    <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item" id="logout-button">
                        <i class="fas fa-power-off mr-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</header>
