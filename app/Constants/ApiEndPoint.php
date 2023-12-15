<?php

namespace App\Constants;

class ApiEndPoint
{
    // auth
    public static $login                                           = "/api/login";
    public static $register                                        = "/api/register";

    // course
    public static $paginatekelas                                   = "/api/paginatekelas";
    public static $paginatesomekelas                               = "/api/paginatesomekelas";

    // blog
    public static $paginateblog                                    = "/api/paginateblog";
    public static $paginatesomeblog                                = "/api/paginatesomeblog";
    public static $categoryblog                                    = "/api/paginatecatblog";
    public static $getonekelas                                     = "/api/getonekelas";
}
