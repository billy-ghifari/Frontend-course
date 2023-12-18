@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper pt-5">
    <div class="main-detailkelas">
        <div class="container-fluid">
            <div class="jumbotron justify-between">
                <img src="{{$urlapi}}/blog/{{$blog->foto_thumbnail}}" alt="">
            </div>
            <div class=" row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Class is created by: {{$blog->name}}</p>
                            <h2 class="card-title">{{$blog->judul}}</h2>
                            <p class="text-kategori">
                                {{$blog->nama}}
                            </p>
                            <p class="mb-4 preline">{{$blog->content}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection