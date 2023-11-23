@extends('templates.default')

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
<title>Adminmart Template - The Ultimate Multipurpose admin template</title>
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

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<title>Bootstrap Example</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Main CSS File -->
<link href="/public/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="justify-content-between">
    <button type="submit" class="btn" style="width: 100px; background-color:#49BBBD; position:absolute; z-index: 1; cursor:pointer;
            margin-left:1025px; margin-top:70px; border-radius:8px; color:white; font-weight:500;">search</button>
    <div class="jumbotron" style="background-image:url(/assets/images/Rectangle180.png); background-position: center center;     background-repeat: no-repeat;background-size: cover; margin-top:90px; height:260px;">
        <div class="customize-input" style="padding-left: 300px;">
            <input class="form-control custom-shadow border-0 bg-white" type="search" placeholder="Search your favourite course" aria-label="Search" style="width: 800px; border-radius:8px; height:50px">
            <div class="row" style="float: inline-end; margin-right: 22.5rem;">
                <div class="dropdown col-6 pr-0" style="float:inline-end;">
                    <button class="btn dropdown-toggle mt-2" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; color:black; font-weight:500">
                        Abaliability
                    </button>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown col-6">
                    <button class="btn dropdown-toggle mt-2" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; color:black; font-weight:500">
                        Learning type
                    </button>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section2" style="margin-top: 4rem;">
        <div class="container">
            <div class="row">
                <div class="col-3">
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
                <div class="col-3">
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
                <div class="col-3">
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
                <div class="col-3">
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

            <div class="row">
                <div class="col-3">
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
                <div class="col-3">
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
                <div class="col-3">
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
                <div class="col-3">
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
    <div class="section3" style="margin-top: 5rem; margin-bottom:5rem">
        <div class="container" style="background-color: #e2f0ff; border-radius:20px;">
            <div class="row pl-5 pt-5">
                <div class="col-5 pt-5 pl-5">
                    <h2>Know about learning
                        <br>learning platform
                    </h2>
                    <div class="row pt-3">
                        <div class="col-1 pr-0"><i class="fas fa-circle" style="width: 15px; height:15px; color:#55EFC4;">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Free E-book, video & consolation</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 pr-0"><i class="fas fa-circle" style="width: 15px; height:15px; color:#55EFC4;">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Top instructors from around world</p>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-1 pr-0"><i class="fas fa-circle" style="width: 15px; height:15px; color:#55EFC4;">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Top courses from your team</p>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn" style="background-color: #49BBBD; height:45px; width:200px;">
                            <p style="font-weight:600;color:white; margin-top:3px;">Start Learning now</p>
                        </button>
                    </div>
                </div>
                <div class="col-7">
                    <img src="/assets/images/Group71.png" alt="" style="width: 700px; height: 430px;">
                </div>
            </div>
        </div>
    </div>

    <div class="section4" style="padding-bottom: 6rem; margin-bottom: 4rem; padding-top: 4rem; background-color:#e2f0ff;">
        <div class="container">
            <div class="row">
                <div class="col-6" style="text-align: start;">
                    <p style="font-weight: 500; font-size:20px; color:black">Recommended for you</p>
                </div>
                <div class="col-6 " style="text-align: end; ">
                    <a href="" style="font-weight: 500; color:#49BBBD; padding-right:15px;">See all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
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
                <div class="col-3">
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
                <div class="col-3">
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
                <div class="col-3">
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


@endsection