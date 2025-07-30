<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="index.html" class="logo">
            <span>
                <img src="{{ asset('assets/backed_end/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
            <span class="">
                <img src="{{ asset('assets/backed_end/images/logo-light.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ asset('assets/backed_end/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    
    
    <div class="startbar d-print-none">
        
        <div class="brand">
            <a href="{{ url('/admin') }}" class="logo">
                <span>
                    <img src="{{ asset('images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span class="">
                    <img src="{{ asset('images/logo-light.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ asset('images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        
        
        <div class="startbar-menu" >
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label mt-2">
                            <span>Main Menu</span>
                        </li>
                        
                        @livewire('backed_end.admin.menu.menu')

                        {{-- <li class="menu-label mt-2">
                            <span>Settings</span>
                        </li> --}}

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards"> 
                                <i class="iconoir-report-columns menu-icon"></i>                                       
                                <span>Dashboards</span>
                            </a>
                            <div class="collapse " id="sidebarDashboards">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link ">Analytics</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a href="sales-index.html" class="nav-link ">Sales</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div>
                        </li><!--end nav-item--> --}}

                    </ul>
                    <div class="update-msg text-center"> 
                        <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box rounded-circle mx-auto">
                            <img src="{{ asset('images/extra/party.gif') }}" alt="" class="d-inline-block me-1" height="30">
                        </div>                   
                        <h5 class="mt-3">E-PRESENSI</h5>
                        <p class="mb-3 text-muted">E-PRESENSI is a high quality web applications.</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="startbar-overlay d-print-none"></div>
