<?php

$connection = mysqli_connect("localhost","root","","db_internship");

if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:student_retrival_day6.php");
}

$editId = $_GET['id'];

// Select Data from Table

$editq = mysqli_query($connection, "select * from table_student where stu_id ='{$editId}'") or die(mysqli_error($connection));
$editData = mysqli_fetch_array($editq);
// echo "<pre>";
// print_r($editData);


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
  

 
    // $q = mysqli_query($connection,"update table_student(stu_name,stu_gender,stu_dob,stu_email,stu_mobile,stu_address,
    //         stu_pincode,stu_password,stu_bloodgroup) values('{$name}','$gender','{$dob}','{$email}',
    //         '{$mobile}','{$address}','{$pincode}','{$password}','{$bloodGroup}')") or die("Error" . mysqli_error($connection));


    $q = mysqli_query($connection,"update table_student set
    stu_name='{$name}',
    stu_gender='{$gender}',
    stu_dob='{$dob}',
    stu_email='{$email}',
    stu_mobile='{$mobile}',
    stu_address='{$address}',
    stu_pincode='{$pincode}',
    stu_password='{$password}',
    stu_bloodgroup='{$bloodGroup}'
    where stu_id='{$editId}'
    ") or die("Error" . mysqli_error($connection));

    if($q){
        echo "<script>alert('Record Updated!');
                    window.location = 'student_retrival_day6.php'</script>";
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
    
            Name : <input type="text" value ="<?php echo $editData['stu_name'] ?>" name = "name"/>
            <br>
            <br>
            Gender : <select name = "gender" value ="<?php echo $editData['stu_gender'] ?>" >
                <option>Male</option>
                <option>Female</option>
            </select>
            <br>
            <br>
            Date of Birth: <input type="date" value ="<?php echo $editData['stu_dob'] ?>" name="dob" />
            <br>
            <br>
            Email: <input type="email" value ="<?php echo $editData['stu_email'] ?>" name="email" />
            <br>
            <br>
            Mobile No  : <input type="tel" value ="<?php echo $editData['stu_mobile'] ?>" name="mobile"/>
            <br>
            <br>
            Address: <input type="text" value ="<?php echo $editData['stu_address'] ?>" name="add" />
            <br>
            <br>
            Pincode: <input type="number" value ="<?php echo $editData['stu_pincode'] ?>" name="pincode" />
            <br>
            <br>
            Password: <input type="password" value ="<?php echo $editData['stu_password'] ?>" name="password" />
            <br>
            <br>
            Blood Group : <select name = "bloodG" value ="<?php echo $editData['stu_bloodgroup'] ?>">
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
    
</body>
</html>
