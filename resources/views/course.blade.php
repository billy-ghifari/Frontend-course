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

<!-- Template Main CSS File -->
<link href="/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="justify-content-between">
    <div class="section1" style="margin-top: 8rem;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: start;">
                    <p style="font-size:21px; font-weight:600;">Welcome back, ready for your next lesson?</p>
                </div>
                <div class="col" style="text-align: end;">
                    <a href="" style="font-weight: 500; color:#49BBBD">View History</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div class="card" style="width: 355px; height:370px; border-radius:10px;">
                        <img src="/assets/images/Group40.png" alt="" width="340px;" style="padding-top:15px; padding-left:15px; padding-bottom:20px;">
                        <p style="margin-left:15px;">AWS Certified Solutions Architect</p>
                        <div class="row" style="margin-left:15px;">
                            <img src="/assets/images/Group237.png" alt="" width="40px">
                            <span style="margin-top:10px; margin-left:10px;">Lina</span>
                        </div>

                        <div style="text-align: end; margin-top:3rem; margin-right:15px; font-size:13px; font-weight:500">
                            lesson 5 of 7
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 355px; height:370px; border-radius:10px;">
                        <img src="/assets/images/Group40.png" alt="" width="340px;" style="padding-top:15px; padding-left:15px; padding-bottom:20px;">
                        <p style="margin-left:15px;">AWS Certified Solutions Architect</p>
                        <div class="row" style="margin-left:15px;">
                            <img src="/assets/images/Group237.png" alt="" width="40px">
                            <span style="margin-top:10px; margin-left:10px;">Lina</span>
                        </div>

                        <div style="text-align: end; margin-top:3rem; margin-right:15px; font-size:13px; font-weight:500">
                            lesson 5 of 7
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 355px; height:370px; border-radius:10px;">
                        <img src="/assets/images/Group40.png" alt="" width="340px;" style="padding-top:15px; padding-left:15px; padding-bottom:20px;">
                        <p style="margin-left:15px;">AWS Certified Solutions Architect</p>
                        <div class="row" style="margin-left:15px;">
                            <img src="/assets/images/Group237.png" alt="" width="40px">
                            <span style="margin-top:10px; margin-left:10px;">Lina</span>
                        </div>

                        <div style="text-align: end; margin-top:3rem; margin-right:15px; font-size:13px; font-weight:500">
                            lesson 5 of 7
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="float: inline-end; padding-right:10px; margin-bottom:4rem;">
                <button type="button" class="btn mr-2" style="color: #fff; width: 40px; background-color:#49BBBD">
                    < </button>
                        <button type="button" class="btn" style="color: #fff; width: 40px; background-color:#49BBBD"> > </button>
            </div>
        </div>
    </div>

    <div class="section2" style="margin-top: 3rem;">
        <div class="container">
            <p style="font-size:21px; font-weight:600; margin-bottom:2rem;">Choice favourite course from top category</p>
            <div class="row">
                <div class="col-3">
                    <div class="card pb-2" style="text-align: center; border-radius:10px;">
                        <div class="card" style="background-color: #c8ebeb; width:70px; height:70px; text-align:center; margin-left:6rem; margin-top:2rem; padding-top:25px;">
                            <i class="fas fa-paint-brush" style="color: #49BBBD; font-size:25px;"></i>
                        </div>
                        <p style="font-size: 20px; font-weight:600">Design</p>
                        <p style="font-size:13px; color:#696984;">Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit,
                            <br>sed do eiusmodadipiscing elit,
                            <br>sed do eiusmod
                        </p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card pb-2" style="text-align: center; border-radius:10px;">
                        <div class="card" style="background-color: #ced5fa; width:70px; height:70px; text-align:center; margin-left:6rem; margin-top:2rem; padding-top:25px;">
                            <i class=" fas fa-laptop" style="color: #5B72EE; font-size:25px;"></i>
                        </div>
                        <p style="font-size: 20px; font-weight:600">Development</p>
                        <p style="font-size:13px; color:#696984;">Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit,
                            <br>sed do eiusmodadipiscing elit,
                            <br>sed do eiusmod
                        </p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card pb-2" style="text-align: center; border-radius:10px; ">
                        <div class="card" style="background-color: #fcddb4; width:70px; height:70px; text-align:center; margin-left:6rem; margin-top:2rem; padding-top:25px;">
                            <i class="fas fa-diagnoses" style="color: #F48C06; font-size:25px;"></i>
                        </div>
                        <p style="font-size: 20px; font-weight:600">Marketing</p>
                        <p style="font-size:13px; color:#696984;">Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit,
                            <br>sed do eiusmodadipiscing elit,
                            <br>sed do eiusmod
                        </p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card pb-2" style="text-align: center; border-radius:10px; ">
                        <div class="card" style="background-color:#b3efea; width:70px; height:70px; text-align:center; margin-left:6rem; margin-top:2rem; padding-top:25px;">
                            <i class="fas fa-briefcase" style="color: #00CBB8; font-size:25px;"></i>
                        </div>
                        <p style="font-size: 20px; font-weight:600">Business</p>
                        <p style="font-size:13px; color:#696984;">Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit,
                            <br>sed do eiusmodadipiscing elit,
                            <br>sed do eiusmod
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section3 mt-4" style="padding-bottom: 6rem; margin-bottom: 4rem; padding-top: 4rem; background-color:#e2f0ff;">
        <div class="container">
            <div class="row mb-3">
                <div class="col-6" style="text-align: start;">
                    <p style="font-weight: 600; font-size:20px; color:black">Recommended for you</p>
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
    <div class="section pb-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-6" style="text-align: start;">
                    <p style="font-weight: 600; font-size:20px; color:black">Get choice of your course</p>
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

        <div class="container" style="margin-top: 3rem;background-color: #252641; text-align:center; border-radius:20px; height:330px; padding-top:50px; padding-bottom:50px;">
            <p style="color: white; font-size:25px; font-weight:510;">Online coaching lessons for remote learning.</p>
            <p style="color: white; margin-top:2rem; margin-bottom:3rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempos Lorem ipsum dolor <br>sitamet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            <button class="btn" type="button" style="background-color: #49BBBD; color:white; height:50px; width:200px; border-radius:10px;">
                Start learning now
            </button>
        </div>
    </div>
    <div class="section mt-4 mb-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-6" style="text-align: start;">
                    <p style="font-weight: 600; font-size:20px; color:black">The course in personal development</p>
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
</div>
</div>

@endsection