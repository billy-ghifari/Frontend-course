<?php

namespace App\Constants;

class ApiEndPoint
{
    //profile
    public static $profile                                         = "/api/getprofile";
    public static $uuid                                            = "/api/getuuid/";

    // auth
    public static $login                                           = "/api/login";
    public static $loginadmin                                      = "/api/loginadmin";
    public static $register                                        = "/api/register";

    // course
    public static $paginatekelas                                   = "/api/paginatekelas";
    public static $paginatesomekelas                               = "/api/paginatesomekelas";

    // blog
    public static $createblog                                      = "/api/createblog";
    public static $paginateblog                                    = "/api/paginateblog";
    public static $paginatesomeblog                                = "/api/paginatesomeblog";
    public static $categoryblog                                    = "/api/paginatecatblog";
    public static $getonekelas                                     = "/api/getonekelas";
    public static $catblog                                         = "/api/getallcatblog/";

    //admin
    public static $getallonsiswa                                   = "/api/getallonsiswa";
    public static $allblog                                         = "/api/allblog";
    public static $alladmin                                        = "/api/getalladmin";
    public static $allmentor                                       = "/api/getallmentor";
    public static $allsiswa                                        = "/api/getsiswa";

    public static $allkelas                                        = "/api/getkelas";
    public static $countkelas                                      = "/api/getallkelas";
    public static $detailkelas                                     = "/api/getkelasbyid/";

    public static $detailmateri                                    = "/api/getmateri/";
    public static $countmateri                                     = "/api/getallmateri";

    public static $countblog                                       = "/api/getallblog";
    public static $detailblog                                      = "/api/getoneblog/";
}
