<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
       
        $user_name = $_POST['user_name'];
        $password =  $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "Please enter valid information"; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>


<style type="text/css">
    body{
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
    margin-left: 98px;
}
img
{
    height:40px;
    
}


    </style>

    <div id="box">

        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: black; text-align: center;">Signup</div>
            <br>
            <br>
            <br>
            <br>

            Username
            <input id="text" type="text" placeholder="Enter username" name="user_name"><br><br>
            Password
            <input id="text" type="password" placeholder="Enter password" name="password"><br><br>


            <input id="button" type="submit" value="Signup">
            <h5>or</h5>

<hr>
                
                    <a href="www.facebook.com"><img src="facebook.png"><img src="instagram.png"><img src="twitter.png">
                
<hr>
        <div id="a">
            <a href="login.php"><h5>Go back to Login</h5></a><br><br>
            
</div>
        </form>
    </div>
    
</body>
</html>