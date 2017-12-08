@extends('layouts.layout')
@section('title')
ECR-SMS | Password Reset
@stop

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top:95px; margin-bottom:50px;">
              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                     <!--divider-->
                <div class="row text-center text-spaceup">

                    <div class="col-md-8 col-md-offset-2">

                    <h2 class="section-title-white">Reset Password</h2>
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

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label sr-only">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
