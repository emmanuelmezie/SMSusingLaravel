@extends('layouts.layout')
@section('title')
ECR-SMS | Sign Up
@stop

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top:100px; margin-bottom:50px;">

            <!--divider-->
                <div class="row text-center text-spaceup">

                    <div class="col-md-8 col-md-offset-2">

                    <h2 class="section-title-white">Register</h2>
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
                <!--divider-->

           <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label sr-only">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label sr-only">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-3 control-label sr-only">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                Already have an Account? <a href="{{ route('login') }}">Sign In
                                </a>
                                
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
