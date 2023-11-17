<?php 

session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <style type="text/css">
       *{
   background-color:  rgb(225, 242, 250);
   margin: 5px 40px 0px 40px;
}
h1{
    text-align: center;
    color: rgb(11, 10, 10);
}
p{
    text-align: center;
    color: rgb(50, 51, 49);
}
a{
    float: right;
    padding: 10px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px;
    color: rgb(0, 0, 0);
    text-decoration: none;
}
a:hover{
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
}

    </style>
<br>
Hello, <?php echo $user_data['user_name'] ; ?>
<br> <br>
<a href="login.php">Logout</a>
    <br><br>
    <h1>Unbreakable Bonds</h1>
    <br><br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, voluptate perspiciatis provident unde, iusto facere consequatur tenetur sunt culpa, magnam alias magni adipisci eveniet est id autem omnis atque molestias.lorem200 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel aperiam sequi distinctio fugiat ad possimus quos id non numquam nostrum quam quae soluta aut assumenda atque fugit minima, voluptatibus veniam placeat tempore voluptas sunt cupiditate? Saepe quibusdam dolorum, fuga nemo eaque laudantium! Minus consequuntur quasi expedita quibusdam perspiciatis libero cupiditate nam quos est, eaque dolorum fugiat numquam placeat sunt. Aliquam saepe voluptatibus eum, fuga voluptates, autem aut necessitatibus maxime consequatur nemo ea. Voluptatem provident iure numquam! Mollitia doloremque soluta velit cum perspiciatis illo modi at, nam illum sed sit commodi esse et molestias accusamus voluptates ipsum rerum voluptas recusandae hic ratione similique? Sint quos pariatur error explicabo! Nulla illum aspernatur temporibus libero non impedit enim perferendis quo debitis. Eum eius quia illum asperiores laborum cumque possimus eveniet est ex unde, aliquid cum inventore in tenetur et? Autem enim ipsa quibusdam facilis voluptatem, architecto vitae saepe eos corporis quas aliquam ratione repellat est obcaecati laboriosam voluptate laborum provident nihil! Assumenda iste dignissimos fugiat voluptas facere, itaque, ad reiciendis unde excepturi, corporis et odit? Facere dolorum molestiae labore voluptate voluptatum? Ea maxime non laudantium odio quisquam dignissimos corrupti? Esse, maxime asperiores! Odit libero ea voluptates asperiores optio necessitatibus possimus nulla eos. Optio!</p>

</body>
</html>