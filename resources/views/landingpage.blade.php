@extends('templates.defaultlanding')

@section('head')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
<title>Adminmart Template - The Ultimate Multipurpose admin template</title>
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
<link href="/assets/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="justify-content-between">
    <!-- SECTION 1 -->
    <div class="section1" style=" background-color:#49BBBD; border-radius:  0px 0px 100px 100px;">
        <div class="container">
            <div class="section1 row">
                <div class="col-6" style="margin-top:7rem">
                    <h1 style="font-size:30px; font-weight:600; color:white; margin-bottom:20px">
                        <span style="color: black;">Belajar secara online</span> kini menjadi
                        <br>lebih mudah dengan berbagai
                        <br>kemudahan yang tersedia.
                    </h1>
                    <span style="font-size: 18px; font-weight:400; color:white;">Tingkatkan pengalaman belajar Anda dengan
                        <br>DTC, platform yang menarik dan memberikan
                        <br>pembelajaran secara interaktif.
                    </span>
                    <div class=" row" style="margin-top: 20px;">
                        <div class="col-4 pr-0">
                            <a href="" class="btn" style="background-color:#80cfd1; border-radius:40px; width:170px; height:60px;
                        font-weight: 500; color:white; margin-top:10px; padding-top:17px"> Join for free </a>
                        </div>
                        <div class="col-2 pl-3 pr-0">
                            <div class="card mt-2" style="border-radius: 50%; width:60px; height:60px; background-color:white;">
                                <i class="fas fa-play" style="color: #23BDEE;  font-size: 21px;padding-top:21px; padding-left:23px;"></i>
                            </div>
                        </div>
                        <div class="col-4 mt-4 mr-5 pl-0">
                            <span style="color: black;">Watch how it works</span>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top:9rem; margin-bottom:4rem">
                    <img src="/assets/images/unsplash_section1.png" alt="" style="width:600px; height:400px">
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 1 -->

    <!-- SECTION 2 -->
    <div class="section2" style="margin-top: 7rem; margin-bottom:7rem">
        <div class="container" style="text-align: center;">
            <h1 style="color: #2F327D; font-weight:600">DTC <span style="color:#00CBB8;font-weight:600">online.</span></h1>
            <p style="color: #696984; margin-top:15px; margin-bottom:3rem">DTC sebagai paket perangkat lunak online yang sangat efisien,
                <br> menggabungkan semua alat yang diperlukan untuk menjalankan
                <br> sekolah atau kantor dengan sukses.
            </p>
            <div class="card" style=" background-color: #5B72EE;border-radius: 50%; width: 60px;
                     height: 60px;margin-left:140px; position:absolute; margin-bottom:21rem; z-index:2;">
                <i class="fas fa-file-alt" style="color: white; font-size:30px; padding-top:13px"></i>
            </div>
            <div class="card" style=" background-color: #00CBB8;border-radius: 50%; width: 60px;
                     height: 60px;margin-left:525px; position:absolute; margin-bottom:21rem; z-index:2;">
                <i class="far fa-calendar-alt" style="color: white; font-size:30px; padding-top:13px"></i>
            </div>
            <div class="card" style=" background-color: #29B9E7;border-radius: 50%; width: 60px;
                     height: 60px; margin-left:56rem; position:absolute; margin-bottom:21rem; z-index:2;">
                <i class="fas fa-child" style="color: white; font-size:30px; padding-top:13px"></i>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 340px; height:320px; border-radius:20px;margin-top:2rem">
                        <div class="card-body" style="text-align: center;">
                            <p style="color: #2F327D;margin-top:3rem; font-size:22px;font-weight:500">Online Billing,
                                <br>Invoicing, & Contracts
                            </p>
                            <span style="font-size: 17px;">Simple and secure control of your
                                <br>organization’s financial and legal
                                <br>transactions. Send customized
                                <br>invoices and contracts</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 340px; height:320px; border-radius:20px;margin-top:2rem">
                        <div class="card-body" style="text-align: center;">
                            <p style="color: #2F327D;margin-top:3rem; font-size:22px;font-weight:500">Easy Scheduling &
                                <br>Attendance Tracking
                            </p>
                            <span style="font-size: 17px;">Schedule and reserve classrooms at
                                <br>one campus or multiple campuses.
                                <br>Keep detailed records of student attendance</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 340px; height:320px; border-radius:20px;margin-top:2rem">
                        <div class="card-body" style="text-align: center;">
                            <p style="color: #2F327D;margin-top:3rem; font-size:22px;font-weight:500">Customer Tracking</p>
                            <span style="font-size: 17px;">Automate and track emails to
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
    <div class="section3" style="margin-bottom:10rem;">
        <div class="container" style="text-align: center;">
            <h1 style="color: #2F327D;font-weight:500; margin-bottom:1rem">What is <span style="color: #00CBB8;font-weight:500">TOTC?</span></h1>
            <p style="margin-bottom: 3rem; font-size:17px">TOTC is a platform that allows educators to create online classes whereby they can
                <br>store the course materials online; manage assignments, quizzes and exams; monitor
                <br>due dates; grade results and provide students with feedback all in one place.
            </p>
            <div style="position: absolute; z-index: 2; margin-left:13rem; margin-top:6rem">
                <span style="color:white; font-size:22px; font-weight:500">FOR INSTRUCTORS</span>
            </div>
            <div style="position: absolute; z-index:2; margin-left:13rem; margin-top:9rem;">
                <button type="submit" class="btn btn-outline-light text-light" style="width: 200px; height:55px; border-radius:8rem;">
                    Start a class today</button>
            </div>
            <div style="position: absolute; z-index: 2; margin-left:45rem; margin-top:6rem">
                <span style="color:white; font-size:22px; font-weight:500">FOR STUDENTS</span>
            </div>
            <div style="position: absolute; z-index:2; margin-left:44rem; margin-top:9rem;">
                <button type="submit" class="btn" style="width: 200px; height:55px; border-radius:8rem; background-color:#23BDEE; opacity:85%; color:white">
                    Enter access code</button>
            </div>
            <div class="row">
                <div class="col">
                    <img src="/assets/images/Group22.png" class="mr-4" alt="" style="width: 420px; height:340; float:inline-end">
                </div>
                <div class="col">
                    <img src="/assets/images/Group23.png" class="ml-4" alt="" style="width: 420px; height:340; float:inline-start;">
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 3 -->

    <!-- SECTION 4 -->
    <div class="section4" style="margin-bottom: 7rem; padding-top:20px">
        <div class="container">
            <div class="card" style="background-color: #23BDEE; width:110px; height:110px; position:absolute; z-index:0;
            margin-left:553px; margin-bottom:30rem; border-radius:16px">
            </div>
            <div class="card" style="background-color: #33EFA0; width:160px; height:160px; position:absolute; z-index:0;
            margin-left:978px; margin-bottom:30rem; margin-top: 223px;border-radius:16px">
            </div>
            <div class="row">
                <div class="col-6" style="text-align: start;">
                    <p style="color: #2F327D; margin-top:3rem; font-weight:500; font-size:25px">Everything you can do in a physical
                        <br>classroom,<span style="color:#00CBB8;">you can do with TOTC</span>
                    </p>
                    <span style="font-size: 17px;">TOTC’s school management software helps traditional
                        <br>and online schools manage scheduling, attendance,
                        <br>payments and virtual classrooms all in one secure cloud-
                        <br>based system.</span>
                    <br><a href="">
                        <p style="text-decoration: underline; color:#696984; padding-top:10px">learn more</p>
                    </a>
                </div>
                <div class="col-6">
                    <img src="/assets/images/Rectangle24.png" alt="megawati oyee" style="width:550px; height:350px; margin-top:1rem;">
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 4 -->

    <!-- SECTION 5 -->
    <div class="section5" style="margin-bottom: 10rem;">
        <div class="container">
            <div style="text-align: center; margin-bottom:6rem">
                <p style="color: #2F327D; font-weight:600; font-size:25px">Our <span style="color: #00CBB8; font-weight:600; font-size:25px;">Features</span></p>
                <span>This very extraordinary feature, can make learning activities more efficient</span>
            </div>
            <div class="row">
                <div class="col-6" style="text-align: start; margin-top:5rem; padding-left:3rem;">
                    <h1 style="color: #00CBB8;font-weight:500">Tools <span style="color: #2F327D;font-weight:500">For Teachers
                            <br>And Learners</span>
                    </h1>
                    <p>Class has a dynamic set of teaching tools built to
                        <br>be deployed and used during class. Teachers can
                        <br>handout assignments in real-time for students to
                        <br>complete and submit.
                    </p>
                </div>
                <div class="col-6">
                    <img src="/assets/images/Group122.png" alt="" style="width:510px; height:410px; padding-left:4rem">
                </div>
            </div>

            <div style="margin-top: 6rem;">
                <div class="row">
                    <div class="col-6">
                        <img src="/assets/images/Group92.png" alt="" style="width:600; height:500px;">
                    </div>
                    <div class="col-6" style="margin-top: 6rem; padding-left:4rem">
                        <h1 style="font-weight:500; color:#2F327D">Assessments,
                            <br><span style="color: #00CBB8;">Quizzes,<span style="color: #2F327D;"> Tests</span></span>
                        </h1>
                        <span>Easily launch live assignments, quizzes, and
                            <br> tests.Student results are automatically entered in
                            <br>the online gradebook.
                        </span>
                    </div>
                </div>
            </div>
            <div style="margin-top: 6rem;">
                <div class="row">
                    <div class="col-6" style="text-align: start; margin-top:9rem">
                        <h1 style="color:#2F327D; font-weight:500">Class Management
                            <br><span style="color: #00CBB8; font-weight:500">Tools for Educators</span>
                        </h1>
                        <p>Class provides tools to help run and manage the class
                            <br>such as Class Roster, Attendance, and more. With the
                            <br>Gradebook, teachers can review and grade tests and
                            <br>quizzes in real-time.
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="/assets/images/Group124.png" alt="" style="width:680px; height:480px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 5 -->
</div>
@endsection