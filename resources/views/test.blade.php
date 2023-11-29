<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <title>Document</title>

  @extends('templates.default')

  @section('head')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
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

  <style>
    html {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 20% 0;
      overflow-x: hidden;
      font-family: "Montserrat", sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      background-color: #ff9800;
    }

    * {
      box-sizing: inherit;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    nav {
      background-color: #fff;
      padding: 0 3rem;
      border-radius: 0.625rem;
    }

    ul {
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      gap: 3rem;
    }

    li {
      list-style-type: none;
      position: relative;
      padding: 0.625rem 0 0.5rem;
    }

    li ul {
      flex-direction: column;
      position: absolute;
      background-color: white;
      align-items: flex-start;
      transition: all 0.5s ease;
      width: 20rem;
      right: -3rem;
      top: 4.5rem;
      border-radius: 0.325rem;
      gap: 0;
      padding: 1rem 0rem;
      opacity: 0;
      box-shadow: 0px 0px 100px rgba(20, 18, 18, 0.25);
      display: none;
    }

    ul li:hover>ul,
    ul li ul:hover {
      visibility: visible;
      opacity: 1;
      display: flex;
    }

    .material-icons-outlined {
      color: #888888;
      transition: all 0.3s ease-out;
    }

    .material-icons-outlined:hover {
      color: #ff9800;
      transform: scale(1.25) translateY(-4px);
      cursor: pointer;
    }


    .profile {
      height: 3rem;
      width: auto;
      cursor: pointer;
    }

    .sub-item {
      width: 100%;
      display: flex;
      align-items: center;
      gap: 0.725rem;
      cursor: pointer;
      padding: 0.5rem 1.5rem;
    }

    .sub-item:hover {
      background-color: rgba(232, 232, 232, 0.4);
    }

    .sub-item:hover .material-icons-outlined {
      color: #ff9800;
      transform: scale(1.08) translateY(-2px);
      cursor: pointer;
    }

    .sub-item:hover p {
      color: #000;
      cursor: pointer;
    }

    .sub-item p {
      font-size: 0.85rem;
      color: #888888;
      font-weight: 500;
      margin: 0.4rem 0;
      flex: 1;
    }
  </style>
</head>

<body>
  <nav>
    <ul>
      <li>
        <span class="material-icons-outlined"> notifications </span>
      </li>
      <li>
        <span class="material-icons-outlined"> favorite_border </span>
      </li>
      <li>
        <span class="material-icons-outlined"> shopping_cart </span>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="/assets/images/image12.png" alt="user" class="rounded-circle" width="40">
          <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">Jason Doe</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY" style="width: 100%; height:100%;">
          <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
            My Profile</a>
          <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card" class="svg-icon mr-2 ml-1"></i>
            My Balance</a>
          <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail" class="svg-icon mr-2 ml-1"></i>
            Inbox</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
            Account Setting</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
            Logout</a>
          <div class="dropdown-divider"></div>
          <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
              Profile</a></div>
        </div>
      </li>
    </ul>
  </nav>
</body>

</html>