<?php
$insert=false;
if(isset($_POST['name'])){
// here we make a connection with mysql database
// if you want to connect with "mysql i " database thn we have 2 ways  ,,beginers
// 1. use Mysequal extension "mysql i "
// 2. or use php data objects

// steps to connect from database
// 1. make three variables
// ex $_SERVER='localhost'  , $username="root" , password=""
$server = "localhost";
$username = "root";
$password = "";

// than make another var to create connection and there is a function by name mysqi_connect 
$con= mysqli_connect($server, $username, $password);
// by completing upper steps your server is securely made with database and you can check it by writing below code

if(!$con){
    die("connection to this database failed due to" 
    .mysqli_connect_error());
}
// echo "connection succesfully created";

// when connection is successfully created with database than we have to insert those values that will come through post
// here we have to execute my sql query, make a var and than copy paste the sql query
// $sql="INSERT INTO `trip` (`SNo.`, `name`, `age`, `email`, `phone`, `other`, `date`) VALUES ('1', 'textbox', '23', 'this@this.com', '9876541230', 'This is my first PHP webpage.', '2021-03-28');";
// remove sr no beacause it is auto increment

$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
// $phone=$_POST['Phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `desc`) VALUES ('$name', '$age', '$email', '$desc');";
// echo $sql;

// now we have to reflect these values in database
// so we have to make connection

if($con->query($sql)== true){
    // echo "successfully inserted";
    $insert=true;
}
else{
    echo "error:$sql <br> $con->error";
}

$con->close();
}
?>
<!-- php close here -->
<!-- html starts here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <!-- you have a college and you wants to travel, than you want the details of peoples like ,payment mode,name ,pickup location etc.so you share the link with them and thata information goes into your database -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="IET LUCKNOW">
    <div class="container">
        <h2>Welcome to IET LUCKNOW Trip</h2>
        <p>Enter your details to confirm the participation in the Trip</p>

        <?php
        if($insert==true){
        echo "<p class='submitmsg'>Thanks for submitting your form.We are happy to see you joining us for the US trip</p>";
        }
        ?>

        <form action="index.php" method="post">

            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <!-- <input type="Phone" name="phone" id="phone" placeholder="Enter your Phone Number"> -->
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>
<!-- INSERT INTO `trip` (`SNo.`, `name`, `age`, `email`, `phone`, `other`, `date`) VALUES ('1', 'textbox', '23', 'this@this.com', '9876541230', 'This is my first PHP webpage.'); -->