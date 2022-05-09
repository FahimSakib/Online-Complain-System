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
                                <h1>Teacher</h1>
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
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Create</li>
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
                                <h4 class="card-title">Create Teacher</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.teacher.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="name">Name</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                                placeholder="Name" value="{{ old('name') }}" />
                                        </div>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="id_no">Teacher ID</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control @error('id_no') is-invalid @enderror" id="id_no" name="id_no"
                                                placeholder="Teacher ID" value="{{ old('id_no') }}" />
                                        </div>
                                        @error('id_no')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="designation">Designation</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation"
                                                placeholder="Designation" value="{{ old('designation') }}" />
                                        </div>
                                        @error('designation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="password">Password</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                                                placeholder="Password" />
                                        </div>
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2 selects-contant  select-wrapper col-md-6">
                                        <label class="control-label" for="department">Department</label>
                                        <select class="js-basic-single form-control @error('department_id') is-invalid @enderror" name="department_id">
                                            <option value="">Select Please</option>
                                            @foreach ($departments as $department)
                                            <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : ''}}>{{ $department->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('department_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="image">Image</label>
                                        <div class="mb-2">
                                            <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">
                                        </div>
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="mobile">Mobile NO</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile"
                                                placeholder="Mobile NO" value="{{ old('mobile') }}" />
                                        </div>
                                        @error('mobile')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2 selects-contant  select-wrapper col-md-6">
                                        <label class="control-label" for="title">Status</label>
                                        <select class="js-basic-single form-control @error('status') is-invalid @enderror" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="role_id" value="2">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11"></div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
