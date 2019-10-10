#!/usr/bin/php
<?php
    echo "Enter Digit:";

    $num = fgets(STDIN);
    $num = trim($num);
    if (is_numeric($num))
    {
        if ($num % 2 == 0)
            echo "Digit $num is even\n";
        else
            echo "Digit $num is odd\n";
    }
    else
    {
        if (feof(STDIN))
        {
            echo "\n";
            exit ();
        }
        else
            echo "'$num' is not a digit";
    }
?>


