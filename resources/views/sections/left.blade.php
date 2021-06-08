 <!-- ========== Left Sidebar Start ========== -->
 <div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
    
                <li>
                    <a href="{{ url('/') }}" >
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboards </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Partners </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href={{ route('erplist') }} > ERP List</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarProjects" data-toggle="collapse">
                        <i class="mdi mdi-briefcase-check-outline"></i>
                        <span> Projects </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/">List</a>
                            </li>
                            <li>
                                <a href="/">Detail</a>
                            </li>
                            <li>
                                <a href="/">Create Project</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTasks" data-toggle="collapse">
                        <i class="mdi mdi-clipboard-multiple-outline"></i>
                        <span> Inventory </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/">Inward</a>
                            </li>
                            <li>
                                <a href="/">Outward</a>
                            </li>
                            <li>
                                <a href="/">Movement History</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTickets" data-toggle="collapse">
                        <i class="mdi mdi-lifebuoy"></i>
                        <span> Tickets </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTickets">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/">List</a>
                            </li>
                            <li>
                                <a href="/">Detail</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="/">
                        <i class="mdi mdi-folder-star-outline"></i>
                        <span> File Manager </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->