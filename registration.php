<?php
    include 'server.php';
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $bdate=$_POST['date'];
            $gender=$_POST['gender'];
            $pass=$_POST['pass'];
            $eml=$_POST['eml'];
            $sql = "INSERT INTO myusers (Firstname, Lastname, Email, Passwrd,  Gender, Birthdate) VALUES ('$fname','$lname','$eml','$pass','$gender','$bdate')";

            if (mysqli_query($conn, $sql)) {
                echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    }
?>
