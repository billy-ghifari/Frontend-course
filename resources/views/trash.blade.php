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
    <h1 class="ml-4">Activity</h1>
    <div class="container-fluid">
        <div>
            <table class="table table-bordered" style="background-color:white;">
                <thead style="text-align: center;">
                    <th>no</th>
                    <th>data category</th>
                    <th>title</th>
                    <th>time</th>
                    <th>action</th>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>blog</td>
                    <td>backend</td>
                    <td>1 jam yang lalu</td>
                    <td style="text-align: center;">
                        <form action=""><button class="btn btn-success">restore</button></form>
                    </td>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection