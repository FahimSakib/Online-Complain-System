<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title">Personal</li>
            <li class="active">
                <a href="{{ route('admin.index') }}" aria-expanded="false">
                    <i class="nav-icon ti ti-rocket"></i>
                    <span class="nav-title">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                        class="nav-icon ti ti-pencil-alt"></i><span class="nav-title">Complains</span></a>
                <ul aria-expanded="false">
                    <li> <a href="{{ route('admin.complains.index') }}">Index</a> </li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                        class="nav-icon ti ti-pencil-alt"></i><span class="nav-title">3rd</span></a>
                <ul aria-expanded="false">
                    <li> <a href='calendar-full.html'>Index</a> </li>
                    <li> <a href='calendar-list.html'>Create</a> </li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                        class="nav-icon ti ti-pencil-alt"></i><span class="nav-title">4th</span></a>
                <ul aria-expanded="false">
                    <li> <a href='calendar-full.html'>Index</a> </li>
                    <li> <a href='calendar-list.html'>Create</a> </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>
