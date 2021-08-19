<!DOCTYPE html>
<html>
<body>
<?php
echo (" The common element in a and b are: \n")." ";
$a = array("a", "c", "d", "g", "i");
$b = array("x", "z", "n", "k", "d", "l", "a", "m", "n");
$result= array_intersect($a, $b);

print_r($result);
?>

</body>
</html>