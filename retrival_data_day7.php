<?php

// DB connection
$connection = mysqli_connect("localhost","root","","db_internship");

// Query
$q = mysqli_query($connection,"select * from table_student where is_deleted= 0") or die(mysqli_error($connection));

echo "<table border='2'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Date of Birth</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Pincode</th>";
echo "<th>Password</th>";
echo "<th>Blood Group</th>";
echo "<th>Action</th>";
echo "</tr>";
$i = 0;
while($row = mysqli_fetch_array($q)){
    $i++;
    echo "<tr>";
    // echo "<td>{$row['stu_id']}</td>";
    echo "<td>{$i}</td>";
    echo "<td>{$row['stu_name']}</td>";
    echo "<td>{$row['stu_gender']}</td>";
    echo "<td>{$row['stu_mobile']}</td>";
    echo "<td>{$row['stu_dob']}</td>";
    echo "<td>{$row['stu_email']}</td>";
    echo "<td>{$row['stu_address']}</td>";
    echo "<td>{$row['stu_pincode']}</td>";
    echo "<td>{$row['stu_password']}</td>";
    echo "<td>{$row['stu_bloodgroup']}</td>";
    echo "<td><a href ='student_edit_day8.php?id={$row['stu_id']}'>Edit</a> | <a href='delete.php?deleteId={$row['stu_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<br><a href='./student_insertion_day5.php'>Insert Record</a>"



?>
