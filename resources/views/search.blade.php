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
    <div class="jumbotron j-search">
        <div class="justify-content-between">
            <div class="container">
                <button type="submit" class="btn btn-search">search</button>
                <div class="customize-input input">
                    <input class="form-control custom-shadow border-0 bg-white mb-2" type="search" placeholder="Search your favourite course" aria-label="Search">
                    <div class="row row-dropdown pr-2">
                        <div class="dropdown pr-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Abaliability
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ii>
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

    <div class="section-2-search">
        <div class="section-4-blogpage pt-5">
            <div class="container">
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
        </div>
        <div class="section-4-blogpage pt-5">
            <div class="container">
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
        </div>
    </div>
    <div class="section-3-search">
        <div class="container">
            <div class="row pl-5 pt-5">
                <div class="col-5 pt-5 pl-5">
                    <p class="text-head">Know about learning
                        <br>learning platform
                    </p>
                    <div class="row pt-3">
                        <div class="col-1 pr-0"><i class="fas fa-circle">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Free E-book, video & consolation</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-1 pr-0"><i class="fas fa-circle">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Top instructors from around world</p>
                        </div>
                    </div>
                    <div class="row pb-3 pt-2">
                        <div class="col-1 pr-0"><i class="fas fa-circle">
                            </i></div>

                        <div class="col-11 pl-0">
                            <p>Top courses from your team</p>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn">
                            <p>Start Learning now</p>
                        </button>
                    </div>
                </div>
                <div class="col-7">
                    <img src="/assets/images/Group71.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section-4-search">
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

    <div class="section-5-search">
        <div class="container">

            <img src="/assets/images/image10.png" class="img-floating" id="img-1">

            <img src="/assets/images/image11.png" class="img-floating" id="img-2">

            <img src="/assets/images/image12.png" class="img-floating" id="img-3">

            <div class="row p-bottom">
                <div class="col-6">
                    <p style="font-weight:600; font-size:23px;">Classes tought by real creators</p>
                </div>
                <div class="col-6 right" style="text-align: end;">
                    <a href="">
                        <p style="color: #49BBBD; font-weight:600;">See all</p>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="p-name">Jane Cooper</p>
                            <p class="p-text">Lorem ipsum dolor sit amet, consectetur
                                <br> adipising elit, sed do eiusmod tempor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="p-name">Jane Cooper</p>
                            <p class="p-text">Lorem ipsum dolor sit amet, consectetur
                                <br> adipising elit, sed do eiusmod tempor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="p-name">Jane Cooper</p>
                            <p class="p-text">Lorem ipsum dolor sit amet, consectetur
                                <br> adipising elit, sed do eiusmod tempor
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <img src="/assets/images/image10.png" class="img-floating" id="img-4">

            <img src="/assets/images/image11.png" class="img-floating" id="img-5">

            <img src="/assets/images/image12.png" class="img-floating" id="img-6">

            <div class="m-top">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="p-name">Jane Cooper</p>
                                <p class="p-text">Lorem ipsum dolor sit amet, consectetur
                                    <br> adipising elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="p-name">Jane Cooper</p>
                                <p class="p-text">Lorem ipsum dolor sit amet, consectetur
                                    <br> adipising elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="p-name">Jane Cooper</p>
                                <p class="p-text">Lorem ipsum dolor sit amet, consectetur
                                    <br> adipising elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-6-search pb-4 pt-2">
        <div class="container cont-top">
            <p>What our students have to say</p>
        </div>

        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-5 pl-5">
                    <img src="/assets/images/Group368.png">
                </div>
                <div class="col-6 pl-5">
                    <p class="p-name">Savannah Nguyen</p>
                    <p class="p-email">tanya.hill@example.com</p>
                    <p class="p-text">Lorem ipsum dolor sit amet, consectetur adipising elit, <br> sed do eiusmod tempor
                        <br>Lorem ipsum dolor sit amet, consectetur adipising elit,<br> sed do eiusmod tempor
                        <br>Lorem ipsum dolor sit amet, consectetur adipising elit,<br> sed do eiusmod tempor
                    </p>
                    <i class="fab fa-twitter-square pr-3 mt-3"></i>
                    <i class="fab fa-facebook pr-3"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="col-1">
                    <div class="row">
                        <img class="img-no-top" src="/assets/images/image10.png">
                        <img class="img-mtop" src="/assets/images/image11.png">
                        <img class="img-mtop" src="/assets/images/image12.png">
                        <img class="img-mtop" src="/assets/images/image11.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-7-search">
        <div class="container">
            <div class="row top">
                <div class="col-6">
                    <p class="p-left">Top Education offers and deals are listed here</p>
                </div>
                <div class="col-6 right">
                    <a href="">
                        <p style="color: #49BBBD; font-weight:600;">See all</p>
                    </a>
                </div>
            </div>

            <div class="group-float" id="floating-group-1">
                <button type="button " class="btn mb-3">50%</button>
                <p class="text-head">Lorem ipsum dolor</p>
                <p class="text-bottom">Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                    <br>Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                </p>
            </div>

            <div class="group-float" id="floating-group-2">
                <button type="button " class="btn mb-3">50%</button>
                <p class="text-head">Lorem ipsum dolor</p>
                <p class="text-bottom">Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                    <br>Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                </p>
            </div>

            <div class="group-float" id="floating-group-3">
                <button type="button " class="btn mb-3">50%</button>
                <p class="text-head">Lorem ipsum dolor</p>
                <p class="text-bottom">Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                    <br>Lorem ipsum dolor sit amet, <br>consectetur adipising elit, sed do <br>eiusmod tempor
                </p>
            </div>

            <div class="row">
                <div class="col-4">
                    <img src="/assets/images/Rectangle187.png">
                </div>
                <div class="col-4" style="padding-left: 30px;">
                    <img src="/assets/images/Rectangle188.png">
                </div>
                <div class="col-4 pl-5">
                    <img src="/assets/images/Rectangle189.png">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection