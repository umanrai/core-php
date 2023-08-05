<?php

$pwdSignup = "uman";

$options = [
  'cost' => 12
];

$hashedPwd = password_hash( $pwdSignup, PASSWORD_BCRYPT, $options ); // PASSWORD_BCRYPT is hashing algorithm.

$pwdLogin = "uman";

if (password_verify($pwdLogin, $hashedPwd)){
    echo "They are the same!";
} else {
    echo "They are not the same!";
}