<div>

    
    
    @if(isset($menus) && $menus->isNotEmpty())
        @foreach($menus as $m)
            @if($m->submenu)
                <li class="nav-item">
                    <a class="nav-link" href="#{{ $m->menu_controller }}" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards"> 
                        <i class="{{ $m->menu_icon }} menu-icon"></i>                                       
                        <span>{{ $m->menu_name }}</span>
                    </a>
                    @if($m->submenu->isNotEmpty())
                        <div class="collapse " id="{{ $m->menu_controller }}">
                            @foreach($m->submenu as $submenu)
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('admin/' . $m->menu_controller . '/' . $submenu->submenu_function) }}" class="nav-link " wire:navigate>{{ $submenu->submenu_name }}</a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    @endif
                </li>
            @else 
                <li class="nav-item">
                    <a class="nav-link" href="{{ $m->menu_controller }}">
                        <i class="{{ $m->menu_icon }} menu-icon"></i> 
                        <span>{{ $m->menu_name }}</span>
                    </a>
                </li>
            @endif
        @endforeach
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ $m->menu_controller }}">
                <i class="{{ $m->menu_icon }} menu-icon"></i> 
                <span>{{ $m->menu_name }}</span>
            </a>
        </li>
    @endif
</div>