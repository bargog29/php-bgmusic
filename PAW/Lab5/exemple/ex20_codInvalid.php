<?php
print "Nu mai pot trimite headere";
header( "Location: http://www.google.ro" );
exit;
?>
<html>
<body>
<?php
header( "Location: /" );
exit;