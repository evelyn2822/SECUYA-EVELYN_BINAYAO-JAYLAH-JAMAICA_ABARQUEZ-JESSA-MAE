<?php
session_start(); 

include("connection.php"); 
include("functions.php"); 

if($_SERVER['REQUEST_METHOD'] =="POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password =  $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";

       $result = mysqli_query($con, $query);

       if($result)
       {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] == $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        }
       }

        header("Location: login.php");
        die;
        echo "Wrong Username or Password!";
    }else
    {
        echo "Wrong Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <style type="text/css">
        body
        {
            background-color: rgb(225, 242, 250);
        }
        #text{

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;

        }

        #button{
            padding: 10px;
            width: 100px;
            color: black;
            background-color: white;
            border: 3px solid #ddd;
            font-weight: bold;
            text-transform: uppercase;
            padding: 13px;
            border-radius: 5px;
            margin-left: 105px;
        
        }

        #box{
            background-color: rgb(85, 196, 248);
            margin: auto;
            height: 500px;
            width: 300px;
            padding: 20px;
            
        }

        h5 {
            overflow: hidden;
            text-align: center;
}
        h5 :before,
        h5 :after {
            background-color: #000;
            content: "";
            display: inline-block;
            height: 1px;
            position: relative;
            vertical-align: middle;
            width: 50%;
}

a {
    text-align: center;
    margin-left: 130px;
}

    </style>

    <div id="box">

        <form method="post">
            
            <div style="font-size: 20px;margin: 10px;color: black; text-align: center;">Login</div>
            <br>
            <br>
            <br>
            <br>

            Username
            <input id="text" type="text" placeholder="Enter username" name="user_name"><br><br>
            Password
            <input id="text" type="password" placeholder="Enter password" name="password"><br><br>


            <input id="button" type="submit" value="Login">

            <h5>or</h5>
            <div id="a">
            <a href="signup.php"><b>Signup</a><br><br>
</div>
            
        </form>
    </div>
    
</body>
</html>