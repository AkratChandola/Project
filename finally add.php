<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($server,$username,$password,"project");
    if(!$conn)
        die("Error in Connection : ".mysqli_connect_error());
        if(isset($_POST['submit_product']))
        {
        $product_id = $_POST['product_Id'];
        $category_name = $_POST['category_name'];
        $category_id = $_POST['category_id'];
        $sql = "INSERT INTO `product_category` (`product_id`, `product_type`, `category_id`) VALUES ('$product_id', '$category_name', '$category_id');";

        if($conn-> query($sql)==TRUE)
        {
            header("Location: exit.html");
        }   
        else
        echo "Somethimg Went Wrong ".mysqli_error($conn);

        $conn->close();
        }

?>
