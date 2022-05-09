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
                                    Teacher
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">List of Teachers
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
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Mobile</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($teachers as $teacher)
                                        <td class="text-center">
                                            {{$i++}}
                                        </td>
                                        <td>{{$teacher->name}}</td>
                                        <td>{{$teacher->id_no}}</td>
                                        <td>{{$teacher->designation}}</td>
                                        <td>{{$teacher->department->title}}</td>
                                        <td>{{$teacher->mobile}}</td>
                                        <td>
                                            @if ($teacher->status == 1)
                                            Active
                                            @else
                                            Inactive
                                            @endif
                                        </td>
                                        <td class="nav-item dropdown">
                                            <a href="javascript:void(0)" class="nav-link" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Action
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item has-icon"
                                                    href="{{ route('admin.teacher.show',$teacher->id) }}"><i
                                                        class="fa fa-eye"></i> View</a>
                                                <a class="dropdown-item has-icon"
                                                    href="{{ route('admin.teacher.edit',$teacher->id) }}"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <div class="del ml-4">
                                                    <form action="{{ route('admin.teacher.destroy',$teacher->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <i class="fa fa-trash"></i> <button type="submit"
                                                            class="btn delete_confirm" aria-hidden="true"
                                                            style="background-color:transparent; margin-right:50px;">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

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


@push('scripts')
<script src="asset/backend/assets/bundles/sweetalert/sweetalert.min.js"></script>

<script>
    $('.delete_confirm').click(function (event) {
        var form = $(this).closest("form");
        event.preventDefault();
        swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal('Poof! An item has been deleted!', {
                        icon: 'success',
                        timer: 3000,
                    });
                } else {
                    swal('Your data is safe!', {
                        timer: 3000,
                    });
                }
            });
    });

</script>
@endpush
