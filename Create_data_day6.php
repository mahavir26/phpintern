<?php

$connection = mysqli_connect("localhost","root","","db_internship");

if($_POST){
    // echo "Record inserted";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $address = $_POST['add'];
    $pincode = $_POST['pincode'];
    $password = $_POST['password'];
    $bloodGroup = $_POST['bloodG'];
    // $mobile = $_POST['mobile'];

    // echo "$name.$gender.$mobile.$dob.$email.$address.$pincode.$password.$bloodGroup";
    $q = mysqli_query($connection,"insert into table_student(stu_name,stu_gender,stu_dob,stu_email,stu_mobile,stu_address,
            stu_pincode,stu_password,stu_bloodgroup) values('{$name}','$gender','{$dob}','{$email}',
            '{$mobile}','{$address}','{$pincode}','{$password}','{$bloodGroup}')") or die("Error" . mysqli_error($connection));

    if($q){
        echo "<script>alert('Record Inserted!')</script>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    
            Name : <input type="text" name = "name"/>
            <br>
            <br>
            Gender : <select name = "gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            <br>
            <br>
            Date of Birth: <input type="date" name="dob" />
            <br>
            <br>
            Email: <input type="email" name="email" />
            <br>
            <br>
            Mobile No  : <input type="tel" name="mobile"/>
            <br>
            <br>
            Address: <input type="text" name="add" />
            <br>
            <br>
            Pincode: <input type="number" name="pincode" />
            <br>
            <br>
            Password: <input type="password" name="password" />
            <br>
            <br>
            Blood Group : <select name = "bloodG">
                <option>O+</option>
                <option>O-</option>
                <option>A+</option>
                <option>A-</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
            </select>
            <br>
            <br>
            <input type="submit"/>
    
    </form>
    <br>
    <a href="./student_retrival_day6.php">Show Record</a>
</body>
</html>
