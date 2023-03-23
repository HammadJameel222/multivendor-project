@extends('user.layouts.app')
@section('title')
    Register
@endsection
@section('content')
    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <form class="form-stl" action="{{ route('register') }}" method="post">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Create an account</h3>
                                        <h4 class="form-subtitle">Personal infomation</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="name">Name*</label>
                                        <input type="text" id="frm-reg-lname" name="name" placeholder="name*">
                                        @error('name')
                                            <span style="color:red"> {{ $message }} </span>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="email">Email Address*</label>
                                        <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                                        @error('email')
                                            <span style="color:red"> {{ $message }} </span>
                                        @enderror
                                    </fieldset>
                                    {{--  --}}
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="password">Password *</label>
                                        <input type="password" id="frm-reg-pass" name="password" placeholder="Password">
                                        @error('password')
                                            <span style="color:red"> {{ $message }} </span>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="confirm_password">Confirm Password *</label>
                                        <input type="password" id="frm-reg-cfpass" name="confirm_password"
                                            placeholder="Confirm Password">
                                        @error('confirm_password')
                                            <span style="color:red"> {{ $message }} </span>
                                        @enderror
                                    </fieldset>
                                    <input type="submit" class="btn btn-sign" value="Register" name="register">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->
@endsection


{{-- <fieldset class="wrap-functions ">
                                        <label class="remember-field">
                                            <input name="newletter" id="new-letter" value="forever"
                                                type="checkbox"><span>Sign Up for Newsletter</span>
                                        </label>
                                    </fieldset> --}}
{{-- <fieldset class="wrap-title">
                                        <h3 class="form-title">Login Information</h3>
                                    </fieldset> --}}
