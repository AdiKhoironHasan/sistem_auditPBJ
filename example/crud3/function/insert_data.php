<?php
    include_once 'connect.php';
    $success  = "";
    if(isset($_POST['add']))
    {  
        $username  = $_POST['username'];
        $useremail = $_POST['useremail'];
        $address   = $_POST['address'];
        $phone     = $_POST['phone'];
        
        $sql = "INSERT INTO users VALUES (NULL,'$username','$useremail','$address','$phone', NULL)";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        //mysqli_close($conn);
    }
?> 