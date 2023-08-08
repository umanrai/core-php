<?php

namespace App;

use App\Lib\Feed;
use App\Lib\Utility;

class User
{

    public function getFullName( $firstname, $middlename, $lastname )
    {
        return ucwords( $firstname . " " . $middlename  . " ". $lastname );
    }


    public function getCurrentTime()
    {
        return date("Y/m/d");
    }
}