<?php

$conn = mysqli_connect('localhost', 'root', '', 'EM');

if(!$conn){
die("coonection failed:".mysqli_connect_error() );

}