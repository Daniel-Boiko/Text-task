<?php
//palindrome function
$input = "abrakadabra";
function Palindrome_Function($input)
{
    $reverse = strrev($input);
    if ($reverse == $input)
        return true;
    else return false;
}
    $result = Palindrome_Function($input);
//calling the reverse function
    if ($result == TRUE)
        echo $input . ' is palindrome';
        else echo $input . ' is not palindrome';
?>