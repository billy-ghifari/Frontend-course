@extends('templates.defaultadmin')

@section('content')

<div class="content justify-content-between">
    <div class="container-fluid mt-5">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-right">
                            <a href="/barang" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="/barang" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{old('name')}}" required>
                                        @error('name')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="photo" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" name="supplier" class="form-control @error('supplier') is-invalid @enderror" id="supplier" placeholder="Email" value="{{old('supplier')}}" required>
                                        @error('supplier')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Password" value="{{old('price')}}" required>
                                        @error('price')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                                Reset</button>
                            <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                                Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
</div>
@endsection