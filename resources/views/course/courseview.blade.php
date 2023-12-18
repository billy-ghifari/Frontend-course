@extends('templates.defaultcourse')

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="photo/dtc.png">
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
<link href="/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="main-wrapper" id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
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


    <div class="page-wrapper section-courseview" style="margin-left: 380px; padding-top: 150px;">
        <div class="container-fluid">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/M5K7zHainHU?si=LIQPUDqIdqQjk5LK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="row mt-4 mb-3">
                <div class="col-6 pt-5">
                    <h2>O6 Super Coins on the way</h2>
                </div>
                <div class="col-6 pr-5">
                    <a href="" class="btn">Tandai Sudah Dibaca</a>
                </div>
            </div>
            <div class="container-fluid">
                <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodeiusmodadipiscing elit, sed do eiusmod</p>

                <h2 class="text-head">Who this course is for?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodeiusmodadipiscing elit, sed do eiusmod</p>

                <h2 class="text-head">Archievable</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodeiusmodadipiscing elit, sed do eiusmod
                    Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodeiusmodadipiscing elit, sed do eiusmod
                </p>
            </div>
            <div class="card mr-3">
                <div class="row">
                    <img src="/assets/images/Group238.png" alt="">
                    <p>Bulkin Simons</p>
                    <div class="row">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                </div>
                <p class="ml-4">Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodadipiscing elit, sed do eiusmodLorem</p>
            </div>

            <div class="section-course-view">
                <div class="section-4-blogpage pt-5">
                    <div class="row mb-4 mr-1">
                        <div class="col-6 left">
                            <p class="p-title">Marketing Articles</p>
                        </div>
                        <div class="col-6 right">
                            <button class="btn" type="button" id="see-all-articles">see all</button>
                        </div>
                    </div>
                    <div class="row mr-1">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-head pt-3">
                                    <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                    <div class="row pt-3">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group259.png" width="17" height="17">
                                            <span>Design</span>
                                        </div>
                                        <div class="col-6 left">
                                            <i class="far fa-clock"><span>3 Month</span></i>
                                        </div>
                                        <p>AWS Certified solutions
                                            <br>Architect
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pl-3">
                                    <p class="p-descript">Lorem ipsum dolor sit amet,
                                        <br>consectetur adipising elit, sed do
                                        <br>eiusmod tempor
                                    </p>
                                    <div class="row pt-2">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group237.png" height="35" width="35">
                                            <span>Lina</span>
                                        </div>
                                        <div class="col-6 left">
                                            <p>$100 <span>$80</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-head pt-3">
                                    <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                    <div class="row pt-3">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group259.png" width="17" height="17">
                                            <span>Design</span>
                                        </div>
                                        <div class="col-6 left">
                                            <i class="far fa-clock"><span>3 Month</span></i>
                                        </div>
                                        <p>AWS Certified solutions
                                            <br>Architect
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pl-3">
                                    <p class="p-descript">Lorem ipsum dolor sit amet,
                                        <br>consectetur adipising elit, sed do
                                        <br>eiusmod tempor
                                    </p>
                                    <div class="row pt-2">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group237.png" height="35" width="35">
                                            <span>Lina</span>
                                        </div>
                                        <div class="col-6 left">
                                            <p>$100 <span>$80</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-head pt-3">
                                    <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                    <div class="row pt-3">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group259.png" width="17" height="17">
                                            <span>Design</span>
                                        </div>
                                        <div class="col-6 left">
                                            <i class="far fa-clock"><span>3 Month</span></i>
                                        </div>
                                        <p>AWS Certified solutions
                                            <br>Architect
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pl-3">
                                    <p class="p-descript">Lorem ipsum dolor sit amet,
                                        <br>consectetur adipising elit, sed do
                                        <br>eiusmod tempor
                                    </p>
                                    <div class="row pt-2">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group237.png" height="35" width="35">
                                            <span>Lina</span>
                                        </div>
                                        <div class="col-6 left">
                                            <p>$100 <span>$80</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-head pt-3">
                                    <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                    <div class="row pt-3">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group259.png" width="17" height="17">
                                            <span>Design</span>
                                        </div>
                                        <div class="col-6 left">
                                            <i class="far fa-clock"><span>3 Month</span></i>
                                        </div>
                                        <p>AWS Certified solutions
                                            <br>Architect
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pl-3">
                                    <p class="p-descript">Lorem ipsum dolor sit amet,
                                        <br>consectetur adipising elit, sed do
                                        <br>eiusmod tempor
                                    </p>
                                    <div class="row pt-2">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group237.png" height="35" width="35">
                                            <span>Lina</span>
                                        </div>
                                        <div class="col-6 left">
                                            <p>$100 <span>$80</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-articles" style="display: none;">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-head pt-3">
                                        <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                        <div class="row pt-3">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group259.png" width="17" height="17">
                                                <span>Design</span>
                                            </div>
                                            <div class="col-6 left">
                                                <i class="far fa-clock"><span>3 Month</span></i>
                                            </div>
                                            <p>AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p class="p-descript">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row pt-2">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group237.png" height="35" width="35">
                                                <span>Lina</span>
                                            </div>
                                            <div class="col-6 left">
                                                <p>$100 <span>$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-head pt-3">
                                        <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                        <div class="row pt-3">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group259.png" width="17" height="17">
                                                <span>Design</span>
                                            </div>
                                            <div class="col-6 left">
                                                <i class="far fa-clock"><span>3 Month</span></i>
                                            </div>
                                            <p>AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p class="p-descript">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row pt-2">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group237.png" height="35" width="35">
                                                <span>Lina</span>
                                            </div>
                                            <div class="col-6 left">
                                                <p>$100 <span>$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-head pt-3">
                                        <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                        <div class="row pt-3">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group259.png" width="17" height="17">
                                                <span>Design</span>
                                            </div>
                                            <div class="col-6 left">
                                                <i class="far fa-clock"><span>3 Month</span></i>
                                            </div>
                                            <p>AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p class="p-descript">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row pt-2">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group237.png" height="35" width="35">
                                                <span>Lina</span>
                                            </div>
                                            <div class="col-6 left">
                                                <p>$100 <span>$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-head pt-3">
                                        <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                        <div class="row pt-3">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group259.png" width="17" height="17">
                                                <span>Design</span>
                                            </div>
                                            <div class="col-6 left">
                                                <i class="far fa-clock"><span>3 Month</span></i>
                                            </div>
                                            <p>AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p class="p-descript">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row pt-2">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group237.png" height="35" width="35">
                                                <span>Lina</span>
                                            </div>
                                            <div class="col-6 left">
                                                <p>$100 <span>$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row hidden-button pr-2 mb-5 mr-1">
                        <button class="btn" type="button" id="hide-all-articles">Hide</button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    @endsection