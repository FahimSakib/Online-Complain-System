<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title">Personal</li>
            <li class="active">
                <a href="{{ route('admin.index') }}" aria-expanded="false"  >
                    <i class="nav-icon ti ti-rocket"></i>
                    <span class="nav-title">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                        class="nav-icon ti ti-pencil-alt"></i><span class="nav-title">Complains</span></a>
                <ul aria-expanded="false">
                    <li> <a href="{{ route('admin.complains.index') }}" class="text-success">Index</a> </li>
                    <li> <a href="{{ route('admin.pending.complain') }}" class="text-warning">Pendings</a> </li>
                    <li> <a href="{{ route('admin.declined.complain') }}" class="text-danger">Declined</a> </li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                        class="nav-icon ti ti-layout-grid3"></i><span class="nav-title">Department</span></a>
                <ul aria-expanded="false">
                    <li> <a href="{{ route('admin.department.index') }}" class="text-success">Index</a> </li>
                    <li> <a href="{{ route('admin.department.create') }}" class="text-info">Create</a> </li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                        class="nav-icon ti ti-user"></i><span class="nav-title">Teachers</span></a>
                <ul aria-expanded="false">
                    <li> <a href="{{ route('admin.teacher.index') }}" class="text-success">Index</a> </li>
                    <li> <a href="{{ route('admin.teacher.create') }}" class="text-info">Create</a> </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>
