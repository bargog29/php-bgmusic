<?php
function foo()
{
function bar()
{
echo " Eu nu exist pana cand foo() nu este apelata.\n";
}
}
/* Nu se poate apela bar() inca deoarece ea nu exista. */
foo();
/* Acum se poate apela bar(), deoarece procesarea foo() a facut-o accessibila*/
bar();
?>