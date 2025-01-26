
<div class="container-fluid px-0">
  <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item @if(Route::currentRouteName() == 'dashboard') active @endif">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'category.index') active @endif">
                    <a class="nav-link" href="{{ route('category.index') }}"><i class="far fa-address-book"></i>Category</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'calibaration.index') active @endif">
                    <a class="nav-link" href="{{ route('calibaration.index') }}"><i class="far fa-clone"></i>Calibaration Chart</a>
                </li> 
                
                <li class="nav-item @if(Route::currentRouteName() == 'driver') active @endif">
                    <a class="nav-link" href="{{ route('driver') }}"><i class="far fa-clone"></i>Driver</a>
                </li>
                
                <li class="nav-item @if(Route::currentRouteName() == 'oil.index') active @endif">
                    <a class="nav-link" href="{{ route('oil.index') }}"><i class="far fa-clone"></i>OIL</a>
                </li>
               
            </ul>
        </div>
    </nav>
</div>