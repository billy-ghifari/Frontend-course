@extends('templates.defaultcourse')

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
<title>DTC E-Learning</title>
<!-- Custom CSS -->
<link href="/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
<link href="/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
<link href="/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<!-- Custom CSS -->
<link href="dist/css/style.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js  doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Template Main CSS File -->
<link href="/public/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6" style="height: 130px; width:380px;">
                <span>
                    <a href="/blogdetail" class="btn" style="width: 40px; height:40px; background-color:#49bbbd; margin-left:10px; color:white">
                        <i class="fas fa-arrow-left"></i></a>
                </span>
                <h3 style="color:black; padding-left:10px; font-weight:500">Change Simplification</h3>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <div class="container-fluid pt-4" style="height:130px; background-color: #49BBBD; padding-left:160px;">
                    <p style="color:white; font-weight:500; font-size:35px; margin-bottom:0%">Learn about Adobe XD & Prototyping</p>
                    <div class="row">
                        <div class="col-6">
                            <p style="color:white">Introduction about XD</p>
                        </div>
                        <div class="col-6" style="text-align: end;">
                            <i class="far fa-clock text-white"><span>1 hour</span></i>
                        </div>
                    </div>
                    
                </div>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->


    <div class="page-wrapper" style="margin-left: 380px; padding-left:40px; padding-top: 150px;">
        <div class="justify-justify-content-between">
            <div class="container">
                <iframe width="1070" height="500" src="https://www.youtube.com/embed/M5K7zHainHU?si=LIQPUDqIdqQjk5LK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <div class="row mt-4 mb-3">
                    <div class="col-6 pt-5">
                        <h2 style="font-weight: 500; color:black">O6 Super Coins on the way</h2>
                    </div>
                    <div class="col-6 pr-5" style="text-align:end">
                        <a href="" class="btn" style="background-color: #49BBBD; height:60px; color:white; border-radius:10px; padding-top:16px">Tandai Sudah Dibaca</a>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet,<br>consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmodadipiscing elit, sed do eiusmodeiusmodadipiscing elit, sed do eiusmod</p>

                <h2 style="font-weight: 500; color:black; margin-top:4rem; margin-bottom:30px;">Who this course is for?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet,<br>consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmodadipiscing elit, sed do eiusmodeiusmodadipiscing elit, sed do eiusmod</p>

                <h2 style="font-weight: 500; color:black; margin-top:4rem; margin-bottom:30px;">Archievable</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet,<br>consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmodadipiscing elit, sed do eiusmodeiusmodadipiscing elit, sed do eiusmod
                    <br>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet,<br>consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmodadipiscing elit, sed do eiusmodeiusmodadipiscing elit, sed do eiusmod
                </p>

                <div class="card" style="background-color:#fcddb4; height:180px; width:1070px; margin-top:50px;">
                    <div class="row" style="padding-left: 35px; padding-top:20px; padding-bottom:20px;">
                        <img src="/assets/images/Group238.png" alt="" style="width: 60px; height:60px; margin-right:15px;">
                        <p>Bulkin Simons</p>
                        <div class="row">
                            <i class="fas fa-star" style="color: #FDB022;"></i>
                            <i class="fas fa-star" style="color: #FDB022;"></i>
                            <i class="fas fa-star" style="color: #FDB022;"></i>
                            <i class="fas fa-star" style="color: #FDB022;"></i>
                            <i class="fas fa-star" style="color: #FDB022;"></i>
                            
                        </div>
                    </div>
                    <p style="margin-left: 20px;">Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit <br>amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem</p>
                </div>

                <div class="section2" style="margin-top: 4rem;">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 pl-0
                " style="text-align: start;">
                                <p style="font-weight: 500; font-size:20px; color:black">Student also bought</p>
                            </div>
                            <div class="col-6 pr-0" style="text-align: end; ">
                                <a href="" style="font-weight: 500; color:#49BBBD;">See all</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card" style="width: 260px; border-radius:10px;">
                                    <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                                        <img src="/assets/images/Rectangle33.png" alt="" width="230" height="160">
                                        <div class="row pt-2">
                                            <div class="col-6">
                                                <img src="/assets/images/Group259.png" alt="" width="17" height="17">
                                                <span style="font-size:14px">Design</span>
                                            </div>
                                            <div class="col-6" style="text-align: end;">
                                                <i class="far fa-clock" style="font-size:14px"><span style="padding-left: 5px;">3 Month</span></i>
                                            </div>
                                            <p style="font-size: 20px; font-weight:500; color:black; margin:15px;">AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="/assets/images/Group237.png" alt="" height="35" width="35">
                                                <span style="color: black; font-size:15px; font-weight:500; margin-left:5px;">Lina</span>
                                            </div>
                                            <div class="col-6" style="text-align: end; padding-top:5px; font-size:14px">
                                                <p>$100 <span style="font-weight: 600; color:#49BBBD; padding-left:5px;">$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 260px; border-radius:10px;">
                                    <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                                        <img src="/assets/images/Rectangle33.png" alt="" width="230" height="160">
                                        <div class="row pt-2">
                                            <div class="col-6">
                                                <img src="/assets/images/Group259.png" alt="" width="17" height="17">
                                                <span style="font-size:14px">Design</span>
                                            </div>
                                            <div class="col-6" style="text-align: end;">
                                                <i class="far fa-clock" style="font-size:14px"><span style="padding-left: 5px;">3 Month</span></i>
                                            </div>
                                            <p style="font-size: 20px; font-weight:500; color:black; margin:15px;">AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="/assets/images/Group237.png" alt="" height="35" width="35">
                                                <span style="color: black; font-size:15px; font-weight:500; margin-left:5px;">Lina</span>
                                            </div>
                                            <div class="col-6" style="text-align: end; padding-top:5px; font-size:14px">
                                                <p>$100 <span style="font-weight: 600; color:#49BBBD; padding-left:5px;">$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 260px; border-radius:10px;">
                                    <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                                        <img src="/assets/images/Rectangle33.png" alt="" width="230" height="160">
                                        <div class="row pt-2">
                                            <div class="col-6">
                                                <img src="/assets/images/Group259.png" alt="" width="17" height="17">
                                                <span style="font-size:14px">Design</span>
                                            </div>
                                            <div class="col-6" style="text-align: end;">
                                                <i class="far fa-clock" style="font-size:14px"><span style="padding-left: 5px;">3 Month</span></i>
                                            </div>
                                            <p style="font-size: 20px; font-weight:500; color:black; margin:15px;">AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="/assets/images/Group237.png" alt="" height="35" width="35">
                                                <span style="color: black; font-size:15px; font-weight:500; margin-left:5px;">Lina</span>
                                            </div>
                                            <div class="col-6" style="text-align: end; padding-top:5px; font-size:14px">
                                                <p>$100 <span style="font-weight: 600; color:#49BBBD; padding-left:5px;">$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection