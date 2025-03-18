<?php
// 1. Find Maximum & Minimum from 1D Array
//একটি 1D অ্যারে দেওয়া থাকবে, যেখানে বিভিন্ন সংখ্যা থাকবে। তুমি সেই অ্যারের সর্বোচ্চ ও সর্বনিম্ন মান খুঁজবে।
$numbers = [10, 45, 3, 89, 23, 67, 99, 12, 5];
$max = max($numbers);
$min = min($numbers);
echo "max->".$max." and min->".$min."<br>";





function check_maxi_and_mini(){
    $chamber = [10,20,30,40,50,60,7,9,55,44,33];
    $maxi = $chamber[0];
    $mini = $chamber[0];
    foreach($chamber as $cham){
        if($cham > $maxi)$maxi=$cham;
        if($cham < $mini)$mini=$cham;
    }
    return "max->".$maxi." and min->".$mini;
    
}
echo check_maxi_and_mini();