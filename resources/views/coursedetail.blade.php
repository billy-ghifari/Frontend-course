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
<link href="/public/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="justify-content-between">
    <div class="card" style="position: absolute; z-index:1; background-color:white; border-radius:10px; margin-left:62rem; padding: 20px; width: 370px; margin-top:17rem;">
        <img src="/assets/images/Group239.png" style="width: 330px; background-size:cover;">
        <button class="btn mb-2" type="button" style="width: 245px; height:40px; border-radius:10px; background-color:#49BBBD; font-weight:520; color:white;; margin-top:1rem;">Daftar kelas</button>
        <hr style=" border-top: 1px solid; width:100%;  height:3px; border-color:#696984">
        <p style="font-size: 19px; font-weight:500; color:black;">This Course included</p>
        <div class="row">
            <div class="col-2">
                <i class="fas fa-camera" style="color: #49BBBD; font-size:14px;"></i>
            </div>
            <div class="col-10 pl-1">
                <p style="font-size: 13px;">Access on all devices</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <i class="fas fa-file-alt" style="color: #49BBBD; font-size:14px;"></i>
            </div>
            <div class="col-10 pl-1">
                <p style="font-size: 13px;">Certification of completion</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <i class="fas fa-list-alt" style="color: #49BBBD; font-size:14px;"></i>
            </div>
            <div class="col-10 pl-1">
                <p style="font-size: 13px;">32 Moduls</p>
            </div>
        </div>
        <hr style=" border-top: 1px solid; width:100%;  height:3px; border-color:#696984">
        <p style="font-size: 19px; font-weight:500; color:black;">Training 5 or more people</p>
        <p style="font-size: 12px;">Class, launched less than a year <br> ago by Blackboard co-
            founder<br> Michael Chasen, integrates exclusively...
        </p>
        <hr style=" border-top: 1px solid; width:100%;  height:3px; border-color:#696984">
        <p style="font-size: 19px; font-weight:500; color:black; margin-bottom:25px;">Share this course</p>
        <div class="row pl-3">
            <img src="/assets/images/twitter.png" style="width: 20px; margin-right:10px;">
            <img src="/assets/images/facebook.png" style="width: 20px; margin-right:10px;">
            <img src="/assets/images/youtube.png" style="width: 20px; margin-right:10px;">
            <img src="/assets/images/instagram.png" style="width: 20px; margin-right:10px;">
            <img src="/assets/images/telegram.png" style="width: 20px; margin-right:10px;">
            <img src="/assets/images/whatsapp.png" style="width: 20px; margin-right:10px;">
        </div>
    </div>


    <div class="jumbotron" style="background-image:url(/assets/images/Group236.png);
    background-position: center center;background-repeat: no-repeat;background-size: cover; padding-top:400px; margin-top:90px ;height:500px; ">
    </div>
    <div class="section1 mt-3 mb-3">
        <div class="container">
            <div class="row mb-5">
                <div class="col-9">
                    <div class="row">
                        <button class="btn mr-4" type="button" style="width: 160px; height:50px; border-radius:10px; background-color:#e5e5e5; font-weight:520;">Overview</button>
                        <button class="btn mr-4" type="button" style="width: 160px; height:50px; border-radius:10px; background-color:#e5e5e5; font-weight:520;">Overview</button>
                        <button class="btn mr-4" type="button" style="width: 160px; height:50px; border-radius:10px; background-color:#e5e5e5; font-weight:520;">Overview</button>
                        <button class="btn" type="button" style="width: 160px; height:50px; border-radius:10px; background-color:#49BBBD; font-weight:520; color:white;">Overview</button>
                    </div>
                    <div class="card mt-4 pt-3 pb-3" style="background-color: #e2f0ff; border-radius:10px; width:700px;">
                        <div class="row pt-3">
                            <div class="col-4 pl-5">
                                <div class="card pt-3 pb-3" style="border-radius: 15px; background-color:white; text-align:center;">
                                    <p style="font-weight: 500; font-size:22px; margin-bottom:15px;">4 out of 5</p>
                                    <div class="row pb-3" style="padding-left: 62px;">
                                        <i class="fas fa-star" style="color: #FDB022;"></i>
                                        <i class="fas fa-star" style="color: #FDB022;"></i>
                                        <i class="fas fa-star" style="color: #FDB022;"></i>
                                        <i class="fas fa-star" style="color: #FDB022;"></i>
                                        <i class="fas fa-star" style="color: #FDB022;"></i>
                                    </div>
                                    <p style="font-weight: 400;">Top Rating</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>5 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress" style="height: 5px; width:280px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>4 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress" style="height: 5px; width:280px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>3 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress" style="height: 5px; width:280px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>2 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress" style="height: 5px; width:280px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>1 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress" style="height: 5px; width:280px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style=" border-top: 1px solid; width: 89%;  height:3px; border-color:#696984; margin-left:35px;">
                        <div class="row pt-2">
                            <div class="col-6" style="padding-left: 45px;">
                                <img src="/assets/images/Group237.png" style="width: 50px;">
                                <span style="margin-left: 10px; color:black;">Lina</span>
                            </div>
                            <div class="col-6 pt-5" style="text-align: end; padding-right:58px;">
                                <i class="far fa-clock" style="font-size:14px"><span style="padding-left: 5px;">3 Month</span></i>
                            </div>
                        </div>
                        <p style="margin-left: 30px; margin-top:10px;">Class, launched less than a year ago by Blackboard co-founder Michael Chasen,<br>integrates exclusively...</p>
                    </div>
                </div>
                <div class="col-3">
                </div>
            </div>

        </div>
    </div>
    <div class="section2" style="padding-bottom: 6rem; margin-bottom: 4rem; padding-top: 4rem; background-color:#e2f0ff;">
        <div class="container">
            <div class="row pb-3">
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

    <div class="section4" style="margin-bottom: 7rem; padding-top:20px">
        <div class="container">
            <div class="card" style="background-color: #23BDEE; width:110px; height:110px; position:absolute; z-index:0;
            margin-left:553px; margin-bottom:30rem; border-radius:16px">
            </div>
            <div class="card" style="background-color: #33EFA0; width:160px; height:160px; position:absolute; z-index:0;
            margin-left:978px; margin-bottom:30rem; margin-top: 223px;border-radius:16px">
            </div>
            <div class="card mt-2" style="border-radius: 50%; width:50px; height:50px; background-color:white; margin-left:825px; position:absolute; z-index:2; margin-top:180px;">
                <i class="fas fa-play" style="color: #23BDEE;  font-size: 20px;padding-top:16px; padding-left:18px;"></i>
            </div>
            <div class="row">
                <div class="col-6" style="text-align: start;">
                    <p style="color: #2F327D; margin-top:3rem; font-weight:500; font-size:25px">Everything you can do in a physical
                        <br>classroom,<span style="color:#00CBB8;">you can do with TOTC</span>
                    </p>
                    <span style="font-size: 17px;">TOTC’s school management software helps traditional
                        <br>and online schools manage scheduling, attendance,
                        <br>payments and virtual classrooms all in one secure cloud-
                        <br>based system.</span>
                    <br><a href="">
                        <p style="text-decoration: underline; color:#696984; padding-top:10px">learn more</p>
                    </a>
                </div>
                <div class="col-6">
                    <img src="/assets/images/Rectangle24.png" alt="megawati oyee" style="width:550px; height:350px; margin-top:1rem;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection