<?php
$makefoo = true;
/* Nu se poate apela foo() de aici deoarece ea inca nu exista, dar se poate
apela bar() */
bar();
if ($makefoo) {
function foo()
{
echo "Nu exist pana cand executia programului nu ajunge la mine.\n";
}
}
/* Acum se poate apela foo() deoarece $makefoo a fost evaluata la true */
if ($makefoo)
foo();
function bar()
{
echo "Eu exist imediat dupa startul programului.\n";
}
?>