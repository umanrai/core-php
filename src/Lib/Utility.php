<?php

namespace App\Lib;

class Utility
{

    public $contacts = [
        [
            'phone' => 5151185,
            'email' => 'cont@gmail.com',
            'country' => 'Nepal'
        ],
        [
            'phone' => 51514185,
            'email' => 'cont1@gmail.com',
            'country' => 'Nepal1'
        ],
        [
            'phone' => 51511853,
            'email' => 'cont2@gmail.com',
            'country' => 'Nepal2'
        ],
        [
            'phone' => 515118522,
            'email' => 'cont3@gmail.com',
            'country' => 'Nepal3'
        ],
        [
            'phone' => 51511853,
            'email' => 'cont3@gmail.com',
            'country' => 'Nepal4'
        ]

    ];

    public function getUsername( $name )
    {
        return ucwords($name) . ' is a good biy';
    }

    public function contacts ()
    {
        $contacts = [];

        foreach ($this->contacts as $contact)
        {
            $contacts[] = new Contact($contact['phone'], $contact['email'], $contact['country']);
        }
//        $contact = new Contact(877, 'xas@gmail.com', 'Nepal');
        return $contacts;
    }
}