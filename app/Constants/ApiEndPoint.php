<?php

namespace App\Constants;

class ApiEndPoint
{
    // auth
    public static $login                                           = "/api/login";
    public static $loginadmin                                      = "/api/loginadmin";
    public static $register                                        = "/api/register";

    // course
    public static $paginatekelas                                   = "/api/paginatekelas";
    public static $paginatesomekelas                               = "/api/paginatesomekelas";

    // blog
    public static $paginateblog                                    = "/api/paginateblog";
    public static $paginatesomeblog                                = "/api/paginatesomeblog";
    public static $categoryblog                                    = "/api/paginatecatblog";
    public static $getonekelas                                     = "/api/getonekelas";

    //admin
    public static $getallonsiswa                                   = "/api/getallonsiswa";
    public static $allblog                                         = "/api/allblog";
    public static $alladmin                                        = "/api/getalladmin";
    public static $allmentor                                        = "/api/getallmentor";
    public static $allsiswa                                        = "/api/getsiswa";
    public static $allkelas                                        = "/api/getkelas";
}
