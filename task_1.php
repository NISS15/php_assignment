<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(3, 1, 5, 13, 18, 2, 4);
echo ("The number in ascending order are:\n ");
sort($numbers);

foreach( $numbers as $num ){
    echo $num."\n";
  echo "<br>";
}
echo  ("The number in descending order are:\n ");
rsort($numbers);
foreach( $numbers as $num ){
    echo $num."\n";
    echo "<br>";
}
?>

</body>
</html>
