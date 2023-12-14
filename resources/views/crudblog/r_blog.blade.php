@extends('templates.defaultadmin')

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/dtc-blueicon.png">
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
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card card-kelas">
                    <div class="card-head">
                        <img src="/assets/images/Group40.png" alt="" width="290px">
                    </div>
                    <div class="card-body">
                        <h3>PHP Laravel</h3>
                        <p>Kategori</p>
                        <p>Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates exclusively...</p>
                    </div>
                    <div class="card-bottom pb-4">
                        <button type="button" class="btn btn-danger btn-sm mr-2">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-kelas">
                    <div class="card-head">
                        <img src="/assets/images/Group40.png" alt="" width="290px">
                    </div>
                    <div class="card-body">
                        <h3>PHP Laravel</h3>
                        <p>Kategori</p>
                        <p>Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates exclusively...</p>
                    </div>
                    <div class="card-bottom pb-4">
                        <button type="button" class="btn btn-danger btn-sm mr-2">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-kelas">
                    <div class="card-head">
                        <img src="/assets/images/Group40.png" alt="" width="290px">
                    </div>
                    <div class="card-body">
                        <h3>PHP Laravel</h3>
                        <p>Kategori</p>
                        <p>Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates exclusively...</p>
                    </div>
                    <div class="card-bottom pb-4">
                        <button type="button" class="btn btn-danger btn-sm mr-2">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection