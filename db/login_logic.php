<?php

//Signup
if(isset($_REQUEST['signup'])) {
    session_start();

        $username =  $_REQUEST['username'];
        $email =  $_REQUEST['email'];
        $password =  $_REQUEST['password'];

            // Sql query for Inserting Data 
            $sql = "INSERT INTO `login` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');";
            mysqli_query($conn, $sql);

            echo $sql;

            header("Location: /blogs/blog_create.php?sign=up&username=$username");
            exit();
}


//Signup
if(isset($_REQUEST['signin'])) {

    session_start();
 
    $email =  $_REQUEST['emailSignin'];
    $password =  $_REQUEST['passwordSignin'];

        // Sql query for Inserting Data 
        $sql = "SELECT username FROM login WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = mysqli_fetch_array($result)[0];
            while($rows = mysqli_fetch_array($result)){
                $username = $rows['username'];
            }
            header("Location: /blogs/blog_create.php?sign=in&username=$username");
        }
        else{
            header("Location: /blogs/login.php?error=1");
        }
        
        exit();
}





?>
