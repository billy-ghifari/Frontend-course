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
<<<<<<< HEAD
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
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>

                </tbody>
            </table>
        </div>
=======
        <h2>
            Siswa aktif saat ini : {{$siswa}}
        </h2>
        <h2>
            Total Kelas pada DTC : {{$kelas}}
        </h2>
        <h2>
            Total materi pada DTC : {{$materi}}
        </h2>
        <h2>
            Total Blog pada DTC : {{$blog}}
        </h2>
>>>>>>> origin/rafha
    </div>
</div>
@endsection