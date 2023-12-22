@extends('templates.default')

@section('content')
<div class="justify-content-between">
    <div class="section-1-course">
        <div class="container">
            <div class="row">
                <div class="col left">
                    <p>Welcome back, ready for your next lesson?</p>
                </div>
                <div class="col right">
                    <a href="">View History</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div class="card card-lesson">
                        <img src="/assets/images/Group40.png" class="img-span" width="340px;">
                        <p class="margin-left">AWS Certified Solutions Architect</p>
                        <div class="row margin-left">
                            <img src="/assets/images/Group237.png" alt="" width="40px">
                            <span>Lina</span>
                        </div>
                        <div class="progress progress-lesson">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="m">
                            lesson 5 of 7
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card card-lesson">
                        <img src="/assets/images/Group40.png" class="img-span" width="340px;">
                        <p class="margin-left">AWS Certified Solutions Architect</p>
                        <div class="row margin-left">
                            <img src="/assets/images/Group237.png" alt="" width="40px">
                            <span>Lina</span>
                        </div>
                        <div class="progress progress-lesson">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="m">
                            lesson 5 of 7
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card card-lesson">
                        <img src="/assets/images/Group40.png" class="img-span" width="340px;">
                        <p class="margin-left">AWS Certified Solutions Architect</p>
                        <div class="row margin-left">
                            <img src="/assets/images/Group237.png" alt="" width="40px">
                            <span>Lina</span>
                        </div>
                        <div class="progress progress-lesson">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="m">
                            lesson 5 of 7
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pagination-button">
                <button type="button" class="btn mr-2">
                    < </button>
                        <button type="button" class="btn"> > </button>
            </div>
        </div>
    </div>

    <div class="section-2-course">
        <div class="container">
            <p class="p-title mb-4">Choice favourite course from top category</p>
            <div class="row pt-2">
                <div class="col-3">
                    <div class="card pb-2">
                        <div class="card background-greenlight">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <p class="p-title">Design</p>
                        <p class="p-descript">Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit,
                            <br>sed do eiusmodadipiscing elit,
                            <br>sed do eiusmod
                        </p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card pb-2">
                        <div class="card background-blue">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <p class="p-title">Design</p>
                        <p class="p-descript">Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit,
                            <br>sed do eiusmodadipiscing elit,
                            <br>sed do eiusmod
                        </p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card pb-2">
                        <div class="card background-orange">
                            <i class="fas fa-diagnoses"></i>
                        </div>
                        <p class="p-title">Design</p>
                        <p class="p-descript">Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit,
                            <br>sed do eiusmodadipiscing elit,
                            <br>sed do eiusmod
                        </p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card pb-2">
                        <div class="card background-green">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <p class="p-title">Design</p>
                        <p class="p-descript">Lorem ipsum dolor sit amet,
                            <br>consectetur adipiscing elit,
                            <br>sed do eiusmodadipiscing elit,
                            <br>sed do eiusmod
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3-course">
        <div class="section-4-blogpage pt-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-6 left">
                        <p class="p-title">Recommended for you</p>
                    </div>
                    <div class="col-6 right">
                        <button class="btn" type="button" id="see-all-articles">see all</button>
                    </div>
                </div>
                <div class="d-flex flex-section-3-course" id="scroll-course">
                    @foreach ($kelas as $kelas)
                    <div class="col-3 ml-3">
                        <div class="card">
                            <div class="card-head pt-3 CH-course-section-3">
                                <img src="{{ $urlapi }}/kelas/{{ $kelas->foto_thumbnail }}" width="230" height="160">
                                <div class="pt-3">
                                    <p>
                                        {{$kelas->nama}}
                                    </p>
                                </div>
                            </div>
                            <div class="card-body pt-0 pl-3">
                                <p class="p-descript">
                                    {{$kelas->deskripsi}}
                                </p>
                                <div class="row pt-2">
                                    <div class="col-12 right">
                                        <img src="{{ $urlapi }}/profile/{{ $kelas->photo }}" id="profilepict" height="35" width="35">
                                        <span>{{$kelas->name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="section-4-course pb-5 pt-3">
        <div class="section-4-blogpage pt-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-6 left">
                        <p class="p-title">Get choice of your course</p>
                    </div>
                    <div class="col-6 right">
                        <button class="btn" type="button" id="see-all-articles">see all</button>
                    </div>
                </div>
                <div class="row">
                    @foreach($somekelas as $somekelas)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-head pt-3">
                                <img src="{{ $urlapi }}/kelas/{{ $somekelas->foto_thumbnail }}" width="230" height="160">
                                <div class="row pt-3">
                                    <p>
                                        {{$somekelas->nama}}
                                    </p>
                                </div>
                            </div>
                            <div class="card-body pt-0 pl-3">
                                <p class="p-descript">
                                    {{$somekelas->deskripsi}}
                                </p>
                                <div class="row pt-2">
                                    <div class="col-12 right">
                                        <img src="/assets/images/Group237.png" height="35" width="35">
                                        <span>
                                            {{$somekelas->name}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="container cont-2">
                <p class="p-head">Online coaching lessons for remote learning.</p>
                <p class="p-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempos Lorem ipsum dolor <br>sitamet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                <button class="btn" type="button">
                    Start learning now
                </button>
            </div>
        </div>
        <div class="section-5-course mb-1 mt-4">
            <div class="section-4-blogpage pt-2">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-6 left">
                            <p class="p-title">The course in personal development</p>
                        </div>
                        <div class="col-6 right">
                            <button class="btn" type="button" id="see-all-articles">see all</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-head pt-3">
                                    <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                    <div class="row pt-3">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group259.png" width="17" height="17">
                                            <span>Design</span>
                                        </div>
                                        <div class="col-6 left">
                                            <i class="far fa-clock"><span>3 Month</span></i>
                                        </div>
                                        <p>AWS Certified solutions
                                            <br>Architect
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pl-3">
                                    <p class="p-descript">Lorem ipsum dolor sit amet,
                                        <br>consectetur adipising elit, sed do
                                        <br>eiusmod tempor
                                    </p>
                                    <div class="row pt-2">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group237.png" height="35" width="35">
                                            <span>Lina</span>
                                        </div>
                                        <div class="col-6 left">
                                            <p>$100 <span>$80</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-head pt-3">
                                    <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                    <div class="row pt-3">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group259.png" width="17" height="17">
                                            <span>Design</span>
                                        </div>
                                        <div class="col-6 left">
                                            <i class="far fa-clock"><span>3 Month</span></i>
                                        </div>
                                        <p>AWS Certified solutions
                                            <br>Architect
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pl-3">
                                    <p class="p-descript">Lorem ipsum dolor sit amet,
                                        <br>consectetur adipising elit, sed do
                                        <br>eiusmod tempor
                                    </p>
                                    <div class="row pt-2">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group237.png" height="35" width="35">
                                            <span>Lina</span>
                                        </div>
                                        <div class="col-6 left">
                                            <p>$100 <span>$80</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-head pt-3">
                                    <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                    <div class="row pt-3">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group259.png" width="17" height="17">
                                            <span>Design</span>
                                        </div>
                                        <div class="col-6 left">
                                            <i class="far fa-clock"><span>3 Month</span></i>
                                        </div>
                                        <p>AWS Certified solutions
                                            <br>Architect
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pl-3">
                                    <p class="p-descript">Lorem ipsum dolor sit amet,
                                        <br>consectetur adipising elit, sed do
                                        <br>eiusmod tempor
                                    </p>
                                    <div class="row pt-2">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group237.png" height="35" width="35">
                                            <span>Lina</span>
                                        </div>
                                        <div class="col-6 left">
                                            <p>$100 <span>$80</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-head pt-3">
                                    <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                    <div class="row pt-3">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group259.png" width="17" height="17">
                                            <span>Design</span>
                                        </div>
                                        <div class="col-6 left">
                                            <i class="far fa-clock"><span>3 Month</span></i>
                                        </div>
                                        <p>AWS Certified solutions
                                            <br>Architect
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pl-3">
                                    <p class="p-descript">Lorem ipsum dolor sit amet,
                                        <br>consectetur adipising elit, sed do
                                        <br>eiusmod tempor
                                    </p>
                                    <div class="row pt-2">
                                        <div class="col-6 right">
                                            <img src="/assets/images/Group237.png" height="35" width="35">
                                            <span>Lina</span>
                                        </div>
                                        <div class="col-6 left">
                                            <p>$100 <span>$80</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-articles" style="display: none;">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-head pt-3">
                                        <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                        <div class="row pt-3">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group259.png" width="17" height="17">
                                                <span>Design</span>
                                            </div>
                                            <div class="col-6 left">
                                                <i class="far fa-clock"><span>3 Month</span></i>
                                            </div>
                                            <p>AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p class="p-descript">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row pt-2">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group237.png" height="35" width="35">
                                                <span>Lina</span>
                                            </div>
                                            <div class="col-6 left">
                                                <p>$100 <span>$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-head pt-3">
                                        <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                        <div class="row pt-3">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group259.png" width="17" height="17">
                                                <span>Design</span>
                                            </div>
                                            <div class="col-6 left">
                                                <i class="far fa-clock"><span>3 Month</span></i>
                                            </div>
                                            <p>AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p class="p-descript">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row pt-2">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group237.png" height="35" width="35">
                                                <span>Lina</span>
                                            </div>
                                            <div class="col-6 left">
                                                <p>$100 <span>$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-head pt-3">
                                        <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                        <div class="row pt-3">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group259.png" width="17" height="17">
                                                <span>Design</span>
                                            </div>
                                            <div class="col-6 left">
                                                <i class="far fa-clock"><span>3 Month</span></i>
                                            </div>
                                            <p>AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p class="p-descript">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row pt-2">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group237.png" height="35" width="35">
                                                <span>Lina</span>
                                            </div>
                                            <div class="col-6 left">
                                                <p>$100 <span>$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-head pt-3">
                                        <img src="/assets/images/Rectangle36.png" width="230" height="160">
                                        <div class="row pt-3">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group259.png" width="17" height="17">
                                                <span>Design</span>
                                            </div>
                                            <div class="col-6 left">
                                                <i class="far fa-clock"><span>3 Month</span></i>
                                            </div>
                                            <p>AWS Certified solutions
                                                <br>Architect
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pl-3">
                                        <p class="p-descript">Lorem ipsum dolor sit amet,
                                            <br>consectetur adipising elit, sed do
                                            <br>eiusmod tempor
                                        </p>
                                        <div class="row pt-2">
                                            <div class="col-6 right">
                                                <img src="/assets/images/Group237.png" height="35" width="35">
                                                <span>Lina</span>
                                            </div>
                                            <div class="col-6 left">
                                                <p>$100 <span>$80</span></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row hidden-button pr-2 mb-5 ">
                        <button class="btn" type="button" id="hide-all-articles">Hide</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection