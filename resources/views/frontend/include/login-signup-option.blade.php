<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login"
                                    role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2"
                                    role="tab">Register</a></li>

                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                      
                                            <div class="form-group">
                                                <label for="control-label" value="{{ __('Email') }}">Email address
                                                    *</label>
                                                <input type="text" class="form-control" id="email" type="email"
                                                    name="email" :value="old('email')" required autofocus
                                                    placeholder="Email">
                                            </div><!-- End .form-group -->

                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                         
                                            <div class="form-group">
                                                <label for="password" value="{{ __('Password') }}">Password *</label>
                                                <input type="password" id="password" class="form-control"
                                                    name="password" required autocomplete="current-password"
                                                    placeholder="Password">
                                            </div><!-- End .form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                           
                                            @if (Route::has('password.request'))
                                            <a class=" forgot-link forget_pass" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                            @endif
                                            <button type="submit" class="btn btn-default login_btn">
                                                <span> {{ __('Log in') }}</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">

                                            {{-- FOR NAME --}}
                                            <div class="form-group">
                                                <label for="register-name control-label" value="{{ __('Name') }}">User
                                                    Name *</label>
                                                <input type="text" class="form-control" id="ragister-name" name="name"
                                                    :value="old('name')" required autofocus autocomplete="name"
                                                    placeholder="Username">
                                            </div><!-- End .form-group -->
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">

                                            {{-- FOR Email --}}
                                            <div class="form-group">
                                                <label for="email control-label" value="{{ __('Email') }}">Your Email
                                                    *</label>
                                                <input type="email" class="form-control" id="ragister-email"
                                                    name="email" :value="old('email')" required placeholder="Email">
                                            </div><!-- End .form-group -->

                                        </div>

                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            {{-- FOR Password --}}
                                            <div class="form-group">
                                                <label for="password" value="{{ __('Password') }}">Password *</label>
                                                <input type="password" class="form-control" id="register-password"
                                                    type="password" name="password" required autocomplete="new-password"
                                                    placeholder="Password">
                                            </div><!-- End .form-group -->
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            {{-- FOR  Confirm Password --}}
                                            <div class="form-group">
                                                <label for="password_confirmation"
                                                    value="{{ __('Confirm Password') }}">Confirm Password *</label>
                                                <input type="password" id="password_confirmation" class="form-control"
                                                    type="password" name="password_confirmation" required
                                                    autocomplete="new-password" placeholder="Confirm Password">
                                            </div><!-- End .form-group -->
                                        </div>

                                        <div class="row">
                                            <div
                                                class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                <div class="mt-4">
                                                    <x-jet-label for="terms">
                                                        <div class="flex items-center">
                                                            <x-jet-checkbox name="terms" id="terms" />
                                                            <div class="ml-2">
                                                                {!! __('I agree to the :terms_of_service and
                                                                :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank"
                                                                    href="'.route('terms.show').'"
                                                                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms
                                                                    of Service').'</a>',
                                                                'privacy_policy' => '<a target="_blank"
                                                                    href="'.route('policy.show').'"
                                                                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                                                    Policy').'</a>',
                                                                ]) !!}
                                                            </div>
                                                        </div>
                                                    </x-jet-label>
                                                </div>
                                                @endif
                                                <div class="form-footer">


                                        
                                                    <button type="submit" class="btn btn-default login_btn">
                                                        <span> {{ __('Register') }}</span>
                                                        <i class="icon-long-arrow-right"></i>
                                                    </button>
                                                </div><!-- End .form-footer -->

                                            </div>
                                        </div>
                                        </div>
                                </form>
                            </div>
                            <!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- End Login Signup Option -->
