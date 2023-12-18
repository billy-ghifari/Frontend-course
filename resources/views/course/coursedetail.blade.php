@extends('templates.default')

@section('content')

<div class="justify-content-between">
    <div class="jumbotron j-cdetail">
        <div class="container">
            <div class="card card-promotion">
                <img class="img-head" src="/assets/images/Group239.png">
                <button class="btn mb-2" type="button">Daftar kelas</button>
                <hr>
                <p class="p-head">This Course included</p>
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-camera"></i>
                    </div>
                    <div class="col-10 pl-1">
                        <p>Access on all devices</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="col-10 pl-1">
                        <p>Certification of completion</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="col-10 pl-1">
                        <p>32 Moduls</p>
                    </div>
                </div>
                <hr>
                <p class="p-head">Training 5 or more people</p>
                <p class="p-body">Class, launched less than a year <br> ago by Blackboard co-
                    founder<br> Michael Chasen, integrates exclusively...
                </p>
                <hr>
                <p class="p-head mb-4">Share this course</p>
                <div class="row pl-3">
                    <img src="/assets/images/twitter.png">
                    <img src="/assets/images/facebook.png">
                    <img src="/assets/images/youtube.png">
                    <img src="/assets/images/instagram.png">
                    <img src="/assets/images/telegram.png">
                    <img src="/assets/images/whatsapp.png">
                </div>
            </div>
        </div>
    </div>
    <div class="section-1-coursedetail mt-3 mb-3">
        <div class="container">
            <div class="row mb-5">
                <div class="col-9">
                    <div class="row row-btn">
                        <button class="btn btn-deactive mr-4" type="button">Overview</button>
                        <button class="btn btn-deactive mr-4" type="button">Overview</button>
                        <button class="btn btn-deactive mr-4" type="button">Overview</button>
                        <button class="btn btn-active" type="button">Overview</button>
                    </div>
                    <div class="card mt-4 pt-3 pb-3">
                        <div class="row pt-3">
                            <div class="col-4 pl-5">
                                <div class="card pt-3 pb-3">
                                    <p class="p-review">4 out of 5</p>
                                    <div class="row pb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Top Rating</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row pl-4 pt-2">
                                    <div class="col-3">
                                        <p>5 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress rating">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>4 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress rating">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>3 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress rating">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>2 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress rating">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4 pt-2" style="height: 30px;">
                                    <div class="col-3">
                                        <p>1 stars</p>
                                    </div>
                                    <div class="col-9 pt-2">
                                        <div class="progress rating">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row pt-2">
                            <div class="col-6">
                                <img src="/assets/images/Group237.png">
                                <span>Lina</span>
                            </div>
                            <div class="col-6 pt-5">
                                <i class="far fa-clock"><span>3 Month</span></i>
                            </div>
                        </div>
                        <p class="p-foot">Class, launched less than a year ago by Blackboard co-founder Michael Chasen,<br>integrates exclusively...</p>
                    </div>
                </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </div>

    <div class="section-2-coursedetail">
        <div class="section-4-blogpage pt-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-6 left">
                        <p class="p-title">Marketing Articles</p>
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

    <div class="section-3-coursedetail">
        <div class="container">
            <div class="card card-floating-top">
            </div>
            <div class="card card-floating-bottom">
            </div>
            <a href="">
                <div class="card mt-2 card-play">
                    <i class="fas fa-play"></i>
                </div>
            </a>

            <div class="row">
                <div class="col-6 left">
                    <p class="p-head">Everything you can do in a physical
                        <br>classroom,<span class="span-head">you can do with TOTC</span>
                    </p>
                    <span class="span-body">TOTC’s school management software helps traditional
                        <br>and online schools manage scheduling, attendance,
                        <br>payments and virtu al classrooms all in one secure cloud-
                        <br>based system.</span>
                    <br><a href="">
                        <p>learn more</p>
                    </a>
                </div>
                <div class="col-6">
                    <img src="/assets/images/Rectangle24.png">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection