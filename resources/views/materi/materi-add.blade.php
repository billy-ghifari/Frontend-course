@extends('templates.defaultadmin')

@section('content')
<div class="justify-content-between">
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/siswa" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <form class="needs-validation" novalidate action="/create" method="POST">
                            @csrf
                            <div class="card-body">
                                <div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Nama Materi</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Berikan Nama Materi" value="{{old('title')}}" required>
                                        @error('title')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mt-3" style="margin-left: 16px;">
                                    <label for="content">Deskripsi</label>
                                </div>


                                <div class="form-group mt-1" style="margin-left: 16px;">
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>

                                <div class="form-group mt-1" style="margin-left: 16px;">
                                    <label for="category">Kelas</label>
                                </div>

                                <div class="form-group" style="margin-left: 16px;">
                                    <select name="category" id="category">
                                        <option value="">1</option>
                                    </select>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Link Materi</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Berikan Nama Materi" value="{{old('title')}}" required>
                                        @error('title')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Durasi</label>
                                        <input type="number" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Durasi berdasarkan menit" value="{{old('title')}}" required>
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
@endsection