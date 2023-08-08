<?php

namespace App\Lib;

class Contact
{

    public $phone;

    public $email;

    public $country;

    public function __construct( $userPhone, $userEmail, $userCountry )
    {
        $this->phone = $userPhone;
        $this->email = $userEmail;
        $this->country = $userCountry;
    }

    public function row()
    {
        return [];
    }

}