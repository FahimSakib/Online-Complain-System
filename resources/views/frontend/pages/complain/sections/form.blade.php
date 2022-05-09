<section class="contact_info_wrapper">
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="contact_form_wrapper">
                <h3 class="title tex-center">Drop Your Complain</h3>
                <div class="leave_comment">
                    <div class="contact_form">
                        <form action="{{ route('complain.store') }}">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 form-group">
                                    <label for="exampleFormControlSelect1">Department</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        onchange="teachers(this.value)" required>
                                        <option value="">Select Please</option>
                                        @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-group">
                                    <label for="exampleFormControlSelect2">Teachers name</label>
                                    <select class="form-control" id="exampleFormControlSelect2" required>
                                        <option value="">Please Select a Department First</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-group">
                                    <label for="exampleFormControlSelect3">Late</label>
                                    <select class="form-control" id="exampleFormControlSelect3">
                                        <option>Teachers Name</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-group">
                                    <label for="exampleFormControlSelect4">Behaviour</label>
                                    <select class="form-control" id="exampleFormControlSelect4">
                                        <option>Teachers Name</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-group">
                                    <label for="exampleFormControlSelect5">Teaching method</label>
                                    <select class="form-control" id="exampleFormControlSelect5">
                                        <option>Teachers Name</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 form-group">
                                    <label for="exampleFormControlSelect6">Marking</label>
                                    <select class="form-control" id="exampleFormControlSelect6">
                                        <option>Teachers Name</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 form-group">
                                    <textarea class="form-control" id="comment"
                                        placeholder="Your Comment Wite Here ..."></textarea>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                    <button type="submit" class="text-center">Send Complain</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    let _token = "{{ csrf_token() }}";

    function teachers(department_id) {
        if (department_id) {
            $.ajax({
                url: "{{ route('teachers') }}",
                type: "POST",
                data: {
                    department_id: department_id,
                    _token: _token
                },
                dataType: "JSON",
                success: function (data) {
                    $('#exampleFormControlSelect2').html('');
                    $('#exampleFormControlSelect2').html(data);
                },
                error: function (xhr, ajaxOption, thrownError) {
                    console.log(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);
                }
            });
        };
    };

</script>
@endpush
