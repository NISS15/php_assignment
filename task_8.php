<!DOCTYPE html>
<html>
<body>
<form>  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Add">  

</form>  
<?php

function ($number1,$number2)
echo array_sum(range(1,$number2));
?>

</body>
</html>