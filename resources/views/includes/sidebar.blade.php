<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-inner" data-simplebar>
        <ul class="nk-menu nk-menu-md">
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Dashboards</h6>
            </li>
            <li class="nk-menu-item">
                <a href="{{url('/')}}" class="nk-menu-link">
                    <span class="nk-menu-icon">
                        <em class="icon ni ni-dashboard"></em>
                    </span>
                    <span class="nk-menu-text">Dashboard</span>
                </a>
            </li>
            
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Staff Roles</h6>
            </li>
            
            <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon">
                        <em class="icon ni ni-users"></em>
                    </span>
                    <span class="nk-menu-text">Staff Management</span>
                </a>
                <ul class="nk-menu-sub">
                    @if(getuserdetail('role') == 'admin')
                    @else
                        @if(checkpermission('1','read_perm'))
                        <li class="nk-menu-item">
                            <a href="{{ url('staff/admin')}}" class="nk-menu-link">
                                <span class="nk-menu-text">Admin</span>
                            </a>
                        </li>
                        @endif
                    @endif
                    
                    @if(getuserdetail('role') == 'company')
                    @else
                    @if(checkpermission('2','read_perm'))
                    <li class="nk-menu-item">
                        <a href="{{ url('staff/company')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Company</span>
                        </a>
                    </li>
                    @endif
                    @endif

                    @if(getuserdetail('role') == 'head_office')
                    @else
                    @if(checkpermission('3','read_perm'))
                    <li class="nk-menu-item">
                        <a href="{{url('staff/headoffice')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Head Office</span>
                        </a>
                    </li>
                    @endif
                    @endif

                    @if(getuserdetail('role') == 'regional_office')
                    @else
                    @if(checkpermission('4','read_perm'))
                    <li class="nk-menu-item">
                        <a href="{{url('staff/regionaloffice')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Regioanl Office</span>
                        </a>
                    </li>
                    @endif
                    @endif

                    @if(getuserdetail('role') == 'zonal_office')
                    @else
                    @if(checkpermission('5','read_perm'))
                    <li class="nk-menu-item">
                        <a href="{{url('staff/zonaloffice')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Zonal Office</span>
                        </a>
                    </li>
                    @endif
                    @endif

                    @if(getuserdetail('role') == 'store')
                    @else
                    @if(checkpermission('6','read_perm'))
                    <li class="nk-menu-item">
                        <a href="{{url('staff/store')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Store</span>
                        </a>
                    </li>
                    @endif
                    @endif

                    @if(getuserdetail('role') == 'claim')
                    @else
                    @if(checkpermission('7','read_perm'))
                    <li class="nk-menu-item">
                        <a href="{{url('staff/claim')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Claim</span>
                        </a>
                    </li>
                    @endif
                    @endif

                </ul>
            </li>
            <li class="nk-menu-item">
                <a href="{{url('reports')}}" class="nk-menu-link">
                    <span class="nk-menu-icon">
                        <em class="icon ni ni-coins"></em>
                    </span>
                    <span class="nk-menu-text">Reports</span>
                </a>
            </li>
            <li class="nk-menu-item has-sub">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon">
                        <em class="icon ni ni-tile-thumb"></em>
                    </span>
                    <span class="nk-menu-text">Master</span>
                </a>
                <ul class="nk-menu-sub">
                    
                    <li class="nk-menu-item">
                        <a href="{{ url('master/brands/')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Brand</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('master/category/')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Category</span>
                        </a>
                    </li>
                    
                    <li class="nk-menu-item">
                        <a href="{{ url('master/model/')}}" class="nk-menu-link">
                            <span class="nk-menu-text">Model</span>
                        </a>
                    </li>
                    
                </ul>
            </li>
            
        </ul>
    </div>
</div>