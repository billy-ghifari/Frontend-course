@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Create Kelas</h2>
                        <p>Please enter data into the form below</p>
                        <form action="#">
                            <div class="form-body">

                                <label>Name</label>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter the name of the uploader ">
                                        </div>
                                    </div>
                                </div>
                                <label>Deskipsi</label>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
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