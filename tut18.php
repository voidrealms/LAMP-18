<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

$petowners = array("Bryan"=>array("Shakes","Phelia","Laserthingy"),"heather"=>array("Fishy"),"Mike"=>array("Doggy","Liger"));

echo $petowners['Mike'][0] . "<br>";
echo $petowners['Mike'] . "<br>";
echo count($petowners['Mike']);


?>

</body>
</html>
