@extends('layouts.app')
@section('content')
    <!-- Sub Header -->
    <div class="kamkaaj-sub-header">
        <span class="kamkaaj-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>ADMIN LOGIN</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <form method="post" action="{{route('admin.login')}}">
        <div class="kamkaaj-login-box-inner col-md-6 offset-md-3" id="Admin" >
            <br><br>
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
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-sm-10 offset-sm-2">
                        <input type="submit" value="Login" class="custom-button btn-success btn-block">

                    </div>
                </div>

            </div>
        </div>
            @csrf
        </form>
    </div>

    <script type="text/javascript">
        function loginOption(type) {
                document.getElementById('source').setAttribute('hidden','');
                document.getElementById(type).removeAttribute("hidden");
                document.getElementById(type+'-user').innerHTML = type;
        }
    </script>
@endsection
