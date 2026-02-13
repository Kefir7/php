Дана строка:
'abcde'
Получите массив букв этой строки.
<?php
# способ 1
// $str = 'abcde';
// $arr = [];
// for ($i = 0; $i < strlen($str); $i++){
//     $arr[] = $str[$i];
// } 
// echo implode(" ", $arr) . "\n"; 
# способ 2
// $str = 'abcde';
// $split = str_split($str);
// echo implode(" ", $split);
?>

№2
Дано некоторое число:
12345
Получите массив цифр этого числа.
<?php
# 1 способ 
$num = 12344;
$str = str_split((string)$num);
echo implode(", ", $str);
?>
<?php
# 2 способ 
$num = 12344;
$str = (string)$num;
$arr = [];
for ($i = 0; $i < strlen($str); $i++){
    $arr[] = $str[$i];
}
echo implode(", ", $arr) . "\n";
?>
<?php
# 3 способ
$num = 12345;
$arr = [];
while($num > 0){
    $arr[] = $num % 10;
    $num = (int)($num / 10);
}
// $arr = array_reverse($arr);
echo implode($arr) . "\n";
?>
№3
Дано некоторое число:
12345
Переверните его:
54321

№4
Дано некоторое число:
12345
Найдите сумму цифр этого числа.
<?php
$num = 12345;
$arr = [];
$sum = 0;
while($num > 0){
    $dig = ($num % 10);
    $arr[] = $dig;
    $sum += $dig; 
    $num = (int)($num / 10);
}
echo $sum;
?>





