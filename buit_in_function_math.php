<?php
//1  একটি ভেরিয়েবলে -15 সংরক্ষণ করুন এবং abs() ফাংশন ব্যবহার করে এটি পজিটিভ সংখ্যা বানান।
$abs_task = -15;
echo abs($abs_task)."<br>";


//2 সংখ্যা 4.3 এবং 4.8 এর জন্য ceil() এবং floor() ব্যবহার করে দেখান কিভাবে সংখ্যা রাউন্ড হয়।
$floor_task = 4.3;
echo "floor result = " . ceil($floor_task) ."<br>";

$ceil_task = 4.8;
echo "ceil task = ". floor($ceil_task) ."<br>";


//3  একটি অ্যারে [10, 5, 20, 8, 15] থেকে সর্বোচ্চ এবং সর্বনিম্ন সংখ্যা বের করুন।
$max_array = [10,20,4,8,15];
echo "Max number from array = " . max($max_array) ."<br>";



//4  sqrt() ফাংশন ব্যবহার করে ২৫, ১০০ এবং ১২১ সংখ্যার বর্গমূল বের করুন।
$sqrt_check_1 = 25;
$sqrt_check_2 = 100;
$sqrt_check_3 = 121;

function checkSquare ($value){
    return sqrt($value);
}
echo checkSquare($sqrt_check_1) . "<Br>";
echo checkSquare($sqrt_check_2) . "<Br>";
echo checkSquare($sqrt_check_3). "<Br>";



// 5 pow(5, 3) এবং pow(2, 8) এর মান বের করুন।
echo pow(5,3) ."<br>";
echo pow(2,8) ."<br>";


//6  1234567.8910 সংখ্যাটিকে ২ দশমিক সংখ্যা সহ সুন্দরভাবে ফরম্যাট করুন (number_format())।
$decimal_number = 1234567.8910;
echo number_format($decimal_number,2)."<br>";



//7  round() ব্যবহার করে 3.14159 সংখ্যাকে ২ ও ৩ দশমিক পর্যন্ত রাউন্ড করে দেখান।

function makeRoundAllDecimal($value){
    return round($value,2);
}

function makeRoundAllDecimal2($value){
    return round($value,3);
}
echo makeRoundAllDecimal(3.2343434) . "<br>";
echo makeRoundAllDecimal2(3.2343434) . "<br>";



//8  ১ থেকে ১০০ এর মধ্যে একটি র্যান্ডম সংখ্যা জেনারেট করুন।

echo rand(1,100)."<br>";



//9   ইউজার ইনপুট নিন, যদি সংখ্যা ২ দিয়ে ভাগ করলে ভাগশেষ ০ হয়, তাহলে "Even" না হলে "Odd" প্রিন্ট করুন।

$user_number = 11;
echo $user_number%2===0?"This is even number":"This is odd number" . "<br>";



//10  rand(1, 6) ব্যবহার করে ৬-পৃষ্ঠার একটি ডাইস রোলিং সিমুলেটর তৈরি করুন।

function diceRoll(){
    return rand(1,6);

}
echo diceRoll()."<br>";