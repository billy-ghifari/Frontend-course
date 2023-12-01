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

<!-- <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<title>Bootstrap Example</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- Template Main CSS File -->
<link href="/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="justify-content-between">
    <div class="jumbotron" style="background-image:url(/assets/images/Rectangle180.png); background-position: center center;     background-repeat: no-repeat;background-size: cover; margin-top:90px; height:260px;">
        <div class="justify-content-between">
            <div class="container">
                <button type="submit" class="btn" style="width: 100px; background-color:#49BBBD; position:absolute; z-index: 1; cursor:pointer; border-radius:8px; color:white; font-weight:500; margin-left:54.5rem; margin-top: 6px;">search</button>
                <div class="customize-input " style="padding-left: 180px;">
                    <input class="form-control custom-shadow border-0 bg-white mb-2" type="search" placeholder="Search your favourite course" aria-label="Search" style="width: 800px; border-radius:8px; height:50px;">

                    <div class="row pr-2" style="float: inline-end; margin-right: 7.5rem;">
                        <div class="dropdown pr-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 7px; background-color:white; color:black; border-style:none;">
                                Abaliability
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 7px; background-color:white; color:black; border-style:none;">
                                Learning Type
                            </button>
                            <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="section2" style="margin-top: 4rem;">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
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
                    <p style="font-weight: 510; font-size:28px;">Know about learning
                        <br>learning platform
                    </p>
                    <div class="row pt-3">
                        <div class="col-1 pr-0"><i class="fas fa-circle" style="width: 15px; height:15px; color:#55EFC4;">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Free E-book, video & consolation</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-1 pr-0"><i class="fas fa-circle" style="width: 15px; height:15px; color:#55EFC4;">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Top instructors from around world</p>
                        </div>
                    </div>
                    <div class="row pb-3 pt-2">
                        <div class="col-1 pr-0"><i class="fas fa-circle" style="width: 15px; height:15px; color:#55EFC4;">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Top courses from your team</p>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn" style="background-color: #49BBBD; height:45px; width:200px; border-radius:10px;">
                            <p style="font-weight:600;color:white; margin-top:3px;">Start Learning now</p>
                        </button>
                    </div>
                </div>
                <div class="col-7">
                    <img src="/assets/images/Group71.png" alt="" style="width: 630px; height: 400px;">
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
                    <button class="btn" type="button" style="background-color:#49BBBD; width: 100px; border-radius:10px; color:white;" id="see-all-articles">see all</button>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
                        <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                            <img src="/assets/images/Rectangle36.png" alt="" width="230" height="160">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
                        <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px; ">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
                        <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                            <img src="/assets/images/Rectangle32.png" alt="" width="230" height="160">
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
                    <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
                        <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                            <img src="/assets/images/Rectangle35.png" alt="" width="230" height="160">
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
            <div class="hidden-articles" style="display: none;">
                <div class="row">
                    <div class="col-3">
                        <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
                            <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                                <img src="/assets/images/Rectangle36.png" alt="" width="230" height="160">
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
                        <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
                            <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px; ">
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
                        <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
                            <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                                <img src="/assets/images/Rectangle32.png" alt="" width="230" height="160">
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
                        <div class="card" style="width: 260px; border-radius:10px; border-style:none;">
                            <div class="card-head pt-3" style="padding-left: 15px; padding-right: 15px;">
                                <img src="/assets/images/Rectangle35.png" alt="" width="230" height="160">
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
            <div class="row pr-2" style="float: inline-end;">
                <button class="btn" type="button" style="background-color: white; width: 100px; border-radius:8px; color:#49BBBD; border-color:#49BBBD;" id="hide-all-articles">Hide</button>
            </div>
        </div>
    </div>

    <div class="section5">
        <div class="container">

            <img src="/assets/images/image10.png" alt="" style="width: 200px; height:200px; position:absolute; z-index: 1;
           margin-top:70px; margin-left:75px;">

            <img src="/assets/images/image11.png" alt="" style="width: 200px; height:200px; position:absolute; z-index: 1;
            margin-top:70px; margin-left:455px;">

            <img src="/assets/images/image12.png" alt="" style="width: 200px; height:200px; position:absolute; z-index: 1;
            margin-top:70px; margin-left:835px;">

            <div class="row" style="margin-bottom: 120px;">
                <div class="col-6">
                    <p style="font-weight:600; font-size:23px;">Classes tought by real creators</p>
                </div>
                <div class="col-6" style="text-align: end;">
                    <a href="" style="color: #49BBBD; font-weight:600;">
                        <p>See all</p>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card" style="text-align: center; height:250px; border-style:none;">
                        <div class="card-body" style="padding-top:130px;">
                            <p style="font-weight:600; font-size:21px;">Jane Cooper</p>
                            <p style="color: #252641; font-size:14px;">Lorem ipsum dolor sit amet, consectetur
                                <br> adipising elit, sed do eiusmod tempor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="text-align: center; height:250px; border-style:none;">
                        <div class="card-body" style="padding-top:130px;">
                            <p style="font-weight:600; font-size:21px;">Jane Cooper</p>
                            <p style="color: #252641; font-size:14px;">Lorem ipsum dolor sit amet, consectetur
                                <br> adipising elit, sed do eiusmod tempor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="text-align: center; height:250px; border-style:none;">
                        <div class="card-body" style="padding-top:130px;">
                            <p style="font-weight:600; font-size:21px;">Jane Cooper</p>
                            <p style="color: #252641; font-size:14px;">Lorem ipsum dolor sit amet, consectetur
                                <br> adipising elit, sed do eiusmod tempor
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <img src="/assets/images/image10.png" alt="" style="width: 200px; height:200px; position:absolute; z-index: 1;
           margin-left:75px;">

            <img src="/assets/images/image11.png" alt="" style="width: 200px; height:200px; position:absolute; z-index: 1;
            margin-left:455px;">

            <img src="/assets/images/image12.png" alt="" style="width: 200px; height:200px; position:absolute; z-index: 1;
            margin-left:835px;">

            <div style="margin-top: 6rem;">
                <div class="row">
                    <div class="col-4">
                        <div class="card" style="text-align: center; height:250px; border-style:none;">
                            <div class="card-body" style="padding-top:130px;">
                                <p style="font-weight:600; font-size:21px;">Jane Cooper</p>
                                <p style="color: #252641; font-size:14px;">Lorem ipsum dolor sit amet, consectetur
                                    <br> adipising elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="text-align: center; height:250px; border-style:none;">
                            <div class="card-body" style="padding-top:130px;">
                                <p style="font-weight:600; font-size:21px;">Jane Cooper</p>
                                <p style="color: #252641; font-size:14px;">Lorem ipsum dolor sit amet, consectetur
                                    <br> adipising elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="text-align: center; height:250px; border-style:none;">
                            <div class="card-body" style="padding-top:130px;">
                                <p style="font-weight:600; font-size:21px;">Jane Cooper</p>
                                <p style="color: #252641; font-size:14px;">Lorem ipsum dolor sit amet, consectetur
                                    <br> adipising elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section6 pb-4 pt-2" style="background-color: #e2f0ff; margin-bottom:4rem;">
        <div class="container">
            <p style="margin-top: 3rem; margin-bottom:3rem; font-size: 22px; font-weight:600">What our students have to say</p>
        </div>

        <div class="container pt-5 pb-5" style="background-color:white; margin-bottom:4rem; border-radius:20px;">
            <div class="row">
                <div class="col-5 pl-5">
                    <img src="/assets/images/Group368.png" alt="" style="width:410px; height:392px;">
                </div>
                <div class="col-6 pl-5" style="padding-top:60px;">
                    <p style="font-weight: 800; font-size:21px;">Savannah Nguyen</p>
                    <p style="font-size: 16px; font-weight:600">tanya.hill@example.com</p>
                    <p style="color: #696984; font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipising elit, <br> sed do eiusmod tempor
                        <br>Lorem ipsum dolor sit amet, consectetur adipising elit,<br> sed do eiusmod tempor
                        <br>Lorem ipsum dolor sit amet, consectetur adipising elit,<br> sed do eiusmod tempor
                    </p>
                    <i class="fab fa-twitter-square pr-3 mt-3" style="color: #49BBBD; font-size:20px;"></i>
                    <i class="fab fa-facebook pr-3" style="color: #49BBBD; font-size:20px;"></i>
                    <i class="fab fa-instagram" style="color:#49BBBD; font-size:20px;"></i>
                </div>
                <div class="col-1" style="padding-top: 100px;">
                    <div class="row">
                        <img src="/assets/images/image10.png" alt="" style="width:60px; border-radius:50%; ">
                        <img src="/assets/images/image11.png" alt="" style="width:60px; border-radius:50%; margin-top:15px;">
                        <img src="/assets/images/image12.png" alt="" style="width:60px; border-radius:50%; margin-top:15px;">
                        <img src="/assets/images/image11.png" alt="" style="width:60px; border-radius:50%; margin-top:15px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section7" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row" style="margin-bottom: 40px;">
                <div class="col-6">
                    <p style="font-weight:600; font-size:23px;">Top Education offers and deals are listed here</p>
                </div>
                <div class="col-6" style="text-align: end;">
                    <a href="" style="color: #49BBBD; font-weight:600;">
                        <p>See all</p>
                    </a>
                </div>
            </div>

            <div style="position: absolute; z-index:1; margin-left:25px; margin-top:30px;">
                <button type="button " class="btn mb-3" style="width: 90px; height: 90px; background-color:#49BBBD; font-size:35px; font-weight:700; color:white;">50%</button>
                <p style="color: white; font-weight:600; font-size:20px;">Lorem ipsum dolor</p>
                <p style="color: white; font-size:14px;">Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                    <br>Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                </p>
            </div>

            <div style="position: absolute; z-index:1; margin-left:423px; margin-top:40px;">
                <button type="button " class="btn mb-3" style="width: 90px; height: 90px; background-color:#49BBBD; font-size:35px; font-weight:700; color:white;">50%</button>
                <p style="color: white; font-weight:600; font-size:20px;">Lorem ipsum dolor</p>
                <p style="color: white; font-size:14px;">Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                    <br>Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                </p>
            </div>

            <div style="position: absolute; z-index:1; margin-left:820px; margin-top:40px;">
                <button type="button " class="btn mb-3" style="width: 90px; height: 90px; background-color:#49BBBD; font-size:35px; font-weight:700; color:white;">50%</button>
                <p style="color: white; font-weight:600; font-size:20px;">Lorem ipsum dolor</p>
                <p style="color: white; font-size:14px;">Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                    <br>Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                </p>
            </div>

            <div class="row">
                <div class="col-4">
                    <img src="/assets/images/Rectangle187.png" alt="" style="background-size:cover; width:330px;">
                </div>
                <div class="col-4" style="padding-left: 30px;">
                    <img src="/assets/images/Rectangle188.png" alt="" style="background-size:cover; width:330px;">
                </div>
                <div class="col-4 pl-5">
                    <img src="/assets/images/Rectangle189.png" alt="" style="background-size:cover; width:330px; ">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection