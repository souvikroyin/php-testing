
    <?php
if (isset($_POST['name'])) {
    # code...

     $server = "localhost";
     $username = "root";
     $password = "";

     $con = mysqli_connect($server, $username, $password);

     if (!$con) {
        die("connection to this database failed due to".
        mysqli_connect_error());
     }
     echo "success connecting to the db";

$name = $_post['name'];
$gender = $_post['gender'];
$age = $_post['age'];
$email = $_post['email'];
$phone = $_post['phone'];
$desc = $_post['other'];





     $sql = "INSERT INTO `trip.trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`)
     VALUES ( '$name', '$age', '$gender', '$email', '$phone','$desc', current_timestamp());";
      echo $sql;

      if ($con->query($sql) ==true) {
        echo "successfully inserted";
       
      }
      else {
        echo "error: $sql <br> $con->error";
      }
      $con->close();
    
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:wght@300;400;
    700&family=Rubik+Mono+One&family=Rubik+Wet+Paint&family=Ubuntu:wght@300&display=swap"
     rel="stylesheet">

</head>
<body>


    <img class="bg" src="bgg.jpg" alt="london">
    <div class="container">
        <h1>Welcome to Algosd London trip from</h1>
        <p>Enter your details and summit this form to confirm your participation in the trip. </p>
        <p class="submitedmsg">Thanks for submitting your form. We are happy to see you joining us for the Londan trip</p>
<form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="enter your name">
    <input type="text" name="name" id="age" placeholder="enter your age">
    <input type="text" name="name" id="age" placeholder="enter your gender">
    <input type="email" name="email" id="email" placeholder="enter your email">
    <input type="phone" name="phone" id="phone" placeholder="enter your phone number">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="entry other any informatation here"></textarea>
    <button class="btn">Submit</button>
    
</form>




    </div>
    <script src="index.js"></script>

    <!---->


    
</body>
</html>