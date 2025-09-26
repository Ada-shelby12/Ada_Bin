<?php
if (isset($_POST['SUBMIT'])){
    $username = $_POST['Username'];
    $password = $_POST['Password '];
    $conn = new mysqli("localhost","root","", "student_database");
    $sql = "select * from student_login WHERE username= '".$username. "' and password='".$password. "'";
    $result .mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        echo "login Sucessful";
    }else{
        echo "Username & Password dont exist";
    }
}
?>