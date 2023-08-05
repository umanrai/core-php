<?php

$sensitiveData = "uman";
$salt = bin2hex(random_bytes(16)); // Generates random salt
$pepper = "ASecretPepperString";

// echo "<br />" . $salt;

$dataToHash = $sensitiveData . $salt .$pepper;
$hash = hash("sha256", $dataToHash);

// echo "<br />" . $hash;

// Checking above give data is same or not
$sensitiveData = "uman";

$storedSalt =$salt;
$storedHash =$hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt .$pepper;
$verificationHash = hash("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
    echo "The data are the same!";
} else {
    echo "The data are not the same!";
}