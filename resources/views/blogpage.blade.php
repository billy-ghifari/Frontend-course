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
<link href="dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="justify-content-between" style="margin-bottom:5rem">
    <div class="section1" style="background-color: #ebf5ff;">
        <div class="container">
            <div class="row" style="padding-top: 11rem;">
                <div class="col-6" style="padding-top: 7px;">
                    <p>Course by <span style="color: #49BBBD; font-weight:500">Dinta Indonesia</span></p>
                    <h2 style="font-weight: 500; color:#2F327D; padding-bottom:5px;">Why Swift UI Should Be on the
                        <br>Radar of Every Mobile
                        <br>Developer
                    </h2>
                    <p style="padding-bottom:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        <br> sed do eiusmod tempos Lorem ipsum dolor sitamet,
                        <br>consectetur adipiscing elit, sed do eiusmod tempor
                    </p>
                    <a href="" class="btn" style="width: 200px; height:50px ;background-color:#49BBBD; color:white; font-weight:500; padding-top:15px; border-radius:10px; font-size:13px;">Start Learning Now</a>
                </div>
                <div class="col-6">
                    <img src="/assets/images/Group401.png" alt="" style="width: 530px; height:330px; margin-bottom:3rem;">
                </div>
            </div>
        </div>
    </div>
    <div class="section2" style="margin-top: 3rem; margin-bottom:4rem;">
        <div class="container">
            <p style="font-weight: 600; font-size:20px; color:black">Reading blog list</p>
            <div class="row">

                <div class="card pt-2" style="background:rgba(255,255,255, 0.7); width:140px; height:40px; position:absolute; z-index:1; text-align:center; margin-top:8.5rem; margin-left:4rem;">
                    <span style="color: black; font-weight:600;">UI/UX</span>
                </div>
                <div class="card pt-2" style="background:rgba(255,255,255, 0.7); width:140px; height:40px; position:absolute; z-index:1; text-align:center; margin-top:8.5rem; margin-left:21.5rem;">
                    <span style="color: black; font-weight:600;">React</span>
                </div>
                <div class="card pt-2" style="background:rgba(255,255,255, 0.7); width:140px; height:40px; position:absolute; z-index:1; text-align:center; margin-top:8.5rem; margin-left:39.5rem;">
                    <span style="color: black; font-weight:600;">PHP</span>
                </div>
                <div class="card pt-2" style="background:rgba(255,255,255, 0.7); width:140px; height:40px; position:absolute; z-index:1; text-align:center; margin-top:8.5rem; margin-left:57.5rem;">
                    <span style="color: black; font-weight:600;">JavaScript</span>
                </div>

                <div class="col">
                    <img src="/assets/images/Group42.png" alt="" style="width: 240px; height:200px;">
                </div>
                <div class="col">
                    <img src="/assets/images/Group44.png" alt="" style="width: 240px; height:200px;">
                </div>
                <div class="col">
                    <img src="/assets/images/Group45.png" alt="" style="width: 240px; height:200px;">
                </div>
                <div class="col">
                    <img src="/assets/images/Rectangle341.png" alt="" style="width: 240px; height:200px;">
                </div>
            </div>
        </div>

    </div>
    <div class="section3" style="background-color: #ebf5ff; padding-top:3rem; padding-bottom:4rem;">
        <div class="container">
            <div class="row">
                <div class="col-6" style="text-align: start;">
                    <p style="font-weight: 500; font-size:20px; color:black;">Related Blog </p>
                </div>
                <div class="col-6" style="text-align: end; ">
                    <button class="btn" type="button" style="background-color:#49BBBD; width: 100px; border-radius:10px; color:white;" id="see-all-blog">See all</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card" style="border-radius: 15px; height:613px; width:520px; margin-right:16px;">
                        <div class="card-head" style="align-self: center;">
                            <img src="/assets/images/Rectangle23.png" alt="" style="width: 460px; height:250px; margin-top: 35px;">
                            <p style="font-weight: 500; padding-top:15px; color:black; font-size:20px">Class adds $30 million to its balance sheet for
                                <br>a Zoom-friendly edtech solution
                            </p>
                        </div>
                        <div class="card-body pt-1">
                            <img src="/assets/images/Group237.png" alt="" style="width: 50px; height:50px; margin-left:15px">
                            <span style="margin-left: 10px; color:black">Lina</span>
                            <p style="padding-top: 20px;">Class, launched less than a year ago by Blackboard co-founder
                                <br>Michael Chasen, integrates exclusively...
                            </p>
                            <div class="row pt-4">
                                <div class="col-6" style="text-align: start;">
                                    <a href="">
                                        <p style="text-decoration: underline; color:#696984; padding-top:10px">Read more</p>
                                    </a>
                                </div>
                                <div class="col-6" style="text-align: end;">
                                    <i class="fas fa-eye" style="font-size: 15px; color:#49BBBD;"><span>251,232</span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="border-radius: 15px; height:613px; width:520px; margin-left:20px;">
                        <div class="card-head" style="align-self: center;">
                            <img src="/assets/images/Rectangle23.png" alt="" style="width: 460px; height:250px; margin-top: 35px;">
                            <p style="font-weight: 500; padding-top:15px; color:black; font-size:20px">Class adds $30 million to its balance sheet for
                                <br>a Zoom-friendly edtech solution
                            </p>
                        </div>
                        <div class="card-body pt-1">
                            <img src="/assets/images/Group237.png" alt="" style="width: 50px; height:50px; margin-left:15px">
                            <span style="margin-left: 10px; color:black">Lina</span>
                            <p style="padding-top: 20px;">Class, launched less than a year ago by Blackboard co-founder
                                <br>Michael Chasen, integrates exclusively...
                            </p>
                            <div class="row pt-4">
                                <div class="col-6" style="text-align: start;">
                                    <a href="">
                                        <p style="text-decoration: underline; color:#696984; padding-top:10px">Read more</p>
                                    </a>
                                </div>
                                <div class="col-6" style="text-align: end;">
                                    <i class="fas fa-eye" style="font-size: 15px; color:#49BBBD;"><span>251,232</span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden-blog" style="display: none;" id="hidden">
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="card" style="border-radius: 15px; height:613px; width:520px; margin-right:16px;">
                            <div class="card-head" style="align-self: center;">
                                <img src="/assets/images/Rectangle23.png" alt="" style="width: 460px; height:250px; margin-top: 35px;">
                                <p style="font-weight: 500; padding-top:15px; color:black; font-size:20px">Class adds $30 million to its balance sheet for
                                    <br>a Zoom-friendly edtech solution
                                </p>
                            </div>
                            <div class="card-body pt-1">
                                <img src="/assets/images/Group237.png" alt="" style="width: 50px; height:50px; margin-left:15px">
                                <span style="margin-left: 10px; color:black">Lina</span>
                                <p style="padding-top: 20px;">Class, launched less than a year ago by Blackboard co-founder
                                    <br>Michael Chasen, integrates exclusively...
                                </p>
                                <div class="row pt-4">
                                    <div class="col-6" style="text-align: start;">
                                        <a href="">
                                            <p style="text-decoration: underline; color:#696984; padding-top:10px">Read more</p>
                                        </a>
                                    </div>
                                    <div class="col-6" style="text-align: end;">
                                        <i class="fas fa-eye" style="font-size: 15px; color:#49BBBD;"><span>251,232</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="border-radius: 15px; height:613px; width:520px; margin-left:20px;">
                            <div class="card-head" style="align-self: center;">
                                <img src="/assets/images/Rectangle23.png" alt="" style="width: 460px; height:250px; margin-top: 35px;">
                                <p style="font-weight: 500; padding-top:15px; color:black; font-size:20px">Class adds $30 million to its balance sheet for
                                    <br>a Zoom-friendly edtech solution
                                </p>
                            </div>
                            <div class="card-body pt-1">
                                <img src="/assets/images/Group237.png" alt="" style="width: 50px; height:50px; margin-left:15px">
                                <span style="margin-left: 10px; color:black">Lina</span>
                                <p style="padding-top: 20px;">Class, launched less than a year ago by Blackboard co-founder
                                    <br>Michael Chasen, integrates exclusively...
                                </p>
                                <div class="row pt-4">
                                    <div class="col-6" style="text-align: start;">
                                        <a href="">
                                            <p style="text-decoration: underline; color:#696984; padding-top:10px">Read more</p>
                                        </a>
                                    </div>
                                    <div class="col-6" style="text-align: end;">
                                        <i class="fas fa-eye" style="font-size: 15px; color:#49BBBD;"><span>251,232</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pr-3" style="float: inline-end;">
                <button class="btn" type="button" style="background-color: white; width: 100px; border-radius:8px; color:#49BBBD; border-color:#49BBBD;" id="hide-all-blog">Hide</button>
            </div>
        </div>
    </div>

    <div class="section4 pt-5">
        <div class="container">
            <div class="row mb-4">
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
</div>
@endsection