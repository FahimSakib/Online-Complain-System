<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Teachers</h1>
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
                                <li class="breadcrumb-item active text-primary" aria-current="page">Teacher Single Show
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
                        <div class="table-responsive">
                            <table class="table table-bordered">
                               <tbody>                 
                                   <tr>
                                       <th>Fields</th>
                                       <th>Details</th>
                                   </tr>
                                   <tr>
                                       <th>ID</th>
                                       <td>{{ $teacher->id }}</td>
                                   </tr>
                                   <tr>
                                       <th>Name</th>
                                       <td>{{ $teacher->name }}</td>
                                   </tr>
                                   <tr>
                                       <th>Designation</th>
                                       <td>{{ $teacher->designation }}</td>
                                   </tr>
                                   <tr>
                                       <th>Department</th>
                                       <td>{{ $teacher->department->title }}</td>
                                   </tr>
                                   <tr>
                                       <th>Mobile</th>
                                       <td>{{ $teacher->mobile }}</td>
                                   </tr>
                                   <tr>
                                    <th>Image</th>
                                    <td>
                                        <img src="{{ asset('storage/User_image/'.$teacher->image) }}"
                                            alt="{{ $teacher->image }}" style="width:100px">
                                    </td>
                                </tr>
                                   <tr>
                                       <th>Status</th>
                                      
                                         @if($teacher->status=='1')                               
                                             <td>Active</td>
                                         @else                               
                                             <td>Deactive</td>

                                         @endif
                                   </tr>
                                  
                                   <tr>
                                       <th>Created at</th>
                                                                                   <td>{!! date('d - M - Y - h : i : s A', strtotime($teacher->created_at)) !!}

                                   </tr>
                                   <tr>
                                       <th>Updated at</th>
                                       <td>{!! date('d - M - Y - h : i : s A', strtotime($teacher->updated_at)) !!}
                                   </tr>
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
