@extends('templates.defaultlanding')

<<<<<<< HEAD
=======
@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="photo/dtc.png">
<title>DTC E-Learning</title>
<!-- Custom CSS -->
<link href="/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
<link href="/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
<link href="/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<!-- Custom CSS -->
<link href="dist/css/style.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js  doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Template Main CSS File -->
<link href="dist/css/style.css" rel="stylesheet">
@endsection

>>>>>>> origin/rafha
@section('content')
<div class="justify-content-between">
    <!-- SECTION 1 -->
    <div class="section1">
        <div class="container-landing-1">
            <div class="card card-1">
                <div class="row">
                    <div class="col-3">
                        <div class="card card-1s">
                            <i class=" far fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="col-9 card-1-text">
                        <p>250k</p>
                        <span>Assisted Student</span>
                    </div>
                </div>
            </div>
            <div class="card card-2">
                <div class="row">
                    <div class="col-3">
                        <div class="card card-2s">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="col-9 card-2-text">
                        <p>Congratulations</p>
                        <span>Your admission completed</span>
                    </div>
                </div>
            </div>
            <div class="card card-3">
                <div class="row">
                    <div class="col-3">
                        <img src="/assets/images/Ellipse.png" alt="user" class="rounded-circle">
                    </div>
                    <div class="col-9 card-3-text">
                        <p>User Experience Class</p>
                        <span>Today at 12.00 PM</span>
                        <button type="submit" class="btn card-3-button"> Join Now</button>
                    </div>
                </div>
            </div>
            <div class="row part-1">
                <div class="col-5 part-1-text-1">
                    <h1>
                        <span class="span-text">Belajar secara online</span> kini menjadi
                        <br>lebih mudah dengan berbagai
                        <br>kemudahan yang tersedia.
                    </h1>
                    <span class="span-text2">Tingkatkan pengalaman belajar Anda dengan
                        <br>DTC, platform yang menarik dan memberikan
                        <br>pembelajaran secara interaktif.
                    </span>
                    <div class="row row-part-1">
                        <div class="col-4 pr-0 button-part-1">
                            <a href="" class="btn"> Join for free </a>
                        </div>
                        <div class="col-2 pl-3 pr-0 ">
                            <div class="card mt-2 button2-part-1">
                                <a href="">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 mt-4 mr-5 pl-0 part-1-text-2">
                            <span>Watch how it works</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 part-1-img">
                    <img src="/assets/images/unsplash_section1.png" alt="landing img 1">
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 1 -->

    <!-- SECTION 2 -->
    <div class="section2">
        <div class="container container-landing-2">
            <h1>DTC <span class="container-landing-2-span-1">online.</span></h1>
            <p class="container-landing-2-p-1">DTC sebagai paket perangkat lunak online yang sangat efisien,
                <br> menggabungkan semua alat yang diperlukan untuk menjalankan
                <br> sekolah atau kantor dengan sukses.
            </p>
            <div class="card landing-2-card-1">
                <i class="fas fa-file-alt"></i>
            </div>
            <div class="card landing-2-card-2 ">
                <i class="far fa-calendar-alt"></i>
            </div>
            <div class="card landing-2-card-3">
                <i class="fas fa-child"></i>
            </div>
            <div class="row landing-2-row-1">
                <div class="col">
                    <div class="card card-row-col">
                        <div class="card-body card-body-row-col">
                            <p>Online Billing,
                                <br>Invoicing, & Contracts
                            </p>
                            <span>Simple and secure control of your
                                <br>organization’s financial and legal
                                <br>transactions. Send customized
                                <br>invoices and contracts</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-row-col">
                        <div class="card-body card-body-row-col">
                            <p>Easy Scheduling &
                                <br>Attendance Tracking
                            </p>
                            <span>Schedule and reserve classrooms at
                                <br>one campus or multiple campuses.
                                <br>Keep detailed records of student attendance</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-row-col">
                        <div class="card-body card-body-row-col">
                            <p>Customer Tracking</p>
                            <span>Automate and track emails to
                                <br>individuals or groups. Skilline’s
                                <br>built-in system helps organize
                                <br>your organization </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 2 -->

    <!-- SECTION 3 -->
    <div class="section3">
        <div class="container container-landing-3">
            <h1>What is <span class="landing-3-span">TOTC?</span></h1>
            <p>TOTC is a platform that allows educators to create online classes whereby they can
                <br>store the course materials online; manage assignments, quizzes and exams; monitor
                <br>due dates; grade results and provide students with feedback all in one place.
            </p>
            <div class="landing-3-sub-title-1">
                <span>FOR INSTRUCTORS</span>
            </div>
            <div class="landing-3-sub-button-1">
                <button type="submit" class="btn btn-outline-light">
                    Start a class today</button>
            </div>
            <div class="landing-3-sub-title-2">
                <span>FOR STUDENTS</span>
            </div>
            <div class="landing-3-sub-button-2">
                <button type="submit" class="btn">
                    Enter access code</button>
            </div>
            <div class="row landing-3-row">
                <div class="col">
                    <img class="landing-3-img-1" src="/assets/images/Group22.png" class="mr-4" alt="">
                </div>
                <div class="col">
                    <img class="landing-3-img-2" src="/assets/images/Group23.png" class="ml-4" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 3 -->

    <!-- SECTION 4 -->
    <div class="section4">
        <div class="container container-landing-4">
            <div class="card landing-4-card-1">
            </div>
            <div class="card landing-4-card-2">
            </div>
            <div class="card mt-2 landing-4-card-3">
                <i class="fas fa-play"></i>
            </div>
            <div class="row landing-4-row">
                <div class="col-6 landing-4-row-col-1">
                    <p class="landing-4-col-1-p">Everything you can do in a physical
                        <br>classroom,<span> You can do with TOTC</span>
                    </p>
                    <span>TOTC’s school management software helps traditional
                        <br>and online schools manage scheduling, attendance,
                        <br>payments and virtual classrooms all in one secure cloud-based system.
                    </span>
                    <br>
                    <a class="landing-4-a" href="">
                        <p>learn more</p>
                    </a>
                </div>
                <div class="col-6 landing-4-row-col-2">
                    <img src="/assets/images/Rectangle24.png" alt="megawati oyee">
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 4 -->

    <!-- SECTION 5 -->
    <div class="section5">
        <div class="container container-landing-5">
            <div class="landing-5-div-1">
                <p>Our <span class="landing-5-div-1-span">Features</span></p>
                <span>This very extraordinary feature, can make learning activities more efficient</span>
            </div>
            <div class="row landing-5-div-2">
                <div class="col-6 landing-5-div-2-col-1">
                    <h1>Tools <span class="landing-5-span-1">For Teachers
                            <br>And Learners</span>
                    </h1>
                    <p>Class has a dynamic set of teaching tools built to
                        <br>be deployed and used during class. Teachers can
                        <br>handout assignments in real-time for students to
                        <br>complete and submit.
                    </p>
                </div>
                <div class=" col-6 landing-5-div-2-col-2">
                    <img src="/assets/images/Group122.png" alt="">
                </div>
            </div>

            <div class="landing-5-div-3">
                <div class="row landing-5-div-3-row-1">
                    <div class="col-6 landing-5-div-3-row-1-col-1">
                        <img src="/assets/images/Group92.png" alt="">
                    </div>
                    <div class="col-6 landing-5-div-3-row-1-col-2">
                        <h1>Assessments,
                            <br><span class="landing-5-div-3-span-1">Quizzes,<span class="landing-5-div-3-span-2"> Tests</span></span>
                        </h1>
                        <p>Easily launch live assignments, quizzes, and
                            <br> tests.Student results are automatically entered in
                            <br>the online gradebook.
                        </p>
                    </div>
                </div>
            </div>
            <div class="landing-5-div-4">
                <div class="row landing-5-div-4-row">
                    <div class="col-6 landing-5-div-4-row-col-1">
                        <h1>Class Management
                            <br><span class="landing-5-div-4-span">Tools for Educators</span>
                        </h1>
                        <p>Class provides tools to help run and manage the class
                            <br>such as Class Roster, Attendance, and more. With the
                            <br>Gradebook, teachers can review and grade tests and
                            <br>quizzes in real-time.
                        </p>
                    </div>
                    <div class="col-6 landing-5-div-4-row-col-2">
                        <img src="/assets/images/Group124.png" alt="">
                    </div>
                </div>
            </div>
            <div class="landing-5-div-5">

                <button class="btn landing-5-div-5-btn-1" type="submit">
                    <i class="fas fa-long-arrow-alt-right"></i></button>

                <button class="btn landing-5-div-5-btn-2" type="submit">
                    <i class=" icon-arrow-right"></i></button>

                <div class="card landing-5-div-5-card">
                    <div class="card-body">
                        <div class="row landing-5-div-5-card-row">
                            <div class="col-1 landing-5-div-5-card-row-col-1">
                                <div></div>
                            </div>
                            <div class="col-11 landing-5-div-5-card-row-col-2">
                                <p>"Thank you so much for your help. It's exactly what
                                    <br>I've been looking for. You won't regret it. It really
                                    <br>saves me time and effort. TOTC is exactly what our
                                    <br>business has been lacking."
                                </p>
                                <div class="row landing-5-div-5-inside-col">
                                    <div class="col-6  landing-5-div-5-inside-col-col-1">
                                        <p>Gloria Rose</p>
                                    </div>
                                    <div class="col-6 landing-5-div-5-inside-col-col-2">
                                        <div class="row landing-5-div-5-inside-col-col-2-row">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span>12 reviews at Yelp</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row landing-5-div-5-row">
                    <div class="col-6 landing-5-div-5-row-col-1">
                        <div class="row landing-5-div-5-row-col-1-inside-row">
                            <div class="col-2 landing-5-div-5-row-col-1-inside-row-col-1">
                                <hr>
                            </div>
                            <div class="col-10 landing-5-div-5-row-col-1-inside-row-col-2">
                                <span>TESTIMONIAL</span>
                            </div>
                        </div>
                        <h1>What They Say?</h1>
                        <p class="landing-5-div-5-row-col-1-p-1">TOTC has got more than 100k positive ratings
                            <br>from our users around the world.
                        </p>
                        <p class="landing-5-div-5-row-col-1-p-2">Some of the students and teachers were
                            <br>greatly helped by the Skilline.
                        </p>
                        <p class="landing-5-div-5-row-col-1-p-3">Are you too? Please give your assessment</p>
                        <button type="button" class="btn btn-light landing-5-div-5-row-col-1-btn">
                            <span>Write your assessment</span>
                        </button>
                    </div>
                    <div class="col-6 landing-5-div-5-row-col-2">
                        <img src="/assets/images/MaskGroup.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 5 -->

    <!--  SECTION 6 -->
    <div class="section6">
        <div class="container container-landing-6">
            <div class="landing-6-div-1">
                <h2>Lastest News and Resources</h2>
                <span>See the developments that have occurred to TOTC in the world</span>
            </div>
            <div class="row landing-6-div-2">
                <div class="col-6 div-2-col-1">
                    <img src="/assets/images/Group40.png" alt="">
                    <div class="card">
                        <span class="landing-6-card-span">NEWS</span>
                    </div>
                    <p class="landing-6-p-1">Class adds $30 million to its balance sheet for
                        <br> a Zoom-friendly edtech solution
                    </p>
                    <p>Class, launched less than a year ago by Blackboard
                        <br>co-founder Michael Chasen, integrates exclusively...
                    </p>
                    <p class="landing-6-p-2">Read more</p>
                </div>
                <div class="col-6 L6-div-2-col-2">
                    <div class="row mb-4 landing-6-row">
                        <div class="col-5">
                            <img src="/assets/images/Rectangle33.png" alt="">
                        </div>
                        <div class="col-7">
                            <p class="landing-6-p-1">Class Technologies Inc. Closes $30 Million
                                <br> Series A Financing to Meet High Demand
                            </p>
                            <p>Class Technologies Inc., the company that
                                <br>created Class,...
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4 landing-6-row">
                        <div class="col-5">
                            <img src="/assets/images/Rectangle34.png" alt="">
                        </div>
                        <div class="col-7">
                            <p class="landing-6-p-1">Zoom’s earliest investors are betting
                                <br>millions on a better Zoom for schools
                            </p>
                            <p>Zoom was never created to be a consumer
                                <br>product. Nonetheless, the...
                            </p>
                        </div>
                    </div>
                    <div class="row  landing-6-row">
                        <div class="col-5">
                            <img src="/assets/images/Group43.png" alt="">
                        </div>
                        <div class="col-7">
                            <p class="landing-6-p-1">Former Blackboard CEO Raises $16M to
                                <br>Bring LMS Features to Zoom Classrooms
                            </p>
                            <p>This year, investors have reaped big
                                <br>financial returns from betting on Zoom...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 6 -->
</div>
@endsection