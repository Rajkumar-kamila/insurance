<!-- Sidebar Start -->
<div class="page-sidebar sidebar-dark unique-sidebar">
    <aside class="sidebar">
        <div class="logo-wrapper"><a href="{{ url('/')}}">
                <h3 class="text-white  ">Inslogin</h3>
            </a>
            <button class="sidebar-btn">
                <svg class="w-6 h-6">
                    <use href="{{ asset('assets/svg/sprite.svg#Category')}}"> </use>
                </svg>
            </button>
        </div>
        <div class="search-wrapper">
            <div class="search-box">
                <input class="search" placeholder="Search" type="search">
                <svg class="w-5 h-5 cursor-pointer">
                    <use href="{{ asset('assets/svg/sprite.svg#Search')}}"> </use>
                </svg>
            </div>
        </div>
        <nav class="sidebar-main">
            <ul class="sidebar-links custom-scroll">
                <li class="title">General</li>
                <li class="sidebar-list"> 
                    <a class="sidebar-link sidebar-title" href="{{url('/dashboard')}}"><span>
                        <svg><use href="{{ asset('assets/svg/sprite.svg#Home')}}"> </use> </svg>
                        <span class="sidebar-name">Dashboards</span></span>
                    </a>
                </li>

                <li class="title">Staff Roles</li>
                <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><span>
                            <svg>
                                <use href="{{ asset('assets/svg/sprite.svg#Folder')}}"> </use>
                            </svg><span class="sidebar-name">Staff Management</span></span>
                        <svg>
                            <use href="{{ asset('assets/svg/sprite.svg#Arrow-Right-2')}}"> </use>
                        </svg></a>
                    <ul class="sidebar-submenu">
                        
                        @if(checkpermission('1','read_perm'))
                        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{ url('staff/admin')}}"><span>
                            <svg>
                                <use href="{{ asset('assets/svg/sprite.svg#2-User')}}"> </use>
                            </svg><span class="sidebar-name">Admin</span></span></a>
                        </li>
                        @endif
                        
                        @if(checkpermission('2','read_perm'))
                        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{url('staff/company')}}"><span>
                            <svg>
                                <use href="{{ asset('assets/svg/sprite.svg#2-User')}}"> </use>
                            </svg><span class="sidebar-name">Company</span></span></a>
                        </li>
                        @endif

                        @if(checkpermission('3','read_perm'))
                        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{url('staff/headoffice')}}"><span>
                            <svg>
                                <use href="{{ asset('assets/svg/sprite.svg#2-User')}}"> </use>
                            </svg><span class="sidebar-name">Head Office</span></span></a>
                        </li>
                        @endif
                        @if(checkpermission('4','read_perm'))
                        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{url('staff/regionaloffice')}}"><span>
                                    <svg>
                                        <use href="{{ asset('assets/svg/sprite.svg#2-User')}}"> </use>
                                    </svg><span class="sidebar-name">Regioanl Office</span></span></a>
                        </li>
                        @endif
                        @if(checkpermission('5','read_perm'))
                        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{url('staff/zonaloffice')}}"><span>
                                    <svg>
                                        <use href="{{ asset('assets/svg/sprite.svg#2-User')}}"> </use>
                                    </svg><span class="sidebar-name">Zonal Office</span></span></a>
                        </li>
                        @endif
                        @if(checkpermission('6','read_perm'))
                        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{url('staff/store')}}"><span>
                                    <svg>
                                        <use href="{{ asset('assets/svg/sprite.svg#2-User')}}"> </use>
                                    </svg><span class="sidebar-name">Store</span></span></a>
                        </li>
                        @endif
                        @if(checkpermission('7','read_perm'))
                        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{url('staff/claim')}}"><span>
                                    <svg>
                                        <use href="{{ asset('assets/svg/sprite.svg#2-User')}}"> </use>
                                    </svg><span class="sidebar-name">Claim</span></span></a>
                        </li>
                        @endif
                    </ul>
                </li>
                <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="{{url('reports')}}"><span>
                            <svg>
                                <use href="{{ asset('assets/svg/sprite.svg#Location')}}"> </use>
                            </svg><span class="sidebar-name">Reports</span></span>
                    </a>

                </li>


                <!-- <li class="title">Miscellaneous</li>
        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><span> 
                <svg> 
                <use href="{{ asset('assets/svg/sprite.svg#Folder')}}"> </use>
                </svg><span class="sidebar-name">Blog</span></span>
            <svg> 
                <use href="{{ asset('assets/svg/sprite.svg#Arrow-Right-2')}}"> </use>
            </svg></a>
            <ul class="sidebar-submenu"> 
            <li> <a href="blog-grid.html">Blog Grid</a></li>
            <li> <a href="blog-detail.html">Blog Detail</a></li>
            </ul>
        </li>
        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="knowledgebase.html"><span> 
                <svg> 
                <use href="{{ asset('assets/svg/sprite.svg#Scan')}}"> </use>
                </svg><span class="sidebar-name">Knowledgebase</span></span></a>
        </li>
        <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><span> 
                <svg> 
                <use href="{{ asset('assets/svg/sprite.svg#Location')}}"> </use>
                </svg><span class="sidebar-name">Map</span></span>
            <svg> 
                <use href="{{ asset('assets/svg/sprite.svg#Arrow-Right-2')}}"> </use>
            </svg></a>
            <ul class="sidebar-submenu"> 
            <li> <a href="maps-js.html">Maps Js</a></li>
            <li> <a href="data-map.html">Data Map</a></li>
            </ul>
        </li> -->
            </ul>
        </nav>
    </aside>
</div>
<!-- Sidebar End -->