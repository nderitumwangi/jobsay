@extends('layouts.app')
@section('content')
    <!-- Sub Header -->
    <div class="kamkaaj-sub-header">
        <span class="kamkaaj-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>LOGIN</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="kamkaaj-login-box-inner col-md-6 offset-md-3" id="source">
            <br>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                        @include('inc.alerts')
                    </div>
                    <div class="col-md-6">
                        <center>
                        <img  href=" {{route('candidate.post.login')}}" src="{{asset('images/key-exchange.png')}}"
                              height="80" width="160" class="rounded-circle" >
                        </center>
                        <br><br>
                        <button class="btn btn-block btn-lg btn-outline-success" onclick="loginOption('Employer')">
                            I am an Employer</button>
                    </div>
                    <div class="col-md-6">
                       <center>
                        <img src="{{asset('images/icon-generic.svg')}}" height="80" width="160" >
                       </center>
                        <br><br>
                        <button class="btn btn-block btn-lg btn-outline-primary" onclick="loginOption('Job-seeker')">
                            I am a Job Seeker</button>
                    </div>

                
            </div>
            <br><br>
        </div>
    </div>
        <div class="kamkaaj-login-box-inner col-md-6 offset-md-3" id="Job-seeker" hidden>
            <br><br>
            <h1 class="text-center">Login As <span id="Job-seeker-user"></span> </h1>
            <form method="post" action="{{route('candidate.post.login')}}">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>email</label>
                        </div>
                        <div class="col-10">
                            <input type="email" placeholder="Enter your email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label>password</label>
                        </div>
                        <div class="col-10">
                            <input type="password" placeholder="Enter your password" name="password" class="form-control"
                                   minlength="6" maxlength="10">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="Remember"
                                   id="remember"{{ old('remember') }} >
                            <label class="form-check-label" for="remember">
                                {{_('Remember Me')}}
                            </label>
                        </div>
                    </div>
                </div>
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-sm-10 offset-sm-2">
                            <input type="submit" value="Login"
                                   class="custom-button btn-success btn-block">
                            <span class="kamkaaj-login-info"><br>Don't have an account?
                        <a href="{{route('register')}}">Sign up!</a></span>
                        </div>
                    </div>
                </div>
                <br><br>
            </form>
        </div>
        <div class="kamkaaj-login-box-inner col-md-6 offset-md-3" id="Employer" hidden>
            <br><br>
            <h1 class="text-center">Login As An <span id="Employer-user"></span> </h1>
            <form method="post" action="{{route('employer.post.login')}}">
             <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label>Email</label>
                    </div>
                    <div class="col-10">
                        <input type="email" placeholder="Enter your email" name="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label>Password</label>
                    </div>
                    <div class="col-10">
                        <input type="password" placeholder="Enter your password" name="password" class="form-control"
                               minlength="6" maxlength="10">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Remember"
                               id="remember"{{ old('remember') }} >
                            <label class="form-check-label" for="remember">
                                {{_('Remember Me')}}
                            </label>
                        </div>
                    </div>
            </div>
                @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-sm-10 offset-sm-2">
                        <input type="submit" class="custom-button btn-success btn-block" value="Login">
                        <span class="kamkaaj-login-info"><br>Don't have an account?
                        <a href="{{route('register')}}">Sign up!</a></span>
                    </div>
                </div>
            </div>
            <br><br>
            </form>
        </div>


    <script type="text/javascript">
        function loginOption(type) {
                document.getElementById('source').setAttribute('hidden','');
                document.getElementById(type).removeAttribute("hidden");
                document.getElementById(type+'-user').innerHTML = type;
        }
    </script>
    </div>
@endsection
