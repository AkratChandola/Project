<?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password,"project");

    $name = $_POST['user'];
    $password = $_POST['password'];

    $records = mysqli_query($con,"select * from users where user_id = '$name' && password = '$password'");

    $num =mysqli_num_rows($records);

    if($num == 1)
    {   
        $_SESSION['user'] = $name;
        header('location: front page.php');
    }
    else{
        echo "
            <script>
            alert('Wrong Username or Password');
            window.location.href='login.html';
            </script>";
    }

?>