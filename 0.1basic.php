<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>text php</title>
</head>
<body>
    <div class="container">
        This is my first php website.
        <?php

        define('pi',105);
        echo "<br>";
        echo "hello world i am SOUVIK ROY";



        // Arithmatic operatirs
        echo "<br>";
        $VARIABLE=55;
        $VARIABLE1=42;
        echo "$VARIABLE";
        echo "<br>";
        echo "$VARIABLE1";
        echo "<br>";
        echo "Variable + Variable1 is ";
        echo  $VARIABLE + $VARIABLE1;


        echo "<br>";
        $VARIABLE=55;
        $VARIABLE1=42;
        echo "$VARIABLE";
        echo "<br>";
        echo "$VARIABLE1";
        echo "<br>";
        echo "Variable - Variable1 is ";
        echo  $VARIABLE - $VARIABLE1;


        echo "<br>";
        $VARIABLE=55;
        $VARIABLE1=42;
        echo "$VARIABLE";
        echo "<br>";
        echo "$VARIABLE1";
        echo "<br>";
        echo "Variable * Variable1 is ";
        echo  $VARIABLE * $VARIABLE1;



        echo "<br>";
        $VARIABLE=55;
        $VARIABLE1=42;
        echo "$VARIABLE";
        echo "<br>";
        echo "$VARIABLE1";
        echo "<br>";
        echo "Variable / Variable1 is ";
        echo  $VARIABLE / $VARIABLE1;







//Assignment operator
        echo "<br>";
        $newvar = $VARIABLE1;
        echo "The value of new var is ";
        echo $newvar;


        echo "<br>";
        $newvar = $VARIABLE1;
        $newvar += 5;
       // $newvar -= 3;
        echo "The value of new var is ";
        echo $newvar;   

        
        echo "<br>";
        $newvar = $VARIABLE1;
        $newvar -= 3;
        echo "The value of new var is ";
        echo $newvar;   

          
        echo "<br>";
        $newvar = $VARIABLE1;
        $newvar *= 3;
        echo "The value of new var is ";
        echo $newvar; 


        echo "<br>";
        $newvar = $VARIABLE1;
        $newvar /= 3;
        echo "The value of new var is ";
        echo $newvar; 




        //cpmparision operater
        echo "<br>";
        echo "the value of 15 ==51";
        echo var_dump(15==51);

        echo "<br>";
        echo "the value of 17 ==17";
        echo var_dump(17==17);

        echo "<br>";
        echo "the value of 17 >17";
        echo var_dump(17>17);

        echo "<br>";
        echo "the value of 17 <=17.5";
        echo var_dump(17<=17.5);
        echo "<br>";
        echo "the value of 17 not =32";
        echo var_dump(17!=32);






//increment / decrement

echo "<br>";
echo $VARIABLE1++;
echo "<br>";
echo $VARIABLE1;

echo "<br>";
echo --$VARIABLE1;
echo "<br>";
echo $VARIABLE1;


//logical operator
echo "<br>";
$myage = (false && true); 
echo var_dump($myage);

echo "<br>";
$myage1 = (true && true); 
echo var_dump($myage1);

echo "<br>";
$var = 45;
echo var_dump($var);

echo "<br>";
$var = 4.5;
echo var_dump($var);

echo "<br>";
$var = true;
echo var_dump($var);

echo "<br>";
$var = "souvik";
echo var_dump($var);

echo "<br>";
echo pi;





        
        ?>
    </div>
    
</body>
</html>