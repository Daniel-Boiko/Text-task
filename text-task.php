<?php
//palindrome function
$input = "abrakadabra";

/**
 * @param int $input
 * @return bool
 */
function Palindrome_Function($input)
{
    $reverse = strrev($input);
    if ($reverse == $input)
        return true;
    else return false;
}

$result = Palindrome_Function($input);

if ($result == TRUE)
{
    echo $input . ' is palindrome';
}
else
{
    echo $input . ' is not palindrome';
}







