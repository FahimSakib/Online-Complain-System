<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 p-0 ">
                {{-- <div class="shape_wrapper">
                    <img src="images/shapes/bubble_shpe_1.png" alt="" class="shape_t_1"> 
                    <img src="images/shapes/round_shpae_1.png" alt="" class="shape_t_2">
                </div>    --}}
            </div>
            <div class="col-12 col-sm-9 col-md-9 col-lg-9 p-0 become_techer_wrapper">
                <div class="become_a_teacher">
                    <div class="title">
                        <h2>About Us</h2>
                        <p>Online Complain Management System provides an online way of solving the problems faced by the public by saving time and eradicate corruption.</p>
                    </div><!-- ends: .section-header -->
                    {{-- <div class="get_s_btn">
                        <a href="#" title="">Get Started Now</a>
                    </div> --}}
                    {{-- <img src="images/shapes/bubble_shpe_2.png" alt="" class="shape_t_1">  --}}
                </div>                                
            </div>
        </div>
        <div class="footer_top">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col footer_intro">
                        <img src="asset/backend/images/logo2.png" alt="" class="f_logo">
                        {{-- <p>Online Complaint Management System provides an online way of solving the problems faced by the public by saving time and eradicate corruption.</p> --}}
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col">
                        <h3>Useful Links</h3>
                        <ul class="location_info quick_inf0">
                        <li ><a href="{{route('home')}}" class="{{ (request()->is('/')) ? 'active' : '' }}"">Home</a></li>
                        <li ><a href="{{route('complain.index')}}" class=" {{ (request()->is('complain')) ? 'active' : '' }}">Complain</a></li>
                         @if (auth()->guest())

                            <li><a href="{{ route('login') }}">Login</a></li>
                            @else
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                           @endif
                            {{-- <li><a href="#">Contact</a></li> --}}
                        </ul>                         
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3>information</h3>
                        <ul class="quick_inf0">
                            <li><a href="#">Campus Tour</a></li>
                            <li><a href="#">Student Life</a></li>
                            <li><a href="#">Scholarship</a></li>
                            <li><a href="#">Admission</a></li>
                            <li><a href="#">Leadership</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-12 col-md-6 col-lg-4 "style="margin-right:50px;">
                    <div class="footer_single_col contact">
                        <h3>Contact Us</h3>
                        <p>Fell free to get in touch us via Phone or send us a message.</p>
                        <div class="contact_info">
                            <span>+01811990871</span> 
                            <span class="email">onlinecs@gmail.com</span>
                        </div>
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</footer><!-- End Footer -->