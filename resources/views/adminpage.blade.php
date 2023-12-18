@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper pt-4">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome, {{session('role')}}</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="container-fluid mt-3">
        <div class="table-responsive">
            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Siswa aktif </th>
                        <th>Mentor aktif</th>
                        <th>jumlah kelas</th>
                        <th>jumlah blog</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$siswa}}</td>
                        <td>{{$kelas}}</td>
                        <td>{{$kelas}}</td>
                        <td>{{$blog}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection