<?php

/*

var_dump()
gettype()
is_type functions (ex. is_int(), is_string())

To check the type and value of an expression, use the var_dump() function.

To get a human-readable representation of a type for debugging, use the 
gettype() function. 

To check for a certain type, do not use gettype(), but rather the is_type 
functions.

*/

$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool); // prints out:  boolean
echo gettype($a_str);  // prints out:  string

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>