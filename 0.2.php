<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php test</title>
</head>
<style>
    {
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max width: 80%;
        background: red;
        margin: auto;
    }
</style>
<body>
    <div class="container">
       <h1>Hey, this a testing</h1> 
       hello world...
        <?php
        $age = 12;
        if($age>=18){echo "you can go to the party";}
        else if ($age==12){echo "you are only 12 years old!";}
        else{ echo "you can not go to the party";}
        echo "<br>";
        $language = array("C++","Python","php","java");
        echo $language[2];
        echo "<br>";
        echo count($language);

$a=0;
while ($a <= 10) {
    echo "<br> the value of a is: ";
    echo $a;
    $a++;
    echo "<br>";
}
echo "<br>";

$a=0;
while ($a < count ($language)) {
    echo "<br> the value of language is: ";
    echo $language[$a];
    $a++;
    echo "<br>";
}
echo "<br>";

for ($i=0; $i <= 10; $i++) { 
    echo "<br> the value of i is: ";
    echo $i;
}
echo "<br>";

foreach ($language as $roy ) {
    echo " <br> the valu is: ";
    echo $roy;
}
echo "<br>";

function print5 (){
    echo "five";
    
}
print5();
echo "<br>";

function print_number($number)
{echo "<br> your number is: ";
    echo $number;
}
print_number(60);

        ?>
        
    </div>
</body>
</html>