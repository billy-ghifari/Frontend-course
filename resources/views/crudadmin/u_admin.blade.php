@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Update Admin</h2>
                        <p>Please enter data into the form below</p>
                        <form action="#">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-4">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-4">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Input Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Input Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-4">
                                        <label>Photo</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Input Password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="form-actions mt-5 mb-3">
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection