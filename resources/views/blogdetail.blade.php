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
<div class="justify-content-center">
    <div class="jumbotron j-blog">
    </div>
    <div class="section-1-blogdetail">
        <div class="container">
            <p class="p-title">Why Swift UI Should Be on the Radar of Every Mobile Developer</p>
            <p>TOTC is a platform that allows educators to create online classes whereby they can store the course materials online; manage
                <br>assignments, quizzes and exams; monitor due dates; grade results and provide students with feedback all in one place.
            </p>
            <p>TOTC is a platform that allows educators to create online classes whereby they can store the course materials online; manage
                <br>assignments, quizzes and exams; monitor due dates; grade results and provide students with feedback all in one place.
                TOTC is a platform that allows educators to create online classes whereby they can store the course materials online; manage
                <br> assignments, quizzes and exams; monitor due dates; grade results and provide students with feedback all in one place.
                <br>TOTC is a platform
            </p>
            <p>TOTC is a platform that allows educators to create online classes whereby they can store the course materials online; manage
                <br>assignments, quizzes and exams; monitor due dates; grade results and provide students with feedback all in one place.
                <br>TOTC is a platform that allows educators to create online classes whereby they can store the course materials online; manage
            </p>
            <div class="row">
                <div class="col">
                    <a href="" class="btn mr-3 btn-select"><span>Affordable</span></a>
                    <a href="" class="btn mr-3 btn-select"><span>Stunning</span></a>
                    <a href="" class="btn mr-3 btn-select"><span>Making</span></a>
                    <a href="" class="btn mr-3 btn-select"><span>Madbrawns</span></a>
                </div>
            </div>
            <div class="margin-top">
                <hr>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row pl-3 pt-2">
                        <img src="/assets/images/Group243.png">
                        <p>Written by <br>Lina</p>
                    </div>
                </div>
                <div class="col-6">
                    <a href="" class="btn mt-3">Follow</a>
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
                            <img src="{{ $urlapi }}/blog/{{ $someblog[0]->foto_thumbnail }}">
                            <p> {{$someblog[0]->judul}}
                            </p>
                        </div>
                        <div class="card-body pt-1">
                            <img src="/assets/images/Group237.png">
                            <span class="span-name">{{$someblog[0]->name}}</span>
                            <p class="p-descript">{{ Str::limit($someblog[1]->content, 100)  }}
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
                            <img src="{{ $urlapi }}/blog/{{ $someblog[1]->foto_thumbnail }}">
                            <p>{{$someblog[1]->judul}}
                            </p>
                        </div>
                        <div class="card-body pt-1">
                            <img src="/assets/images/Group237.png">
                            <span class="span-name">{{$someblog[1]->name}}</span>
                            <p class="p-descript">{{ Str::limit($someblog[1]->content, 100)  }}
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
                    @foreach($someblogskip as $someblogskip)
                    <div class="col-6">
                        <div class="card card-left">
                            <div class="card-head">
                                <img src="{{ $urlapi }}/blog/{{ $someblogskip->foto_thumbnail }}">
                                <p>{{$someblogskip->judul}}
                                </p>
                            </div>
                            <div class="card-body pt-1">
                                <img src="/assets/images/Group237.png">
                                <span class="span-name">{{$someblogskip->name}}</span>
                                <p class="p-descript">{{ Str::limit($someblogskip->content, 100)  }}
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
                    @endforeach
                </div>
            </div>
            <div class="row pr-3" style="float: inline-end;">
                <button class="btn" type="button" style="background-color: white; width: 100px; border-radius:8px; color:#49BBBD; border-color:#49BBBD;" id="hide-all-blog">Hide</button>
            </div>
        </div>
    </div>
</div>

@endsection