<?php
//Write a PHP program using a switch statement to print the day of the week based on a number input (1 for Monday, 2 for Tuesday, etc.).

function selectDay($day){
    switch($day){
        case 1:
            echo "Ajke sombar";
            break;

        case 2:
            echo "Ajke mongol bar";
            break;

        case 3 :
            echo "ajke budhbar";
            break;

        case 4 :
            echo "ajke brihostibar";
            break;

        case 5 :
            echo "ajke sukrobar";
            break;

        case 6:
            echo "ajke sonibar and its week end";
            break;

        case 7:
            echo "ajke robibar ,last weekend";
            break;

        default:
        echo "Please choose dat within 1-7";
    
    }
}
selectDay(6);



//Write a PHP program using a switch statement to check the grade of a student based on a score. (e.g., 90 and above = A, 80-89 = B, 70-79 = C, etc.)

function findGrade($marks){
    switch($marks){
        case 90:
            echo"<br>". "A";
            break;

        case(70-80):
            case "<br>"."A";
            break;

        case(60-80):
            echo "<br>"."B";
            break;
        case(40-60):
            echo"<br>". "C";
            break;

        default:
        echo "<br>"."Fail";
    }
}

 findGrade(90);