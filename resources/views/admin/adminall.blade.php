@extends('templates.defaultadmin')

@section('content')
<div class="justify-content-between">
    <div class="container">
        <div style="text-align: center; margin-top: 3rem; margin-bottom: 3rem;">
            <h1>LIST ALL ADMIN</h1>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Admin</h4>
                    <h6 class="card-subtitle">Semua admin DTC akan muncul disini</h6>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Admin</td>
                                <td>aktif</td>
                                <td>
                                    <form class="d-inline" action="" method="GET">
                                        <button type="submit" class="btn btn-success btn-sm mr-1">
                                            <i class="fa-solid fa-pen"></i> Edit
                                        </button>
                                    </form>
                                    <form class="d-inline" action="" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm" id="btn-delete"><i class="fa-solid fa-trash-can"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection