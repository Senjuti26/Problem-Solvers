<?php
	session_start();
	include("./includes/connection.php");

if($_POST['cloth_status']){
    $id=$_POST['cloth_id'];
    $Status=$_POST['Status'];
    
    $sql = "Update cloth_donate SET Status='$Status' where id='$id' ";
    if(mysqli_query($con, $sql)) header('Location:http://www.weboftwo.com/goonj/manage_contribution.php');
}

if($_POST['book_status']){
    $id=$_POST['book_id'];
    $Status=$_POST['Status'];
    
    $sql = "Update book_donate SET Status='$Status' where id='$id' ";

    if(mysqli_query($con, $sql)) header('Location:http://www.weboftwo.com/goonj/manage_contribution.php');
}

?>