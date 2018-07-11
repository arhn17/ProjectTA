@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="block-header">
        <h2>REGISTER</h2>
    </div>
            <div class="card">
                

                <div class="body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                                <label for="email_address">Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                
                                <label for="email_address">Email Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                                
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                                    </div>
                                </div>

                                <label for="password-confirm">Confirm Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" placeholder="Enter your password" name="password_confirmation" required>

                                
                                @if ($errors->has('password-confirm'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>

                                <input type="checkbox" id="remember_me" class="filled-in">
                                <label for="remember_me">Remember Me</label>
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">REGISTER</button>
                            </form>

                       <!-- <div class="row clearfix">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="form-group">
                                <div class="form-line">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="form-line">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row clearfix">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="form-line">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row clearfix">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="form-line">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Enter your confirm password" name="password_confirmation" required>
                            </div>
                        </div>

                        <input type="checkbox" id="remember_me" class="filled-in">
                                <label for="remember_me">Remember Me</label>
                                <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
