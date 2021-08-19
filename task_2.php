<!DOCTYPE html>
<html>
<body>
<?php
echo (" The numbers which are divisible by 5 from 1 to 500 : \n")." ";
for($i = 1; $i <= 500; $i++)
{
// Condition to check divison of 5
if( ($i%5) == 0 )
{
echo ("$i \n");
}
}
return 0;
?>

</body>
</html>
