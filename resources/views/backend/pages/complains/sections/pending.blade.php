@php
if($message = Session::get('success')){
toast($message,'success');
}
@endphp

<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Pending Complains</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            @include('backend.pages.complains.sections.breadcrumb')
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
                                        <th>Teacher</th>
                                        <th>Department</th>
                                        {{-- <th>Student</th> --}}
                                        <th>Problem 1</th>
                                        <th>Problem 2</th>
                                        <th>Problem 3</th>
                                        <th>Problem 4</th>
                                        <th>Problem 5</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($complains as $complain)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        @php
                                        $teacher =
                                        App\Models\User::where('id',$complain->teacher_id)->pluck('name')->first();
                                        // $student =
                                        // App\Models\User::where('id',$complain->student_id)->pluck('name')->first();
                                        $problem1_avg =
                                        App\Models\Complain::toBase()->where('teacher_id',$complain->teacher_id)->avg('problem1');
                                        $problem2_avg =
                                        App\Models\Complain::toBase()->where('teacher_id',$complain->teacher_id)->avg('problem2');
                                        $problem3_avg =
                                        App\Models\Complain::toBase()->where('teacher_id',$complain->teacher_id)->avg('problem3');
                                        $problem4_avg =
                                        App\Models\Complain::toBase()->where('teacher_id',$complain->teacher_id)->avg('problem4');
                                        $problem5_avg =
                                        App\Models\Complain::toBase()->where('teacher_id',$complain->teacher_id)->avg('problem5');
                                        @endphp
                                        <td>{{ $teacher }}</td>
                                        <td>{{ $complain->department->title }}</td>
                                        {{-- <td>{{ $student }}</td> --}}
                                        {{-- <td
                                            class="{{ $problem1_avg <= 2.5 ? 'text-danger' : 'text-success' }}
                                        text-center">
                                        {{ $complain->problem1 }} <br> average:
                                        {{ number_format((float)$problem1_avg, 2, '.', '') }}</td>
                                        <td
                                            class="{{ $problem2_avg <= 2.5 ? 'text-danger' : 'text-success' }} text-center">
                                            {{ $complain->problem2 }} <br> average:
                                            {{ number_format((float)$problem2_avg, 2, '.', '') }}</td>
                                        <td
                                            class="{{ $problem3_avg <= 2.5 ? 'text-danger' : 'text-success' }} text-center">
                                            {{ $complain->problem3 }} <br> average:
                                            {{ number_format((float)$problem3_avg, 2, '.', '') }}</td>
                                        <td
                                            class="{{ $problem4_avg <= 2.5 ? 'text-danger' : 'text-success' }} text-center">
                                            {{ $complain->problem4 }} <br> average:
                                            {{ number_format((float)$problem4_avg, 2, '.', '') }}</td>
                                        <td
                                            class="{{ $problem5_avg <= 2.5 ? 'text-danger' : 'text-success' }} text-center">
                                            {{ $complain->problem5 }} <br> average:
                                            {{ number_format((float)$problem5_avg, 2, '.', '') }}

                                        </td> --}}
                                        <td @if($problem1_avg <=0.5) class="text-danger text-center">False
                                            @else
                                            class = "text-success text-center">True
                                            @endif
                                        </td>
                                        <td @if($problem2_avg <=0.5) class="text-danger text-center">False
                                            @else
                                            class = "text-success text-center">True
                                            @endif
                                        </td>
                                        <td @if($problem3_avg <=0.5) class="text-danger text-center">False
                                            @else
                                            class = "text-success text-center">True
                                            @endif
                                        </td>
                                        <td @if($problem4_avg <=0.5) class="text-danger text-center">False
                                            @else
                                            class = "text-success text-center">True
                                            @endif
                                        </td>
                                        <td @if($problem5_avg <=0.5)1 class="text-danger text-center">False
                                            @else
                                            class = "text-success text-center">True
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
                                                    href="{{ route('admin.complains.show',$complain->id) }}"><i
                                                        class="fa fa-eye"></i> View</a>
                                                <div>
                                                    <form action="{{ route('admin.complains.update',$complain->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="update_date"
                                                            value="{{ date('Y-m-d H:i:s') }}">
                                                        <input type="hidden" name="status" value="2">
                                                        <button type="submit" class="btn" aria-hidden="true"
                                                            style="background-color:transparent;"><i
                                                                class="fa fa-plus-square"></i> Accept</button>
                                                    </form>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.complains.update',$complain->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="update_date"
                                                            value="{{ date('Y-m-d H:i:s') }}">
                                                        <input type="hidden" name="status" value="3">
                                                        <button type="submit" class="btn" aria-hidden="true"
                                                            style="background-color:transparent;"><i
                                                                class="fa fa-minus-square"></i> Decline</button>
                                                    </form>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.complains.destroy',$complain->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn delete_confirm"
                                                            aria-hidden="true" style="background-color:transparent;"><i
                                                                class="fa fa-trash"></i> Delete</button>
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
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>

@push('scripts')
<script src="asset/backend/assets/js/sweetalert.min.js"></script>

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
