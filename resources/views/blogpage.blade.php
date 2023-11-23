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

<!-- Template Main CSS File -->
<link href="/public/dist/css/style.css" rel="stylesheet">
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
                <div class="col">
                    <img src="/assets/images/Group42.png" alt="" style="width: 240px; height:200px;">
                </div>
                <div class="col">
                    <img src="/assets/images/Group42.png" alt="" style="width: 240px; height:200px;">
                </div>
                <div class="col">
                    <img src="/assets/images/Group42.png" alt="" style="width: 240px; height:200px;">
                </div>
                <div class="col">
                    <img src="/assets/images/Group42.png" alt="" style="width: 240px; height:200px;">
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
                <div class="col-6 " style="text-align: end; ">
                    <a href="" style="font-weight: 500; color:#49BBBD; padding-right:15px;">See all</a>
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
        </div>
    </div>

</div>
@endsection