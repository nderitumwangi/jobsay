@extends('layouts.app')
@section('content')
    <!-- Sub Header -->
    <div class="kamkaaj-sub-header">
        <span class="kamkaaj-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Sign Up</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="kamkaaj-login-box-inner col-md-6 offset-md-3" id="source">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <center>
                            <img href=" {{route('candidate')}}" src="{{asset('images/key-exchange.png')}}"
                                 height="80" width="160" class="rounded-circle">
                        </center>
                        <br><br>
                        <button class="btn btn-block btn-lg btn-outline-success" onclick="registerOption('Employer')">
                            I am an Employer
                        </button>
                    </div>
                    <div class="col-md-6">
                        <center>
                            <img src="{{asset('images/icon-generic.svg')}}" height="80" width="160">
                        </center>
                        <br><br>
                        <button class="btn btn-block btn-lg btn-outline-primary" onclick="registerOption('Job-Seeker')">
                            I am a Job Seeker
                        </button>
                    </div>


                </div>
                <br><br>
            </div>
        </div>
        <div class="kamkaaj-login-box-inner col-md-6 offset-md-3" id="Employer" hidden>

            <h1 class="text-center">Register As An <span id="Employer-user"></span></h1>
            <form action="{{route('register.employer')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Name</label>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="Enter your name" name="Name" class="form-control" required
                                   autocomplete="Name">
                        </div>
                        @if ($errors->has('Name'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Email</label>
                        </div>
                        <div class="col-10">
                            <input type="email" placeholder="Enter your email" name="email" class="form-control"
                                   required>
                            @if($errors->has('email'))
                                <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>TelNo</label>
                        </div>
                        <div class="col-10">
                            <input type="tel" placeholder="Enter your telno" name="tel_no" class="form-control"
                                   required>
                            @if($errors->has('tel_no'))
                                <span class="text-danger">
                                            {{ $errors->first('tel_no') }}
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Address</label>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="Enter your address" name="Address" class="form-control"
                                   required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Company Details</label>
                        </div>
                        <div class="col-10">
                        <textarea type="text" placeholder="Enter your details" name="CompanyDetails"
                                  class="form-control"
                                  required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Description</label>
                        </div>
                        <div class="col-10">
                        <textarea type="text" placeholder="Enter your description" name="Description"
                                  class="form-control"
                                  required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Password</label>
                        </div>
                        <div class="col-10">
                            <input type="password" placeholder="Enter your password" name="password" class="form-control
                @if($errors->has('password')) is-invalid @endif"
                                   maxlength="10" minlength="6" required>
                            @if($errors->has('password'))
                                <span class="text-danger">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Confirm Password</label>
                        </div>
                        <div class="col-10">
                            <input type="password" placeholder="Confirm your password" name="password_confirmation"
                                   maxlength="10" minlength="6" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" value="Sign Up" class="custom-button btn-outline-secondary">
                            <span class="kamkaaj-login-info">Already have an account?
                        <a href="{{route('login')}}">Sign in!</a></span><br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="kamkaaj-login-box-inner col-md-6 offset-md-3" id="Job-Seeker" hidden>
            <h1 class="text-center">Register As A <span id="Job-Seeker-user"></span></h1>
            <form action="{{route('register.candidate')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Name</label>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="Enter your name" name="Name" class="form-control" required
                                   autocomplete="Name">
                        </div>
                        @if ($errors->has('Name'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Email</label>
                        </div>
                        <div class="col-10">
                            <input type="email" placeholder="Enter your email" name="email" class="form-control"
                                   required>
                            @if($errors->has('email'))
                                <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>TelNo</label>
                        </div>
                        <div class="col-10">
                            <input type="tel" placeholder="Enter your telno" name="tel_no" class="form-control"
                                   required>
                            @if($errors->has('tel_no'))
                                <span class="text-danger">
                                            {{ $errors->first('tel_no') }}
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Address</label>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="Enter your address" name="Address" class="form-control"
                                   required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Description</label>
                        </div>
                        <div class="col-10">
                        <textarea type="text" placeholder="Enter your description" name="Description"
                                  class="form-control"
                                  required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Password</label>
                        </div>
                        <div class="col-10">
                            <input type="password" placeholder="Enter your password" name="password" class="form-control
                @if($errors->has('password')) is-invalid @endif"
                                   maxlength="10" minlength="6" required>
                            @if($errors->has('password'))
                                <span class="text-danger">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>Confirm Password</label>
                        </div>
                        <div class="col-10">
                            <input type="password" placeholder="Confirm your password" name="password_confirmation"
                                   maxlength="10" minlength="6" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" value="Sign Up" class="custom-button btn-outline-secondary">
                            <span class="kamkaaj-login-info">Already have an account?
                        <a href="{{route('login')}}">Sign in!</a></span><br>
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>


    <script type="text/javascript">
        function registerOption(type) {
            document.getElementById('source').setAttribute('hidden', '');
            document.getElementById(type).removeAttribute("hidden");
            document.getElementById(type + '-user').innerHTML = type;
        }
    </script>
@endsection