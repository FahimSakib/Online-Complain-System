        <!-- begin app-main -->
        <div class="app-main" id="main">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin row -->
                <div class="row">
                    <div class="col-md-12 m-b-30">
                        <!-- begin page title -->
                        <div class="d-block d-sm-flex flex-nowrap align-items-center">
                            <div class="page-title mb-2 mb-sm-0">
                                <h1>Department</h1>
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
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Edit</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <div class="card-heading">
                                <h4 class="card-title">Edit Department</h4>
                            </div>
                        </div>
                        <div class="card-body">
                                 <form action="{{ route('admin.department.update',$department->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="control-label" for="title">Title</label>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$department->title}}"
                                            placeholder="Title"  />
                                    </div>
                                    <div class="form-group mb-2 selects-contant  select-wrapper">
                                        <select class="js-basic-single form-control" name="status" value="{{$department->title}}">

                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                                                           <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
