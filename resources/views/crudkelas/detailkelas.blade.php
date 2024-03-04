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
<div class="page-wrapper pt-5">
    <div class="main-detailblog">
        <div class="container-fluid">
            <div class="">
                <img src="{{$urlapi}}/kelas/{{$kelas->foto_thumbnail}}" class="fixed-image" alt="">
            </div>
            <div class=" row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Class is created by: {{$kelas->name}}</p>
                            <h2 class="card-title">{{$kelas->nama}}</h2>
                            <p class="mb-4 preline">{{$kelas->deskripsi}}</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Durasi</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($materi as $materi)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$materi->judul_materi}}</td>
                                            <td>{{$materi->durasi}} menit</td>
                                            <td>{{$materi->link_materi}}</td>
                                            <td>{{Str::limit($materi->deskripsi_materi,100)}}</td>
                                            <td>
                                                <button type="button" class="btn waves-effect waves-light btn-success">Edit</button>
                                                <form action="/restoremateri/{{$materi->id}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn m-2 waves-effect waves-light btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection