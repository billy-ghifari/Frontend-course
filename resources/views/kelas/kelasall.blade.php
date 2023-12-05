@extends('templates.defaultadmin')

@section('content')
<div class="justify-content-between">
    <div class="container">

        <div id="cardbook" class="card border m-4">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-lg m-1 p-1">
                        <div class="row">
                            <div class="col-6">
                                <h2><strong>Nama kelas</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h5 class="mt-2" style="font-style: italic;">Deskripsi</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus eos neque distinctio similique vitae beatae voluptates officiis sunt, assumenda nesciunt. Provident expedita perspiciatis magnam exercitationem libero</p><br>
                </div>

                <div>
                    <h5 style="font-style: italic;">Materi</h5>
                    <ol class="show-less-div">
                        <li>materi 1</li>
                        <li>materi 2</li>
                        <li>materi 3</li>
                        <li>materi 4</li>
                        <li>materi 5</li>
                        <li>materi 6</li>
                        <li>materi 7</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-1">
                        <form class="d-inline" action="" method="get">
                            <button type="submit" class="btn btn-primary btn-sm"><i></i>show
                            </button>
                        </form>
                    </div>
                    <div class="col-1">
                        <form class="d-inline" action="" method="post" style="float:inline-end">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="url" value="{{ URL::current() }}">
                            <button type="submit" class="btn btn-danger btn-sm" id="btn-delete"><i class="fa-solid fa-trash-can"></i> Delete
                            </button>
                        </form>
                    </div>
                    <div class="col-1">
                        <form action="" method="get">
                            <button type="submit" class="btn btn-success btn-sm" style="float:inline-end"><i class="bx bxs-pencil"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection