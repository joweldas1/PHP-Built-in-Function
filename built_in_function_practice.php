    <?php
    //1 -Use var_dump() to display the type and value of the number 10.5.
    $toCheckVariable = 10.5;
    echo var_dump($toCheckVariable) ."<br>";  //Result ->float(10.5)


    //2 -Convert an integer (100) to a string and use var_dump() to check the new type.
    $convert_inter_to_string = 100;
    $convert_inter_to_string = (string) $convert_inter_to_string;
    echo var_dump($convert_inter_to_string)  . "<br>";  //Result -> string(3) "100"


    //3 -Use strlen() to find the length of the string "Hello PHP!".
    $find_the_length = "Hello PHP!" ;
    echo strlen($find_the_length)  . "<br>";  // Result -> 10;


    // 4 -Count the number of words in the string "Learning PHP is fun!" using str_word_count().0
    $word_counter_in_string = "Learning PHP is fun!" ;
    echo str_word_count($word_counter_in_string)  ."<br>"; //Result - 4


    // 5-Find the position of "PHP" in "I love PHP programming!" using strpos().
    $postion_finder = "I love PHP programming!";
    $which_word = "PHP";
    echo strpos($postion_finder, $which_word) . "<br>"; //Result - 7





    // 6 - Store a number in a variable, cast it to a string, and check its type before and after conversion using var_dump().
    $store_a_number = 10;
    echo "Before casting -->" . var_dump($store_a_number) . "<br>";
    $store_a_number = (string)$store_a_number;
    echo "After casting -->" . var_dump($store_a_number) . "<br>";



    // 7 - Use strlen() to check if a user's input (e.g., "abcdef") is greater than 5 characters.
    $inputer = "Abcde";
    $check_inputer_length = strlen($inputer)>5?"You are not allowed":"You are allowed";
    echo $check_inputer_length . "<br>";


    // 8 - Write a function that takes a sentence as input and returns the number of words in it using str_word_count().
   
   function wordCounter($variable){
        $result = str_word_count($variable);
        return $result;
   }
   echo wordCounter("I love to learn php") . "<br>";
   
   
    // 9 - Search for a word "code" in the sentence "Let's write some code!" and display a message if found.
        function searcher ($variableA){
            $find = "code";
            $result = strpos($variableA,$find)?"You result is -> <span style='font-weight:bold;'>$find</span>":"Sorry,no result found match,try again";   
            return $result;
        }
        echo searcher("I love pp code") ."<br>";
    
    // 10 - Write a script that checks whether a given string contains "error" and prints "Error found" if it exists.
        function checkError_keyword($sentence){
            $reserved = "error";
            $newSentence = strtolower($sentence);
            $result = strpos($newSentence,$reserved)?"error found ":"not found";
            return $result;
        }

        echo checkError_keyword("There is any") . "<br>";


    // 11 -Ask the user for a sentence and count both the length of the sentence and the number of words in it.

    
    // 12 -Write a function that takes a string and a word as input, then returns the position of the word using strpos().
    // 13 -Convert a numeric string ("12345") into an integer and check its type using var_dump().
    //  14-Write a script that finds the position of the first occurrence of "@" in an email address and checks if it is valid.
    //  15-Create a program that replaces "bad" with "good" in a sentence only if "bad" exists using strpos()







    ?>