@extends('layouts.layout')
@section('title')
ECR-SMS
@stop

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top:100px; margin-bottom:50px;">

            <div class="row text-center text-spaceup">

                <div class="col-md-8 col-md-offset-2">

                <h2 class="section-title-white">Sign In to continue</h2>
                <hr class="colorgraph">
                <!--divider-->
                    <div class="separator_wrapper">
                        <div class="separator_first_circle">
                        <div class="separator_second_circle">
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label sr-only">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label sr-only">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                     <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button> 
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                Don't have an Account!!! <a href="{{ route('register') }}">Sign Up
                                </a>
                                
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
