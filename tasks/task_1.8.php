№1
Заполните массив целыми числами от 1 до 10.
<?php

use LDAP\Result;

$arr = range(1,10);
echo implode(" " , $arr);
?>

№2
Заполните массив четными числами из промежутка от 1 до 100.
<?php
$arr = range(2,100,2);
echo implode(" ", $arr);
?>

№3
Дан массив с дробями:
[1.456, 2.125, 3.32, 4.1, 5.34]
Округлите эти дроби до одного знака в дробной части.
<?php
# 1 способ 
$arr = [1.456, 2.125, 3.32, 4.1, 5.34];
$result = [];
foreach ($arr as $num){
    $temp = ($num * 10 + 0.5);
    $temp_int = (int)$temp; 
    $result[] = $temp_int / 10;
}

echo implode(" ", $result);
?>

<?php
# 2 способ 
$arr = [1.456, 2.125, 3.32, 4.1, 5.34];
$rounded = array_map(function($n){
    return round($n, 1);}, $arr); 
echo implode(" " , $rounded);
?>


