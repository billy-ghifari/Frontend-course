@extends('templates.defaultlanding')

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
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Template Main CSS File -->
<link href="/assets/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="justify-content-between" style=" background-color:#49BBBD; border-radius:  0px 0px 100px 100px;">
    <div class="container">
        <div class="section1 row">
            <div class="col-6" style="margin-top:7rem">
                <h1 style="font-size:30px; font-weight:600; color:white; margin-bottom:20px">
                    <span style="color: black;">Belajar secara online</span> kini menjadi
                    <br>lebih mudah dengan berbagai
                    <br>kemudahan yang tersedia.
                </h1>
                <span style="font-size: 18px; font-weight:400; color:white;">Tingkatkan pengalaman belajar Anda dengan
                    <br>DTC, platform yang menarik dan memberikan
                    <br>pembelajaran secara interaktif.
                </span>
                <div class=" row" style="margin-top: 20px;">
                    <div class="col">
                        <button class="submit" style="background-color:#80cfd1; border-radius:40px; width:180px; height:60px; border-color:#80cfd1">
                            <p style="font-weight: 500; color:white; margin-top:14px">Join for free</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-6" style="margin-top:9rem; margin-bottom:4rem">
                <img src="/assets/images/unsplash_section1.png" alt="" style="width:610px; height:410px">
            </div>
        </div>
    </div>
</div>
@endsection