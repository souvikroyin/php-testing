<?php
$str = "This is a  string";
echo $str;
echo  "<br>";
$le = strlen($str);
echo "the lingth of this string is ";
echo $le;
echo  "<br>";
echo "the Number of this string is ".str_word_count($str) ;
echo  "<br>";
echo "the search for 'is' in this string is ".strpos($str, "is") ;
echo  "<br>";
echo "the replaced string is ". str_replace("a", "for", $str);









?>