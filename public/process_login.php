<?php
$password = "secret";
$hash_format = "$2y$10$";
$salt = "Salt22CharactersOrMore";
echo "Length: " .strlen($salt);
$format_and_salt = $hash_format . $salt;

$hash = crypt($password, $format_and_salt);
echo $hash;
    ?>
