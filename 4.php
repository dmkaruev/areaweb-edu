<?php

// Условия, тернарный оператор и switch
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

$isStatus  = false;
$statusResult = ($isStatus) ? '43224656' : '98645623';

echo $statusResult;
echo '<pre>';
echo '</pre>';

?>