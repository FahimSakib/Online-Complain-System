@php
if($message = Session::get('success')){
toast($message,'success');
}

$user = App\Models\User::where('id', auth()->user()->id)->first();
if ($user->role_id == 2) {
    $complains = App\Models\Complain::toBase()->where([['teacher_id',auth()->user()->id],['status',2]])->get();
}elseif ($user->role_id == 3) {
    $complains = App\Models\Complain::toBase()->where([['student_id',auth()->user()->id]])->get();
    $complains = App\Models\Complain::toBase()->where([['teacher_id',auth()->user()->id],['status',2]])->get();
}
@endphp
<div class="intro_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="intro_text text-center">
                    @if ($user->role_id == 2)
                    <h2>Teacher's Profile</h2>
                    @elseif ($user->role_id == 3)
                    <h2>Student Profile</h2>
                    @else
                    <h2>Admin Profile</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<section class="teachers_profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 teacher-detail-left">
                <div class="teacher_info_wrapper">
                    <div class="teacger-image">
                        @if ($user->image == null)
                        <img src="asset/frontend/images/team/empty-profile.png" alt="" class="img-fluid">
                        @else
                        <img src="{{ asset('storage/User_image/'.$user->image) }}" alt="{{ $user->image }}"
                            class="img-fluid">
                        @endif
                    </div>
                    <div class="social_wraper">
                        <ul class="social-items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                    <div class="teacher-skills">
                        <div class="skill-single">
                            <span>HTML - <span class="skills_lavel">80%</span></span>
                            <span><span style="width:80%;"></span></span>
                        </div>
                        <div class="skill-single">
                            <span>Wordpress - <span class="skills_lavel">70%</span></span>
                            <span><span style="width:70%;"></span></span>
                        </div>
                        <div class="skill-single">
                            <span>Photoshop - <span class="skills_lavel">90%</span></span>
                            <span><span style="width:90%;"></span></span>
                        </div>
                        <div class="skill-single">
                            <span>CSS3 - <span class="skills_lavel">75%</span></span>
                            <span><span style="width:75%;"></span></span>
                        </div>
                    </div>
                </div>
            </div><!-- Ends: .teacher-detail-left -->
            <div class="col-sm-8 teacher-detail-right">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="teacher-info">
                            @if ($user->role_id == 2)
                            <ul class="list-unstyled">
                                <li>
                                    <h3>Name :</h3>
                                    <span>{{ $user->name }}</span>
                                </li>
                                <li>
                                    <h3>ID :</h3>
                                    <span>{{ $user->id_no }}</span>
                                </li>
                                <li>
                                    <h3>Designation :</h3>
                                    <span>{{ $user->designation }}</span>
                                </li>
                                <li>
                                    <h3>Department :</h3>
                                    <span>{{ $user->department->title }}</span>
                                </li>
                                @if (count($complains) != 0)
                                <li>
                                    <h3>Total Complains :</h3>
                                    <span>{{ count($complains) }}</span>
                                </li>
                                @endif                              
                            </ul>
                            @else
                            <ul class="list-unstyled">
                                <li>
                                    <h3>Name :</h3>
                                    <span>{{ $user->name }}</span>
                                </li>
                                <li>
                                    <h3>ID :</h3>
                                    <span>{{ $user->id_no != null ? $user->id_no : 'N/A' }}</span>
                                </li>
                                <li>
                                    <h3>Email :</h3>
                                    <span>{{ $user->email != null ? $user->email : 'N/A' }}</span>
                                </li>
                                @if ($user->department != null)
                                <li>
                                    <h3>Department :</h3>                                 
                                    <span>{{ $user->department->title }}</span>
                                </li>
                                @endif
                                <li>
                                    <h3>Mobile :</h3>
                                    <span>{{ $user->mobile != null ? $user->mobile : 'N/A' }}</span>
                                </li>    
                            </ul> 
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="teacher-contact">
                            <h2>Contact Us</h2>
                            <form action="#">
                                <input type="text" placeholder="Your Name*" required>
                                <input type="email" placeholder="Email*" required>
                                <textarea>Your Message</textarea>
                                <button type="submit">Submit Your Request</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="courses_tab_wrapper">
                            <div class="courses_details_nav_tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" href="#information" role="tab"
                                            data-toggle="tab"><i class="flaticon-info-sign"></i>About Insructor</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab"
                                            data-toggle="tab"><i class="flaticon-portfolio"></i>Qualification</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#courses" role="tab"
                                            data-toggle="tab"><i class="flaticon-portfolio"></i>Courses</a></li>
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab_contents tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                    <p>iscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                        id est laborum."</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                    <p>"Lorem ipsum idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="courses">
                                    <!--Start Courses Area Section-->
                                    <div class="popular_courses">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="single-courses">
                                                    <div class="courses_banner_wrapper">
                                                        <div class="courses_banner"><a href="#"><img
                                                                    src="images/courses/courses_1.jpg" alt=""
                                                                    class="img-fluid"></a></div>
                                                        <div class="purchase_price">
                                                            <a href="#" class="read_more-btn">$150</a>
                                                        </div>
                                                    </div>
                                                    <div class="courses_info_wrapper">
                                                        <div class="courses_title">
                                                            <h3><a href="#">Make Better Decisions</a></h3>
                                                            <div class="teachers_name">Teacher - <a href="#"
                                                                    title="">Jhonthan Smith</a></div>
                                                        </div>
                                                        <div class="courses_info">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fas fa-user"></i>180 Days</li>
                                                                <li><i class="fas fa-calendar-alt"></i>30 Students</li>
                                                            </ul>
                                                            <a href="#" class="cart_btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Ends: .single courses -->
                                            </div><!-- Ends: . -->



                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="single-courses">
                                                    <div class="courses_banner_wrapper">
                                                        <div class="courses_banner"><a href="#"><img
                                                                    src="images/courses/courses_2.jpg" alt=""
                                                                    class="img-fluid"></a></div>
                                                        <div class="purchase_price">
                                                            <a href="#" class="read_more-btn">Free</a>
                                                        </div>
                                                    </div>
                                                    <div class="courses_info_wrapper">
                                                        <div class="courses_title">
                                                            <h3><a href="#">How To Be A Speaker</a></h3>
                                                            <div class="teachers_name">Teacher - <a href="#"
                                                                    title="">Denise Wood</a></div>
                                                        </div>
                                                        <div class="courses_info">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fa fa-user"></i> 180 Days</li>
                                                                <li><i class="fa fa-comment"></i>50 Students</li>
                                                            </ul>
                                                            <a href="#" class="cart_btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Ends: .single courses -->
                                            </div><!-- Ends: . -->

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="single-courses">
                                                    <div class="courses_banner_wrapper">
                                                        <div class="courses_banner"><a href="#"><img
                                                                    src="images/courses/courses_3.jpg" alt=""
                                                                    class="img-fluid"></a></div>
                                                        <div class="purchase_price">
                                                            <a href="#" class="read_more-btn">120$</a>
                                                        </div>
                                                    </div>
                                                    <div class="courses_info_wrapper">
                                                        <div class="courses_title">
                                                            <h3><a href="#">Network Introductions</a></h3>
                                                            <div class="teachers_name">Teacher - <a href="#"
                                                                    title="">Preston Marshall</a></div>
                                                        </div>
                                                        <div class="courses_info">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fa fa-user"></i> 140 Days</li>
                                                                <li><i class="fa fa-comment"></i>60 Students</li>
                                                            </ul>
                                                            <a href="#" class="cart_btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Ends: .single courses -->
                                            </div><!-- Ends: . -->

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="single-courses">
                                                    <div class="courses_banner_wrapper">
                                                        <div class="courses_banner"><a href="#"><img
                                                                    src="images/courses/courses_4.jpg" alt=""
                                                                    class="img-fluid"></a></div>
                                                        <div class="purchase_price">
                                                            <a href="#" class="read_more-btn">250$</a>
                                                        </div>
                                                    </div>
                                                    <div class="courses_info_wrapper">
                                                        <div class="courses_title">
                                                            <h3><a href="#">Brand Management</a></h3>
                                                            <div class="teachers_name">Teacher - <a href="#"
                                                                    title="">John Porter</a></div>
                                                        </div>
                                                        <div class="courses_info">
                                                            <ul class="list-unstyled">
                                                                <li><i class="fa fa-user"></i> 130 Days</li>
                                                                <li><i class="fa fa-comment"></i>45 Students</li>
                                                            </ul>
                                                            <a href="#" class="cart_btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Ends: .single courses -->
                                            </div><!-- Ends: . -->
                                        </div>

                                    </div><!-- Ends: . -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Ends: .teacher-detail-right -->
        </div>
    </div>
</section><!-- Ends: .teacher-details-wrapper -->
