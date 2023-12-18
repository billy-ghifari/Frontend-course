@extends('templates.defaultadmin')

@section('content')
<div class="page-wrapper pt-5">
    <div class="main-detailblog">
        <div class="container-fluid">
            <div class="jumbotron justify-between">
            </div>
            <div class=" row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Class is created by: (name)</p>
                            <h2 class="card-title">PHP Laravel</h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>https://music.youtube.com/</td>
                                            <td>@Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates exclusively...</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>https://music.youtube.com/</td>
                                            <td>Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates exclusively...</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>https://music.youtube.com/ Bird</td>
                                            <td>Class, launched less than a year ago by Blackboard co-founder Michael Chasen, integrates exclusively...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection