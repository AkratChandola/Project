<?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password,"project");

    $name = $_POST['user'];
    $password = $_POST['password'];

    $records = mysqli_query($con,"select * from users where user_id = '$name'");

    $num =mysqli_num_rows($records);

    if($num == 1)
    {
        echo "
            <script>
            alert('Username already exists');
            window.location.href='login.html';
            </script>
        ";
    }
    else{
        mysqli_query($con,"insert into users(user_id,password) values ('$name','$password')");
        echo "
            <script>
            alert('User Added...Now Login');
            window.location.href='login.html';
            </script>";
    }

?>