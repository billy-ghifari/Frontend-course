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

    public static $editkelas                                       = "/api/editkelas/";




    // blog
    public static $createblog                                      = "/api/createblog";

    public static $paginateblog                                    = "/api/paginateblog";
    public static $paginatesomeblog                                = "/api/paginatesomeblog";
    public static $categoryblog                                    = "/api/paginatecatblog";
    public static $getonekelas                                     = "/api/getonekelas";
    public static $catblog                                         = "/api/getallcatblog/";

    public static $editblog                                        = "/api/editblog/";

    public static $delblog                                         = "/api/deleteblog/";


    //admin
    public static $makeadmin                                       = "/api/makeadmin";
    public static $makementor                                      = "/api/makementor";

    public static $deleteacc                                       = "/api/deleteadmin/";

    public static $getallonsiswa                                   = "/api/getallonsiswa";
    public static $allblog                                         = "/api/allblog";
    public static $alladmin                                        = "/api/getalladmin";
    public static $allmentor                                       = "/api/getallmentor";
    public static $allsiswa                                        = "/api/getsiswa";

    public static $allkelas                                        = "/api/getkelas";
    public static $countkelas                                      = "/api/getallkelas";
    public static $detailkelas                                     = "/api/getkelasbyid/";
    public static $categorykelas                                   = "/api/getallcategory";
    public static $createkelas                                     = "/api/createkelas";


    public static $detailmateri                                    = "/api/getmateri/";
    public static $countmateri                                     = "/api/getallmateri";
    public static $createmateri                                    = "/api/createmateri";
    public static $restoremateri                                   = "/api/restoremateri/";
    public static $deletemateri                                    = "/api/deletemateri/";

    public static $countblog                                       = "/api/getallblog";
    public static $detailblog                                      = "/api/getoneblog/";
}
