@php
$teacher = App\Models\User::where('role_id',2)->limit(6)->get();
@endphp
<section class="popular_courses" id="popular_courses_4">
    <div class="container">
        <div class="row">



            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Our Teachers</h2>
                    <p>The role of teachers in teaching students has declined for many years. The teacher stands in
                        front of the classroom by the white or blackboard and communicates information for students to
                        learn through repetition.</p>
                </div><!-- ends: .section-header -->
            </div>

            @foreach ($teacher as $tt)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="{{ asset('storage/User_image/'.$tt->image) }}"
                                    alt="" class="img-fluid"></a></div>

                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            {{-- <h3><a href="#">{{$i}}</a></h3> --}}
                            <div class="teachers_name">Teacher - <a href="#" title="">{{$tt->name}}</a></div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i>Working Since {!! date('d-M-Y ',
                                    strtotime($tt->created_at)) !!}</li>
                                <li><i class="fas fa-user"></i>Department: {{ $tt->department->title }}</li>
                            </ul>
                            {{-- <a href="#" class="cart_btn pr-2">View Details</a> --}}
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->
            @endforeach
        </div>

    </div>
</section><!-- ./ End Courses Area section -->
