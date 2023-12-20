@extends('templates.defaultadmin')

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="photo/dtc.png">
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
<div class="justify-content-between">
    <div class="page-wrapper">
        <div class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-right">
                                    <a href="/viewkelas" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                        Back
                                    </a>
                                </div>
                            </div>
                            <form class="needs-validation" novalidate action="/createmateri" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="title">Nama Materi</label>
                                            <input type="text" name="judul_materi" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Berikan Nama Materi" value="{{old('title')}}" required>
                                            @error('title')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mt-3" style="margin-left: 16px;">
                                        <label for="content">Deskripsi</label>
                                    </div>


                                    <div class="form-group mt-1" style="margin-left: 16px;">
                                        <textarea class="form-control" name="deskripsi_materi" rows="4"></textarea>
                                    </div>

                                    <div class="form-group mt-1" style="margin-left: 16px;">
                                        <label for="category">Kelas</label>
                                    </div>

                                    <div class="form-group" style="margin-left: 16px;">
                                        <select name="r_id_kelas">
                                            @foreach ($kelas as $kelas)
                                            <option value="{{$kelas->id}}">{{$kelas->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="title">Link Materi</label>
                                            <input type="text" name="link_materi" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Berikan Nama Materi" value="{{old('title')}}" required>
                                            @error('title')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="title">Durasi</label>
                                            <input type="number" name="durasi" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Durasi berdasarkan menit" value="{{old('title')}}" required>
                                            @error('title')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button class="btn btn-success mt-4 mb-3" style="float: inline-end;" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                                        Save</button>

                                </div>
                        </div>
                        <input type="hidden" name="url" value="{{ URL::previous() }}">
                        </form>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>
@endsection