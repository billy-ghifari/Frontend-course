@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper pt-5">
    <div class="main-detailblog">
        <div class="container-fluid">
            <div class="jumbotron justify-between">
                <img src="{{$urlapi}}/kelas/{{$kelas->foto_thumbnail}}" alt="">
            </div>
            <div class=" row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Class is created by: {{$kelas->name}}</p>
                            <h2 class="card-title">{{$kelas->nama}}</h2>
                            <p class="mb-4">{{$kelas->deskripsi}}</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Durasi</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($materi as $materi)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$materi->judul_materi}}</td>
                                            <td>{{$materi->durasi}} menit</td>
                                            <td>{{$materi->link_materi}}</td>
                                            <td>{{$materi->deskripsi_materi}}</td>
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