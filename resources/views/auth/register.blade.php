
@extends('layouts.guest')
@section('title') Sign Up @endsection
@section('content')
    @php
        $icons = new \Feather\IconManager();
    @endphp


    <div class="preloader"></div>

    <div class="main-wrap">

        <div class="nav-header bg-transparent shadow-none border-0">
            <div class="nav-top w-100">
                <a href="{{ url('/') }}">
                    <i class="text-success display1-size me-2 ms-0">{!! $icons->getIcon('zap') !!}</i>
                    <span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">{{ config('app.name') }}</span>
                </a>
                <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="default-video.html" class="mob-menu me-2"><i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="#" class="me-2 menu-search-icon mob-menu"><i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <button class="nav-menu me-0 ms-2"></button>

                <a href="{{ route('login') }}"
                   class="header-btn d-none d-lg-block bg-dark fw-500 text-white font-xsss p-3 ms-auto w100 text-center lh-20 rounded-xl">Login</a>
                <a href="{{ route('register') }}"
                   class="header-btn d-none d-lg-block bg-current fw-500 text-white font-xsss p-3 ms-2 w100 text-center lh-20 rounded-xl">Register</a>

            </div>


        </div>

        <div class="row">
            <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" style="background-image: url(images/login-bg-2.jpg);"></div>
            <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-3 overflow-scroll">
                <div class="card shadow-none border-0 ms-auto me-auto login-card">
                    <div class="card-body rounded-0 text-left">

                        <form method="POST" action="{{ route('register') }}" class="pt-10" enctype="multipart/form-data">
                            @csrf

                            <br><br><br><br><br><br>

                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            <h2 class="fw-700 display1-size display2-md-size mb-4">Create <br>your account</h2>


                            <div class="form-group icon-input mb-3">
                                <i class="font-sm text-grey-500 pe-0" style="margin-top: -10px">{!! $icons->getIcon('user') !!}</i>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                       placeholder="Your First Name">
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>


                            <div class="form-group icon-input mb-3">
                                <i class="font-sm text-grey-500 pe-0" style="margin-top: -10px">{!! $icons->getIcon('user') !!}</i>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                       placeholder="Your Last Name">
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>


                            <div class="form-group icon-input mb-3">
                                <i class="font-sm text-grey-500 pe-0" style="margin-top: -10px">{!! $icons->getIcon('user') !!}</i>
                                <input type="text" name="username" value="{{ old('username') }}" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                       placeholder="Your Username">
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>


                            <div class="form-group icon-input mb-3">
                                <i class="font-sm text-grey-500 pe-0" style="margin-top: -10px">{!! $icons->getIcon('phone') !!}</i>
                                <input type="tel" name="tel" value="{{ old('tel') }}" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                       placeholder="Your Phone Number">
                                <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                            </div>


                            <label class="form-group mb-2 d-block">Gender</label>
                            <div class="form-check form-check-inline mb-3">
                                <input type="radio" id="gender" class="form-check-input" name="gender" value="Male">
                                <label for="gender" class="form-check-label">Male</label>
                            </div>

                            <div class="form-check form-check-inline mb-3">
                                <input type="radio" id="gender" class="form-check-input" name="gender" value="Female">
                                <label for="gender" class="form-check-label">Female</label>
                                <x-input-error :messages="$errors->get('gender')" class="mt-2 d-block" />
                            </div>

                            <div class="form-group icon-input mb-3">
                                <input type="Password" name="password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                                       placeholder="Password">
                                <i class="font-sm text-grey-500 pe-0" style="margin-top: -10px">{!! $icons->getIcon('lock') !!}</i>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group icon-input mb-1">
                                <input type="Password" name="password_confirmation" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="Confirm Password">
                                <i class="font-sm text-grey-500 pe-0" style="margin-top: -10px">{!! $icons->getIcon('lock') !!}</i>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="form-check text-left mb-3">
                                <input type="checkbox" required name="terms" class="form-check-input mt-2" id="exampleCheck2">
                                <label class="form-check-label font-xsss text-grey-500" for="exampleCheck2">Accept Term and Conditions</label>
                                <!-- <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a> -->
                                <x-input-error :messages="$errors->get('terms')" class="mt-2" />
                            </div>

                            <div class="form-group mb-1">
                                <button class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</button>
                            </div>

                        </form>

                        <div class="col-sm-12 p-0 text-left">
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Already have account <a href="{{ route('login') }}" class="fw-700 ms-1">Login</a></h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
