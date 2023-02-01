<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>EXERCICE XP</h1>
        <h2>Exercise 1 : Print “Hello World” Using Echo</h2>
        <!-- Print hello world in php -->
        <?php echo "Hello World" ?>

        <h2>Exercise 2 : Print “Hello PHP” Using Echo </h2>
        <?php
        # Print variable information
        $hello_content = "Hello PHP";
        echo  $hello_content;
        ?>

        <h2>Exercise 3 : Print Two PHP Variables Using Single Echo</h2>
        <?php
        # Contact two variables to get string information
        $content_morning = "Good Morning.";
        $content_nice = "Have a nice day!";
        echo $content_morning." ".$content_nice;
        ?>

        <h2>Exercise 4 : Reverse The String</h2>
        <?php
        # Function to reverse a string using strrev()
        function reverseString($str)
        {
            return strrev($str);
        }
        echo reverseString($content_morning)
        ?>
    </body>
</html>