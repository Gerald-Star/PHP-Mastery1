

<h1>hello</h1>

<?php


// single line comment

// multi line comment
/* 
 double line comment
*/


echo("Hello to PHP");

echo "<h1>hello  </h1>";

// echo - outputs strings, numbers, html etc

// print - outputs strings only

// print_r - outputs arrays

print_r([1,2,3,4,5]);

print_r([1,2,4,4,5,7,8,9,0]);

// var_dump - outputs arrays and objects

var_dump([1,2,3,4,5]);

var_dump("hello");

var_dump(1);

var_dump(1.5);

var_dump(true);

var_dump(false);

//var_export() - outputs arrays and represents them as valid php code

// data types



// start with $ sign

// can contain letters, numbers, underscores

// case sensitive

// variables are assigned values with the = sign

// $name = "john";

$name = "PHP Tutorial";
$year = 2025;
$isFinished = true;

// Add spaces when echoing the variables
echo $name . " ";         // Adds a space after $name
echo $year . " ";         // Adds a space after $year
echo $isFinished . " ";         // No space needed after the last output

// Alternatively, you can do it all in one line:
//echo $name . " " . $year . " " . $isFinished;


/*
Explanation:
`.` is the concatenation operator in PHP. Unlike using `+` in JavaScript, you use `.` to concatenate strings in PHP. In the example above, you are concatenating the variables `$name`, `$year`, and `$isFinished` with a space in between each variable. The space is added by using `" "`. The `
`" "` is a  (interpolation) string containing a single space that you concatenate between the variables.

*/

$title = "Learn PHP and MySQL,";
$message = "Welcome to CMS!";

$message2 = $title . " " . $message;
echo $message2 . " "; 

$time = "Start Learning PHP and MySQL now!";
$schedule = "Every Monday and Wednesday at 10:00 AM";

$start = "Start Learning PHP and MySQL now! $schedule"; 

echo $start . " ";

// What type of destructuring is this called?    
// Answer: Array destructuring

echo $name . " " . $year . " " . ($isFinished ? 'true' : 'false'); 

// Ternary operator

// if condition is true ? then do this : else do this

// if isFinished is true then output true else output false


$vname = "course";
$$vname = "PHP Fundamentals";


echo $course . " ";

// $course = "PHP Fundamentals";

$student = "jenny";
$$student = "Mark";

echo $jenny . " ";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>PHP Journey</h1>

    <?php
    echo "Learning PHP is fun!";

    $name = "PHP Tutorial";
    echo $name;

    ?>
    
    
</body>
</html>