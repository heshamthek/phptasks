<?php
// file one
// task1
// function isPrime($number) {
//     for ($i = 2; $i < $number; $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }
// $in = 10; 
// if (isPrime($in)) {
//     echo "$in is prime ";
// } else {
//     echo "$in  not  prime ";
// }

// task2


// function reverse($str) {
//     $rev = "";
//     for ($i = strlen($str) - 1; $i >= 0; $i--) {
//         $rev .= $str[$i];
//     }
//     return $rev;
// }
// $x = "orange acadmy"; 
// $rev = reverse($x);
// echo "Reversed: $rev";

// task3
// function lower($str) {

//     return $str === strtolower($str);
// }

// $strr= "Orange acadmy"; 
// if (lower($strr)) {
//     echo "all lowercase.";
// } else {
//     echo "not lowercase.";
// }

// task4

// $x = 5;
// $y = 10;



// function swap(&$a, &$b) {
//     $v = $a;
//     $a = $b;
//     $b = $v;

// }
// swap($x, $y);
// echo "x = $x, y = $y\n";

// task 5
// function armstrong_number($num)
// {
//     $sl = strlen($num);
//     $sum = 0;
//     $num = (string)$num;

//     for ($i = 0; $i < $sl; $i++) {
//         $sum = $sum + pow((string)$num[$i], $sl);
//     }

//     // Check if the sum is equal to the original number
//     if ((string)$sum == (string)$num) {
//         return true;
//     } else {
//         return false;
//     }
// }

// task 6
// function check_palindrome($string)
// {
//     if ($string == strrev($string))
//     return 1; 
//     else
//         return 0;
// }


//  task7

// function remove($array) {
//     return array_values(array_unique($array));
// }

// $inputArray = [1, 2, 2, 3, 4, 4, 5]; 
// $resultArray = remove($inputArray);

// print_r($resultArray);



// file tow
// task1

// function dash(){
//     $dd='';
//     for($i=0 ; $i<11 ;$i++){
//         $dd .=$i;
//         if($i < 10 ){
//             $dd .='-';
//         }
//     }
//     echo $dd;
// }
// dash();

// task2

// $w= 4; 
// $h = 4; 
// $i = 0; 
// while ($i++ < $h) { 
// 	echo str_repeat('*', $w).'<br>'; 
// } 

// task3

// $num=5;
// $f=1;
// for($i=$num;$i>1;$i--){
//     $f=$f*$i;
// }
//  echo $f;

// task4

// $x = 0;    
// $y = 1; 

// for($i=0;$i<=10;$i++)    
// {    
//     $z = $x + $y;    
//     echo $z."<br />";         
//     $x=$y;       
//     $y=$z;     
// }   
// echo $z;
// task5

// $in= "orange coding Aacdemy";
// $c = 0;
// for ($i = 0; $i < strlen($in); $i++) {
//     if ($in[$i] == 'c') {
//         $c++;
//     }
// }
// echo $c;

// task6

// echo "<table border='2'>";
// for($i=1;$i<6;$i++){
//     echo "<tr>";
//     for($q=1;$q<=5;$q++){
//         $result= $i * $q;
//         echo "<td>$i*$q=$result</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
 
// task7
// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 15 == 0) {
//         echo 'FizzBuzz<br>';
//     } elseif ($i % 3 == 0) {
//         echo 'Fizz<br>';
//     } elseif ($i % 5 == 0) {
//         echo 'Buzz<br>';
//     } else {
//         echo $i . '<br>';
//     }
// }
// task8

// function F($n){
//     $vv = 1;
//     for($i = 1; $i <= $n; $i++) {
//       for($j = 1; $j <= $i; $j++) {
//         echo "$vv "; 
//         $vv++;
//       }
    
//     }
//   }
  
//   F(5);
 
// last file string

//  task1
$input = "hello my name IS jef";
// echo strtoupper($input);
// echo "<br>";
// echo strtolower($input);
// echo "<br>";
// echo ucfirst($input);
// echo "<br>";
// echo ucwords($input);

// task2
// $date = date("H:i:s");
// echo  $date;
// task3
// $str = "hesham najem";
// strpos($str,'najem');

// task3
// $x = "I am a full stack developer at orange coding academy";
// $word= "Orange";

// $h = stripos($x, $word) !== false;

// if ($h) {
//     echo "good";
// } else {
//     echo "bad";
// }

// task4
// $url = 'https://www.google.com/';
// $p = parse_url($url);
// $x= basename($parsedUrl['path']);
// echo "File name: " . $x;
// task5
// $e = 'info@orange.com';
// $x = explode('@', $e);
// $user= $x[0];
// echo "Username: " . $username;

// task6
// $ch3 = substr($e, 12, 3);
// echo $ch3;
// task7
// $txt = 'aasndqbweibac1029387509857123';
// $txts = str_shuffle($txt);
// echo substr($txts, 6, 13);
// task8
// $str = "today, is, bad";
// $ar = explode(' ', $str);
// var_dump($arr);
// task9
// $ltr = range('a', 'z');
// echo implode(' ', $ltr);
// task10
// $num = '000000000111111';
// $numz = ltrim($num, '0');
// echo "no 0" . $numz;
// task11
// $str = 'hesham najem is good af -';
// $strn = rtrim($originalString, '-');
// echo "new " . $strn;
// task12
// $num = '1999,8';
// $nstr = str_replace(',', '', $num);
// echo "Updated Numeric String: " . $nstr;




?>
