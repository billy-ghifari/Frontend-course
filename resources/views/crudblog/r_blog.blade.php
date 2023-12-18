@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-4">
                <a href="detailblog">
                    <div class="card card-kelas">
                        <div class="card-head">
                            <img id="blogadmin" src="{{$urlapi}}/blog/{{$blog->foto_thumbnail}}" alt="" width="290px">
                        </div>
                        <div class="card-body">
                            <h3>{{$blog->judul}}</h3>
                            <p>{{$blog->nama}}</p>
                            <p>{{ Str::limit($blog->content, 50)  }}</p>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{$urlapi}}/profile/{{$blog->photo}}" id="profilepict" alt="" height="35" width="35">
                                </div>
                                <div class="col-8">
                                    <span>{{$blog->name}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-bottom pb-4">
                            <button type="button" class="btn btn-danger btn-sm mr-2">Delete</button>
                            <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection