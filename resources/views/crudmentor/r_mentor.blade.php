@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class=" row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">List Mentor</h2>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mentor as $mentor)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$mentor->name}}</td>
                                        <td>{{$mentor->status}}</td>
                                        <td>
                                            @if($mentor->status == 'non')
                                            <button type="button" class="btn waves-effect waves-light btn-success">Activation</button>
                                            @else
                                            <button type="button" class="btn waves-effect waves-light btn-danger">Non-Activation</button>
                                            @endif
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
@endsection