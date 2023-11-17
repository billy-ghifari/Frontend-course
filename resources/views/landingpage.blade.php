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
<link href="/public/dist/css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="justify-content-between">
    <!-- SECTION 1 -->
    <div class="section1" style=" background-color:#49BBBD; border-radius:  0px 0px 100px 100px; padding-top:6rem; padding-bottom:4rem;">
        <div class="container">
            <div class="card" style="position: absolute; z-index:1; width:250px; height:80px ; color:white; border-radius:17px; margin-left:530px; margin-top:170px; opacity:90%; backdrop-filter:blur(8px);">
                <div class="row">
                    <div class="col-3">
                        <div class="card" style="width:40px; height:40px; background-color:#23BDEE; margin-left:20px; margin-top:20px">
                            <i class=" far fa-calendar-alt" style="font-size: 24px; padding-left:9px; padding-top:6px;"></i>
                        </div>
                    </div>
                    <div class="col-9" style="padding-left: 30px;">
                        <p style="color:#595959; margin-bottom:0% ;padding-top:15px; font-size:17px; font-weight:500">250k</p>
                        <span style="color:#595959">Assisted Student</span>
                    </div>
                </div>
            </div>
            <div class="card" style="position: absolute; z-index:1; width:300px; height:90px ; color:white; border-radius:17px; margin-left:950px; margin-top:320px">
                <div class="row">
                    <div class="col-3">
                        <div class="card" style="width:40px; height:40px; background-color:#F88C3D; margin-left:20px; margin-top:25px">
                            <i class="fas fa-envelope" style="font-size: 24px; padding-left:9px; padding-top:7px;"></i>
                        </div>
                    </div>
                    <div class="col-9">
                        <p style="color:#595959; margin-bottom:0% ;padding-top:20px; font-size:17px; font-weight:500">Congratulations</p>
                        <span style="color:#595959">Your admission completed</span>
                    </div>
                </div>
            </div>
            <div class="card" style="position: absolute; z-index:1; width:300px; height:140px ; color:white; border-radius:17px; margin-left:510px; margin-top:420px; backdrop-filter:blur(8px), opcacity(90%);">
                <div class="row">
                    <div class="col-3">
                        <img src="/assets/images/Ellipse.png" alt="" class="rounded-circle" style="width:50px; height:50px; margin-top:23px; margin-left:20px">
                    </div>
                    <div class="col-9" style="padding-left: 20px;">
                        <p style="margin-bottom:0% ;padding-top:20px; font-size:17px; font-weight:500; color:#595959">User Experience Class</p>
                        <span style="color:#595959">Today at 12.00 PM</span>
                        <button type="submit" class="btn" style="width: 140px; height:40px; background-color:#D8587E; border-radius:30px; margin-top: 17px; color:white"> Join Now</button>
                    </div>
                </div>
            </div>
            <div class=" row">
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
                            <div class="card mt-2" style="border-radius: 50%; width:60px; height:60px; background-color:white; margin-top:10px;">
                                <i class="fas fa-play" style="color: #23BDEE;  font-size: 21px;padding-top:20px; padding-left:22px;"></i>
                            </div>
                        </div>
                        <div class="col-4 mt-4 mr-5 pl-0" style="padding-top: 8px;">
                            <span style="color: black;">Watch how it works</span>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top:9rem; margin-bottom:4rem">
                    <img src="/assets/images/unsplash_section1.png" alt="" style="width:570px; height:400px">
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
            <div class="card mt-2" style="border-radius: 50%; width:50px; height:50px; background-color:white; margin-left:825px; position:absolute; z-index:2; margin-top:180px;">
                <i class="fas fa-play" style="color: #23BDEE;  font-size: 20px;padding-top:16px; padding-left:18px;"></i>
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
    <div class="section5" style="margin-bottom: 13rem;">
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
                    <p style="font-size: 18px;">Class has a dynamic set of teaching tools built to
                        <br>be deployed and used during class. Teachers can
                        <br>handout assignments in real-time for students to
                        <br>complete and submit.
                    </p>
                </div>
                <div class=" col-6">
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
                        <p style="font-size: 18px;">Easily launch live assignments, quizzes, and
                            <br> tests.Student results are automatically entered in
                            <br>the online gradebook.
                        </p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 3rem;">
                <div class="row">
                    <div class="col-6 " style="text-align: start; margin-top:9rem">
                        <h1 style="color:#2F327D; font-weight:500">Class Management
                            <br><span style="color: #00CBB8; font-weight:500">Tools for Educators</span>
                        </h1>
                        <p style="font-size: 18px;">Class provides tools to help run and manage the class
                            <br>such as Class Roster, Attendance, and more. With the
                            <br>Gradebook, teachers can review and grade tests and
                            <br>quizzes in real-time.
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="/assets/images/Group124.png" alt="" style="width:630px; height:420px">
                    </div>
                </div>
            </div>
            <div style="margin-top: 7rem; text-align:start">

                <button class="btn" type="submit" style="width: 60px; height: 60px; border-style:solid; border-color:#49BBBD; background-color:white; color:#49BBBD; 
                position:absolute; z-index:1; border-radius:50%; margin-top:317px; margin-left:210px">
                    <i class="fas fa-long-arrow-alt-right" style="color: #49BBBD; font-size:19px; padding-top:3px;"></i></button>

                <button class="btn" type="submit" style="width: 60px; height: 60px; background-color:white; color:#49BBBD; 
                position:absolute; z-index:1; border-radius:50%; margin-left:907px; margin-top:180px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <i class=" icon-arrow-right" style="color: #49BBBD; font-size:19px; margin-top:10px; font-weight:1000;"></i></button>

                <div class="card" style="width:420px; height:180px ;border-left:8px solid; border-color:#F67766; border-radius:10px;
                position:absolute; z-index:1; margin-left:620px; margin-top:307px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1">
                                <div style=" border-style: solid;border-left:1px; height:73px ;border-color:#BDBDD1"></div>
                            </div>
                            <div class="col-11">
                                <p style="font-size:13px;">"Thank you so much for your help. It's exactly what
                                    <br>I've been looking for. You won't regret it. It really
                                    <br>saves me time and effort. TOTC is exactly what our
                                    <br>business has been lacking."
                                </p>
                                <div class="row" style="padding-top: 10px;">
                                    <div class="col-6">
                                        <p>Gloria Rose</p>
                                    </div>
                                    <div class="col-6" style="text-align: end;">
                                        <div class="row" style="padding-left: 95px;">
                                            <i class="fas fa-star" style="font-size: 12px; color:#FBA333"></i>
                                            <i class="fas fa-star" style="font-size: 12px; color:#FBA333"></i>
                                            <i class="fas fa-star" style="font-size: 12px; color:#FBA333"></i>
                                            <i class="fas fa-star" style="font-size: 12px; color:#FBA333"></i>
                                            <i class="fas fa-star" style="font-size: 12px; color:#FBA333"></i>
                                        </div>
                                        <span style="font-size: 10px;">12 reviews at Yelp</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-2">
                                <hr style="border-color:#525596; width:60px; padding-bottom:15px; margin-top:10px;">
                            </div>
                            <div class="col-10">
                                <span style="font-weight: 300; letter-spacing:4px">TESTIMONIAL</span>
                            </div>
                        </div>
                        <h1 style="color: #2F327D; font-weight:500; margin-bottom:1rem">What They Say?</h1>
                        <p style="font-size: 19px;">TOTC has got more than 100k positive ratings
                            <br>from our users around the world.
                        </p>
                        <p style="font-size: 19px; margin-bottom:2rem">Some of the students and teachers were
                            <br>greatly helped by the Skilline.
                        </p>
                        <p style="font-size: 19px; margin-bottom:25px;">Are you too? Please give your assessment</p>
                        <button type=" button" class="btn btn-light" style="border-style:solid; border-color:#49BBBD; background-color:white; width:270px; height:60px ;border-radius:60px; text-align:left">
                            <span style="color:#49BBBD; padding-left:9px">Write your assessment</span></button>
                    </div>
                    <div class="col-6">
                        <img src="/assets/images/MaskGroup.png" alt="" style="width:360px; height:430px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION 5 -->

    <!--  SECTION 6 -->
    <div class="section6" style="margin-bottom: 7rem;">
        <div class="container">
            <div style="text-align: center; margin-bottom:5rem">
                <h2 style="font-weight: 500; color:#2F327D;">Lastest News and Resources</h2>
                <span>See the developments that have occurred to TOTC in the world</span>
            </div>
            <div class="row">
                <div class="col-6">
                    <img src="/assets/images/Group40.png" style="width: 460px; height:250px" alt="">
                    <div class="card" style="width: 90px; height:30px; background-color: #49BBBD; border-radius:20px; margin-top:30px;">
                        <span style="padding-top: 3px; padding-left:22px; color:white;">NEWS</span>
                    </div>
                    <p style="font-weight:600; color:#2F327D;">Class adds $30 million to its balance sheet for
                        <br> a Zoom-friendly edtech solution
                    </p>
                    <p>Class, launched less than a year ago by Blackboard
                        <br>co-founder Michael Chasen, integrates exclusively...
                    </p>
                    <p style="text-decoration: underline; color:#696984; padding-top:10px">Read more</p>
                </div>
                <div class="col-6">
                    <div class="row mb-4" style="padding-left: 50px;">
                        <div class="col-5">
                            <img src="/assets/images/Rectangle33.png" alt="" style="width: 190px; height:130px;">
                        </div>
                        <div class="col-7">
                            <p style="font-size: 11px; font-weight:500; color:#2F327D;">Class Technologies Inc. Closes $30 Million
                                <br> Series A Financing to Meet High Demand
                            </p>
                            <p style="font-size: 11px; font-weight:500;">Class Technologies Inc., the company that
                                <br>created Class,...
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4" style="padding-left: 50px;">
                        <div class="col-5">
                            <img src="/assets/images/Rectangle34.png" alt="" style="width: 190px; height:130px;">
                        </div>
                        <div class="col-7">
                            <p style="font-size: 11px; font-weight:500; color:#2F327D;">Zoom’s earliest investors are betting
                                <br>millions on a better Zoom for schools
                            </p>
                            <p style="font-size: 11px; font-weight:500;">Zoom was never created to be a consumer
                                <br>product. Nonetheless, the...
                            </p>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 50px;">
                        <div class="col-5">
                            <img src="/assets/images/Group43.png" alt="" style="width: 190px; height:130px;">
                        </div>
                        <div class="col-7">
                            <p style="font-size: 11px; font-weight:500; color:#2F327D;">Former Blackboard CEO Raises $16M to
                                <br>Bring LMS Features to Zoom Classrooms
                            </p>
                            <p style="font-size: 11px; font-weight:500;">This year, investors have reaped big
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