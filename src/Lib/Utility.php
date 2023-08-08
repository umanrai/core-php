<?php

namespace App\Lib;

class Utility
{

    public function getUsername( $name )
    {
        return ucwords($name) . ' is a good biy';
    }

}