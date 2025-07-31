   <div>
   <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="{{ url('/admin/dashboard') }}" class="logo">
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
        <div class="startbar-menu" >
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-auto w-100">
                        @livewire('backend.menus')
                    </ul><!--end navbar-nav--->
                    <div class="update-msg text-center"> 
                        <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box  rounded-circle mx-auto">
                            <img src="{{ asset('assets/backed_end/images/extra/party.gif') }}" alt="" class="d-inline-block me-1" height="30">
                        </div>                   
                        <h5 class="mt-3">Mannat Themes</h5>
                        <p class="mb-3 text-muted">Dastone is a high quality web applications.</p>
                        <a href="javascript: void(0);" class="btn bg-black text-white shadow-sm rounded-pill">Upgrade your plan</a>
                    </div>
                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->    
    </div><!--end startbar-->
    <div class="startbar-overlay d-print-none"></div>
</div>
<!-- end leftbar-tab-menu-->