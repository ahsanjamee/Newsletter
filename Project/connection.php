<?php

$con = mysqli_connect('localhost', 'root', '', 'CS');

if(!$con){
die("coonection failed:".mysqli_connect_error() );

}