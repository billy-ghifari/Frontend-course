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
<div class="justify-content-between">
    <div class="section-1-blogpage">
        <div class="container">
            <div class="padding-top">
                <div class="row">
                    <div class="col-6 pt-3">
                        <p>Course by <span>Dinta Indonesia</span></p>
                        <h2>Why Swift UI Should Be on the
                            <br>Radar of Every Mobile
                            <br>Developer
                        </h2>
                        <p style="padding-bottom:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            <br> sed do eiusmod tempos Lorem ipsum dolor sitamet,
                            <br>consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                        <a href="" class="btn">Start Learning Now</a>
                    </div>
                    <div class="col-6">
                        <img src="/assets/images/Group401.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2-blogpage">
        <div class="container">
            <p>Reading blog list</p>
            <div class="row">

                <div class="card-floating-1 pt-2">
                    <span>UI/UX</span>
                </div>
                <div class="card-floating-2 pt-2">
                    <span>React</span>
                </div>
                <div class="card-floating-3 pt-2">
                    <span>PHP</span>
                </div>
                <div class="card-floating-4 pt-2">
                    <span>JavaScript</span>
                </div>

                <div class="col">
                    <img src="/assets/images/Group42.png">
                </div>
                <div class="col">
                    <img src="/assets/images/Group44.png">
                </div>
                <div class="col">
                    <img src="/assets/images/Group45.png">
                </div>
                <div class="col">
                    <img src="/assets/images/Rectangle341.png">
                </div>
            </div>
        </div>

    </div>
    <div class="section-3-blogpage">
        <div class="container">
            <div class="row">
                <div class="col-6 left">
                    <p class="p-title">Related Blog </p>
                </div>
                <div class="col-6 right">
                    <button class="btn" type="button" id="see-all-blog">See all</button>
                </div>
            </div>
            <div class="row mt-3 mid">
                <div class="col-6">
                    <div class="card card-left">
                        <div class="card-head">
                            <img src="/assets/images/Rectangle23.png">
                            <p>Class adds $30 million to its balance sheet for
                                <br>a Zoom-friendly edtech solution
                            </p>
                        </div>
                        <div class="card-body pt-1">
                            <img src="/assets/images/Group237.png">
                            <span class="span-name">Lina</span>
                            <p class="p-descript">Class, launched less than a year ago by Blackboard co-founder
                                <br>Michael Chasen, integrates exclusively...
                            </p>
                            <div class="row pt-4">
                                <div class="col-6 left">
                                    <a href="">
                                        <p>Read more</p>
                                    </a>
                                </div>
                                <div class="col-6 pt-2 right">
                                    <i class="fas fa-eye" style="font-size: 15px; color:#49BBBD;"><span>251,232</span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-right">
                        <div class="card-head">
                            <img src="/assets/images/Rectangle23.png">
                            <p>Class adds $30 million to its balance sheet for
                                <br>a Zoom-friendly edtech solution
                            </p>
                        </div>
                        <div class="card-body pt-1">
                            <img src="/assets/images/Group237.png">
                            <span class="span-name">Lina</span>
                            <p class="p-descript">Class, launched less than a year ago by Blackboard co-founder
                                <br>Michael Chasen, integrates exclusively...
                            </p>
                            <div class="row pt-4 pb-3">
                                <div class="col-6 left">
                                    <a href="">
                                        <p>Read more</p>
                                    </a>
                                </div>
                                <div class="col-6 pt-2 right">
                                    <i class="fas fa-eye"><span style="padding-left: 20px;">251,232</span></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden-blog" style="display: none;" id="hidden">
                <div class="row mt-3 mid">
                    <div class="col-6">
                        <div class="card card-left">
                            <div class="card-head">
                                <img src="/assets/images/Rectangle23.png">
                                <p>Class adds $30 million to its balance sheet for
                                    <br>a Zoom-friendly edtech solution
                                </p>
                            </div>
                            <div class="card-body pt-1">
                                <img src="/assets/images/Group237.png">
                                <span class="span-name">Lina</span>
                                <p class="p-descript">Class, launched less than a year ago by Blackboard co-founder
                                    <br>Michael Chasen, integrates exclusively...
                                </p>
                                <div class="row pt-4">
                                    <div class="col-6 left">
                                        <a href="">
                                            <p>Read more</p>
                                        </a>
                                    </div>
                                    <div class="col-6 pt-2 right">
                                        <i class="fas fa-eye" style="font-size: 15px; color:#49BBBD;"><span>251,232</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-right">
                            <div class="card-head">
                                <img src="/assets/images/Rectangle23.png">
                                <p>Class adds $30 million to its balance sheet for
                                    <br>a Zoom-friendly edtech solution
                                </p>
                            </div>
                            <div class="card-body pt-1">
                                <img src="/assets/images/Group237.png">
                                <span class="span-name">Lina</span>
                                <p class="p-descript">Class, launched less than a year ago by Blackboard co-founder
                                    <br>Michael Chasen, integrates exclusively...
                                </p>
                                <div class="row pt-4 pb-3">
                                    <div class="col-6 left">
                                        <a href="">
                                            <p>Read more</p>
                                        </a>
                                    </div>
                                    <div class="col-6 pt-2 right">
                                        <i class="fas fa-eye"><span style="padding-left: 20px;">251,232</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hidden-button pr-2 mb-5 ">
                <button class="btn" type="button" id="hide-all-articles">Hide</button>
            </div>
        </div>
    </div>

    <div class="section-4-blogpage pt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-6 left">
                    <p class="p-title">Recommended for you</p>
                </div>
                <div class="col-6 right">
                    <button class="btn" type="button" id="see-all-articles">see all</button>
                </div>
            </div>
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
            <div class="row hidden-button pr-2 mb-5 ">
                <button class="btn" type="button" id="hide-all-articles">Hide</button>
            </div>
        </div>
    </div>
</div>
@endsection