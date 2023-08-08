<?php

namespace App\Lib;

class Feed
{

    public function get()
    {
        $args = [
            [
                "name" => "uman",
                "age" => 30,
                "email" => "sja@gmail.com"
            ],
            [
                "name" => "sachin",
                "age" => 20,
                "email" => "sachin@gmail.com"
            ],[
                "name" => "polar",
                "age" => 10,
                "email" => "polar@gmail.com"
            ]
        ];
        return $args;

    }

}
