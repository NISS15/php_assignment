<!DOCTYPE html>
<html>
<body>
<?php

function split_name($string) {
    $arr = explode(' ', $string);
    $num = count($arr);
    $first_name = $middle_name = $last_name = null;
    
    if ($num == 2) {
        list($first_name, $last_name) = $arr;
    } else {
        list($first_name, $middle_name, $last_name) = $arr;
    }

    return (empty($first_name) || $num > 3) ? false : compact(
       'first_name', 'middle_name', 'last_name'
   );
}

var_dump(split_name('Trapper Wolf'));
var_dump(split_name('Cara Dune'));
var_dump(split_name('Paul Sun-Hyung Lee'));
var_dump(split_name('Dee Bradley Baker'));
var_dump(split_name('Bo-Katan Kryze'));
//var_dump(split_name(null));

?>
</body>
</html>
