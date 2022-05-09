@php
if($message = Session::get('success')){
toast($message,'success');
}

$user = App\Models\User::where('id', auth()->user()->id)->first();
if ($user->role_id == 2) {
$complains = App\Models\Complain::toBase()->where([['teacher_id',auth()->user()->id],['status',2]])->get();
}elseif ($user->role_id == 3) {
$complains = App\Models\Complain::toBase()->where([['student_id',auth()->user()->id]])->get();
$complains_accepted = App\Models\Complain::toBase()->where([['student_id',auth()->user()->id],['status',2]])->count();
$complains_pending  = App\Models\Complain::toBase()->where([['student_id',auth()->user()->id],['status',1]])->count();
$complains_declined = App\Models\Complain::toBase()->where([['student_id',auth()->user()->id],['status',3]])->count();
}else {
$complains = [];
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
                    @if ($user->role_id == 2)
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
                    @elseif ($user->role_id == 3)
                    <div class="container mt-3">
                        <ul class="list-unstyled">
                            <li>
                                <h3>Submiited : <br> {{ count($complains) }}</h3>
                            </li>
                            <li>
                                <h3>Accepted : <br> {{ $complains_accepted }}</h3>
                            </li>
                            <li>
                                <h3>Accepted : <br> {{ $complains_pending }}</h3>
                            </li>
                            <li>
                                <h3>Declined : <br> {{ $complains_declined }}</h3>
                            </li>
                        </ul>
                    </div>
                    @else
                    <span>N/A</span>
                    @endif

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
                                            data-toggle="tab"><i class="flaticon-info-sign"></i>Complains</a></li>
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab_contents tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                    @if ($user->role_id == 2)
                                    @if (count($complains) != 0)
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Problem 1</th>
                                                <th scope="col">Problem 2</th>
                                                <th scope="col">Problem 3</th>
                                                <th scope="col">Problem 4</th>
                                                <th scope="col">Problem 5</th>
                                                <th scope="col">Comment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($complains as $complain)
                                            <tr>
                                                <td class="text-center">{{ $i++ }}</td>
                                                @php
                                                $student =
                                                App\Models\User::toBase()->where('id',$complain->student_id)->pluck('name')->first();
                                                @endphp
                                                <td class="text-center">{{ $student }}</td>
                                                <td class="text-center">{{ $complain->problem1 }}</td>
                                                <td class="text-center">{{ $complain->problem2 }}</td>
                                                <td class="text-center">{{ $complain->problem3 }}</td>
                                                <td class="text-center">{{ $complain->problem4 }}</td>
                                                <td class="text-center">{{ $complain->problem5 }}</td>
                                                <td>{{ $complain->comment != null ? $complain->comment : 'N/A' }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                    <span>No Complains found</span>
                                    @endif

                                    @else
                                    @if (count($complains) != 0)
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL</th>
                                                <th scope="col">Teacher Name</th>
                                                <th scope="col">Problem 1</th>
                                                <th scope="col">Problem 2</th>
                                                <th scope="col">Problem 3</th>
                                                <th scope="col">Problem 4</th>
                                                <th scope="col">Problem 5</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($complains as $complain)
                                            <tr>
                                                <td class="text-center">{{ $i++ }}</td>
                                                @php
                                                $teacher =
                                                App\Models\User::toBase()->where('id',$complain->teacher_id)->pluck('name')->first();
                                                @endphp
                                                <td class="text-center">{{ $teacher }}</td>
                                                <td class="text-center">{{ $complain->problem1 }}</td>
                                                <td class="text-center">{{ $complain->problem2 }}</td>
                                                <td class="text-center">{{ $complain->problem3 }}</td>
                                                <td class="text-center">{{ $complain->problem4 }}</td>
                                                <td class="text-center">{{ $complain->problem5 }}</td>
                                                <td>{{ $complain->comment != null ? $complain->comment : 'N/A' }}</td>
                                                @if($complain->status == '1')
                                                <td>
                                                    <span class="badge badge-info">Pending</span>
                                                </td>
                                                @elseif ($complain->status == '2')
                                                <td>
                                                    <span class="badge badge-success">Accepted</span>
                                                </td>
                                                @else
                                                <td>
                                                    <span class="badge badge-danger">Declined</span>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                    <span>No Complains found</span>
                                    @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Ends: .teacher-detail-right -->
        </div>
    </div>
</section><!-- Ends: .teacher-details-wrapper -->
