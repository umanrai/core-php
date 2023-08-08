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

    public function get()
    {
        $array = [
            [
                "Company" => "Esewa",
                "Contact" => 1,
                "Country" => "Germany"
            ],
            [
                "Company" => "khalti",
                "Contact" => 2,
                "Country" => "Mexico"
            ],
            [
                "Company" => "Esewa1",
                "Contact" => 3,
                "Country" => "Austria"
            ],
            [
                "Company" => "Esewa2",
                "Contact" => 4,
                "Country" => "UK"
            ],
            [
                "Company" => "Esewa3",
                "Contact" => 5,
                "Country" => "Canada"
            ],
            [
                "Company" => "Esewa4",
                "Contact" => 6,
                "Country" => "Italy"
            ]
        ];
        return $array;
    }
}