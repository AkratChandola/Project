<?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password,"project");

    $name = $_POST['user'];
    $password = $_POST['password'];

    $records = mysqli_query($con,"select * from admin where admin_id = '$name' && password = '$password'");

    $num =mysqli_num_rows($records);

    if($num == 1)
    {   
        $_SESSION['admin_user'] = $name;
        header('location: product.php');
    }
    else{
        echo "
            <script>
            alert('Wrong Username or Password');
            window.location.href='admin login.html';
            </script>";
    }

?>