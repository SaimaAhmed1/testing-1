<?php
session_start();
$title=$_POST["title"];
$details=$_POST["details"];
$author=$_POST["author"];
// data velidation
$errors=[];
// title validation
    if(empty($title)){
       $errors["title_error"]= "title koi?";} 
    else if (strlen($title)>5){
        $errors["title_error"]="atto beshi kno?";
    } 
    // details validation
    if( empty($details)){
        $errors["detail_error"]="details koi?";
    }
    // error>0
    if(count($errors)>0){
        $_SESSION['errors']=$errors;
    }
    // ridirection
    // header("location:../index.php");

