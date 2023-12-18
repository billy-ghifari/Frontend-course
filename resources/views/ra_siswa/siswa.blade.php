@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class=" row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">List Siswa</h2>
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
                                    @foreach($siswa as $siswa)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$siswa->name}}</td>
                                        <td>{{$siswa->status}}</td>
                                        <td>
                                            @if($siswa->status == 'non')
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