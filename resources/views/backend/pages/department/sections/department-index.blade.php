<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Data Table</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.index') }}"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Department
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">List of Departments
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="datatable-wrapper table-responsive">
                            <table id="datatable" class="display compact table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($department as $item)
                                        <td class="text-center">
                                            {{$i++}}
                                        </td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->status}}</td>
                                        <td class="nav-item dropdown">
                                            <a href="javascript:void(0)" class="nav-link" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Action
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                                {{-- <a class="dropdown-item has-icon"
                                                    href="{{ route('admin.department.show',$item->id) }}"><i
                                                        class="fa fa-eye"></i> View</a> --}}
                                                <a class="dropdown-item has-icon"
                                                    href="{{ route('admin.department.edit',$item->id) }}"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <div class="del ml-4">
                                                    <form action="{{ route('admin.department.destroy',$item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <i class="fa fa-trash"></i> <button type="submit"
                                                            class="btn delete_confirm" aria-hidden="true"
                                                            style="background-color:transparent; margin-right:50px;">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                        </div>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        {{-- <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end container-fluid -->
</div>
<!-- end app-main -->