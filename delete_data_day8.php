<?php

$connection = mysqli_connect("localhost","root","","db_internship");

$id = $_GET['deleteId'];

$q = mysqli_query($connection,"update table_student set is_deleted = 1 where stu_id='{$id}'") 
        or die(mysqli_error($connection));


if($q){
    echo "<script>alert('Record Deleted');window.location='student_retrival_day6.php';</script>";
}

?>
