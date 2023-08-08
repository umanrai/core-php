<?php

namespace App\Lib;

class Feed
{

    public function get()
    {
        $args = [
            [
                "name" => "uman",
                "feed" => "lroeam 1212121",
                "email" => "sja@gmail.com"
            ],
            [
                "name" => "sachin",
                "feed" => "lroeam 222222",
                "email" => "sachin@gmail.com"
            ],[
                "name" => "polar",
                "feed" => "lroeam 33333",
                "email" => "polar@gmail.com"
            ]
        ];
        return $args;

    }

}
