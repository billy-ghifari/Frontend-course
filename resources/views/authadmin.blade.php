@extends('templates.defaultlogreg')

@section('content')
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">
        <div class="auth-box" style="text-align: -webkit-center; width: 70rem;">
            <div class="col-lg-5 col-md-7 bg-white">
                <div class="p-3">
                    <div class="text-center">
                        <i class="fas fa-user-secret" style="font-size: 4rem;"></i>
                    </div>
                    <h2 class="mt-3 text-center">Welcome to the back stage</h2>
                    <p class="text-center">Enter your email address and password to access admin panel.</p>
                    <form class="mt-4" action="/loginadmin" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="uname">Username</label>
                                    <input class="form-control" name="email" id="uname" type="text" placeholder="enter your username">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="pwd">Password</label>
                                    <input class="form-control" name="password" id="pwd" type="password" placeholder="enter your password">
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection