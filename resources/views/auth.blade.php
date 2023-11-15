@extends('templates.defaultlogreg')

@section('content')
<div class="justify-content-between" id="container1auth" style="padding: 5rem;">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="assets/images/login_icon.png" alt="" style="width: 320px; margin-left:6.5rem">
                <h2 style="font-weight: bold;  margin-left:4rem;  color:#3C3A36">Metode Belajar Yang Seru</h2>
            </div>
            <div class=" col-6">
                <div class="container">

                    <p style="font-weight: 400; text-align:center; color:black;">Selamat Datang !</p>
                    <!-- upper button section to select
      the login or signup form -->
                    <div class="slider"></div>
                    <div id="btn">
                        <button class="login" style="margin-left: 6px;">Login</button>
                        <button class="signup" style="margin-left: 24px;">Register</button>
                    </div>

                    <!-- Form section that contains the
      login and the signup form -->
                    <div class="form-section">

                        <!-- login form -->
                        <div class="login-box">
                            <form action="">
                                <span class="pb-3">Masukkan email dan password yang telah terdaftar.</span>
                                <p>Email</p>
                                <input type="email" class="email ele" placeholder="Masukkan Email Anda !">
                                <p>Password</p>
                                <input type="password" class="password ele" placeholder="Masukkan Email Password !">
                                <div style=" text-align: center; margin-top: 16px;">
                                    <a href=" #" style="font-family: 'poppins', 'sans-serif';">Lupa Password?</a>
                                </div>
                                <div style="text-align: center; margin-top: 16px;">
                                    <button type="submit" id="buttonauth" class="btn">Login</button>
                                </div>
                            </form>
                        </div>

                        <!-- signup form -->
                        <div class="signup-box">
                            <form action="">
                                <span class="pb-3">Masukkan email dan password yang telah terdaftar.</span>
                                <p>Nama</p>
                                <input type="text" placeholder="Masukan Nama Anda" class="nama ele">
                                <p>Email</p>
                                <input type="email" placeholder="Masukan Email Anda" class="email ele">
                                <p>Password</p>
                                <input type="password" placeholder="Masukan Password Anda !" class="password ele">
                                <div style="text-align: center; margin-top: 16px;">
                                    <button type=" submit" id="buttonauth" class="btn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection