<?php
// ДЗ 1
define('LOGIN', 'admin');
define('PASSWORD', 'secret123');

$tmp_login = 'admin';
$tmp_password = 'secret123';
if ($tmp_login == LOGIN && $tmp_password != PASSWORD) {
    echo 'Check correct your password';
}
elseif ($tmp_login != LOGIN) {
    echo 'User not found';
}
elseif ($tmp_login == LOGIN && $tmp_password == PASSWORD) {
    echo 'Auth success';
}
?>

<br /><br />

<?php
// ДЗ 2
$isStatus  = false;
$statusResult = ($isStatus) ? '43224656' : '98645623';

echo $statusResult;

?>

<br /><br />

<?php
// ДЗ 3
$typeCar = 'BMW';

switch ($typeCar) {
    case 'BMW':
        echo 'Selected is a very good car';
        break;
    case 'Toyota':
        echo 'Toyota is a very reliable car!';
        break;
    case 'Lada':
        echo 'Dont buy these cars!';
        break;
    default:
        echo 'Car not found';
}
?>