<?php
interface a
{
 const b = 'Interface constant';
}
// Prints: Interface constant
echo a::b;
// This will however not work because it's not allowed to
// override constants.
class b implements a
{
 const b = 'Class constant';
}
?>
