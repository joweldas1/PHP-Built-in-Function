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






//🚀 2. Reverse a 1D Array
//একটি 1D অ্যারে উল্টো করে প্রিন্ট করতে হবে।
$fruits = ["Apple", "Mango", "Banana", "Orange"];
$reverse_fruit = array_reverse($fruits);
echo "<pre>";
print_r($reverse_fruit);
echo "</pre>";



//3. Sum of All Elements in a 1D Array
//একটি 1D অ্যারে দেওয়া থাকবে, তার মোট যোগফল বের করতে হবে।

function calculate_sum (){
    $numbersY = [10, 20, 30, 40, 50];
    $count=0;
    foreach($numbersY as $num){
        $count +=$num;
}
return $count;
}
echo calculate_sum()."<br>";




//4. Find the Largest Number from a 2D Array
//একটি 2D অ্যারে দেওয়া থাকবে, যেখানে কয়েকটি সংখ্যা থাকবে। তোমার কাজ হলো, সর্বোচ্চ সংখ্যাটি খুঁজে বের করা।

$matrix = [
    [2, 5, 8],
    [12, 9, 7],
    [4, 15, 3]
];

$max_y = 0;
foreach($matrix as $row){
    foreach($row as $num){
        if($num>$max_y)$max_y=$num;
    } 
}
echo "max num -------- > $max_y <br>";






//🚀 5. Calculate Total Marks from Associative Array
//একটি associative মাল্টিডাইমেনশনাল অ্যারে দেওয়া থাকবে, যেখানে বিভিন্ন ছাত্রের নাম ও তাদের প্রাপ্ত নম্বর দেওয়া থাকবে। তোমার কাজ হলো প্রত্যেক ছাত্রের মোট নম্বর বের করা।

$students = [
    "Abir" => ["Math" => 85, "Science" => 90, "English" => 78],
    "Rahim" => ["Math" => 88, "Science" => 92, "English" => 81],
    "Karim" => ["Math" => 79, "Science" => 85, "English" => 76]
];

function find_out_total_marks_of_students($students){
    foreach($students as $name=>$subjects){
        $totla_marks = 0;
       foreach($subjects as $subject=>$num){
        $totla_marks +=$num;
       }
       echo "$name's totla marks is $totla_marks  <br>";    
    }
}
find_out_total_marks_of_students($students);



//🚀 6. Count the Number of Elements in a Multidimensional Array
//একটি মাল্টিডাইমেনশনাল অ্যারে দেওয়া থাকবে, যেখানে বিভিন্ন লিস্ট থাকবে। তোমাকে সেই অ্যারেতে মোট কয়টি এলিমেন্ট আছে তা গণনা করতে হবে।

$data = [
    ["A", "B", "C"],
    ["D", "E"],
    ["F", "G", "H", "I"]
];


function find_elements($data){
    $total_ele = 0;
foreach($data as $deta){
    foreach($deta as $ele){
        $total_ele+=1;
    }
}
return $total_ele;  
}
echo find_elements($data);



//🚀 7. Find Students Who Scored More Than 80 in English
//একটি associative মাল্টিডাইমেনশনাল অ্যারে দেওয়া থাকবে,
//যেখানে বিভিন্ন ছাত্রের নাম ও তাদের বিষয়ভিত্তিক নম্বর থাকবে। তোমার কাজ হলো, যেসব ছাত্র ইংরেজিতে ৮০ এর বেশি পেয়েছে, তাদের নাম প্রিন্ট করা।
$students = [
    "Arif" => ["Math" => 78, "Science" => 82, "English" => 85],
    "Jamal" => ["Math" => 90, "Science" => 88, "English" => 75],
    "Sabbir" => ["Math" => 85, "Science" => 89, "English" => 92]
];
    




$students = [
    "Arif" => ["Math" => 78, "Science" => 82, "English" => 85],
    "Jamal" => ["Math" => 90, "Science" => 88, "English" => 75],
    "Sabbir" => ["Math" => 85, "Science" => 89, "English" => 92]
];

function find_best($students){
    $best_students = [];  // To store students with English marks > 80
    foreach($students as $name => $marks){
        if($marks["English"] > 80){
            $best_students[] = $name;  // Add name to the array
        }
    }
    return $best_students;  // Return the array of students
}

$best_students = find_best($students);
echo "<br>Students who scored more than 80 in English:<br>";
foreach($best_students as $student) {
    echo $student . "<br>";  // Output all the student names
}









$students_a = [
    [101, "Alice", 85],
    [102, "Bob", 78],
    [100, "Charlie", 92],
    [104, "David", 88]
];


$dekh=usort($students_a,function($a,$b){
    return $a[0]-$b[0];
});

foreach($students_a as $origin_student){
    echo "ID: " . $origin_student[0] . " Name: " . $origin_student[1] . " Score: " . $origin_student[2] . "<br>";

}




$student_x = [
    "name" => "Abir",
    "age" => 24,
    "skills" => ["PHP", "JavaScript", "Laravel"]
];

// Convert the associative array to JSON format
$json = json_encode($student_x, JSON_PRETTY_PRINT);

// Output the JSON string
echo $json;
