<?php
require "include/config.php";



$newURL = $redi_list[array_rand($redi_list)];

// var_dump($newURL); //DEBUG
header('Location: '.$newURL);
die();



 ?>
