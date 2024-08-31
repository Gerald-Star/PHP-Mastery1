
<?php

//String Types

/*
A string is a series of characters, where a character is the same as a byte. 
This means that PHP only supports a 256-character set, and hence does not offer native Unicode suppor

A string literal can be specified in four different ways:

single quoted
double quoted
heredoc syntax
nowdoc syntax
*/

/* Single quoted strings will display things almost completely "as is." 
Variables and most escape sequences will not be interpreted. 
The exception is that to display a literal single quote, you can escape it with a back slash \', 
and to display a back slash, you can escape it with another 
backslash \\ (So yes, even single quoted strings are parsed).
*/

// Single quoted ¶
// The simplest way to specify a string is to enclose it in single quotes (the character ').

echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either . ' ;

?>

<?php

//Heredoc 
/* A third way to delimit strings is the heredoc syntax: <<<. 
After this operator, an identifier is provided, then a newline
*/

// no indentation
echo <<<END
      a
     b
    c
\n
END;

// 4 spaces of indentation
echo <<<END
      a
     b
    c
    END;


 $json = <<<JSON

 {
    "quiz": {
        "sport": {
            "q1": {
                "question": "Which one is correct team name in NBA?",
                "options": [
                    "New York Bulls",
                    "Los Angeles Kings",
                    "Golden State Warriros",
                    "Huston Rocket"
                ],
                "answer": "Huston Rocket"
            }
        },
        }  
}
JSON;

echo $json;

?>

<?php

// String Functions



// strlen() - returns the length of a string

echo strlen("Hello World"); // 11

echo strlen("Hello"); // 5

$length = strlen("Welcome to PHP");

echo $length; // 14


$title = "PHP Tutorial";

echo strlen($title); // 12

?>


