<?php
$fruits = ["apple","orange","banana","qewi","watermelon"];
// array_push($fruits, "tomato");
// array_pop($fruits);
// if ($fruits[1] == "orange") {
//   echo "orange is here";
// }
// for ($i = 0; $i < count($fruits);$i++){
//   echo $fruits[$i];
// };

// task2
$humans = [
  ["name" => "mustafa", "age" => 21],
  ["name" => "hesham", "age" => 25],
  ["name" => "abdullah", "age" => 24]
];
// print_r($humans);
// $new_human = ["name" => "sami", "age" => 22];
// array_push($humans, $new_human);
// unset($humans[3]);
// print_r($humans);
// if ($humans[1] == $humans[1]) {
//     echo "human is here";
//    };
   
  //  print_r(array_keys($humans));
  //  print_r(array_values($humans));
  //  print_r(count($humans));
  // print_r(array_merge($humans,$fruits));
 //  echo array_search("name",$humans);

// task1 file 2

// $city = ["jordan","amman","aqaba","irbd","tafilah","cairo","tokyo","bankok","sena"]; 
// print_r (array_reverse($city));
// echo $city[1];
// unset($city["tokyo"]);

// $subArray = array_slice($city,0,3);
// print_r($subArray);
// task2

$products = [
  ["name" => "Apple", "price" => 0.50],
  ["name" => "Banana", "price" => 0.30],
  ["name" => "Orange", "price" => 0.80],
  ["name" => "Milk", "price" => 1.50],
  ["name" => "Bread", "price" => 2.00]
];
usort($products, function($a, $b) {
  return strcmp($a['name'], $b['name']);
});

// foreach ($products as $product) {
//     echo "Product: " . $product['name'];
// }
// foreach ($products as $price) {
//   echo "price: " . $price['price'];
// }
$total_price = 0;
$product_count = count($products);

// foreach ($products as $product) {
//     $total_price += $product['price'];
// }
// if ($product_count > 0) {
//     $average_price = $total_price / $product_count;
//     echo $average_price;
// } ;

// $most = null;
// $highest_price = 0;
// foreach ($products as $product) {
//     if ($product['price'] > $highest_price) {
//         $highest_price = $product['price'];
//         $most = $product;
//     }
// }
// if ($most !== null) {
//   echo $most['name'];
//     echo $most['price'];
// } 

//!task4
$newarr=["hesham","ahamd","abdullah","mustafa"];
// $up = array_map('strtoupper', $newarr);
// print_r($up);
$num= [1,2,3,4,5,6,7];
// function big($i){
//   if($i>5){
//     return $i; 
//   };
// };
// print_r(array_filter($num,"big"));


// $sum = array_reduce($num, function($v1, $v2) {
//     return $v1 + $v2;
// }, 0);

// echo $sum;


// $newarr = ["one", "two", "three"];
// array_walk($newarr, function(&$item) {
//     $item = strtoupper($item);
// });
// print_r($newarr);
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$arr3= ["hh","ss","kk","gg","ll"];

// $diff = array_diff($arr1, $arr2);
// print_r($diff);

// $intersect = array_intersect($arr1, $arr2);
// print_r($intersect); 

// $comb = array_combine($arr1, $arr3);
// print_r($comb);


// $pe = [
//   ['id' => 1, 'name' => 'hesham'],
//   ['id' => 2, 'name' => 'najem'],
//   ['id' => 3, 'name' => 'njem']
// ];

// $names = array_column($pe, 'name');
// print_r($names); 


// $slice = array_slice($arr1, 2, 2);
// print_r($slice); 
// $array = [1, 2, 3, 4, 5];

$v = 3;
if (in_array($v, $arr1)) {
    echo "$v hi.";
} else {
    echo "$v bye.";
}










