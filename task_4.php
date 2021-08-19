<!DOCTYPE html>
<html>
<body>
<?php
$users = [
    ['nishan', '9812345678', 'nishan@gmail.com','ktm' ],
    ['subedi', '9800000000', 'subedi@gmail.com','htd'],

];

$fp = fopen('users.csv', 'w');
fputcsv($fp, array('name', 'phone', 'email', 'address'));
foreach ($users as $user) {
    fputcsv($fp, $user);
}

fclose($fp);
?>
</body>
</html>
