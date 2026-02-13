//*Дано число. Выведите в консоль первую цифру этого числа.

<?php
// $number = -12345;
// $number_all = abs($number); // математический способ
// while ($number_all >= 10){
//     $number_all = (int)($number_all / 10);
// }

//     echo $number_all;
// $number = abs($number); // преобразования числа в строку 
// $number = substr((string)$number, 0 , 1);

// echo $number
?>

//*Дано число. Выведите в консоль последнюю цифру этого числа.

<?php
// $number = -2341;
// echo abs($number % 10); 
?>

//*Дано число. Выведите в консоль сумму первой и последней цифры этого числа.

<?php
// способ через строки
// $number = -4234234213;
// $number = abs($number);
// $number = substr((string)$number, 0, 1) . substr((string)$number, -1, 1);
// echo $number;

// математический способ 
// $number = 34234;
// $number = abs($number);

// $first_digit = $number;
// $last_digit = $number % 10;

// while ($first_digit >=10 ){
//     $first_digit = intdiv($first_digit, 10);
// }

// $sum = $first_digit + $last_digit;

// echo $sum;
?>

//* Дано число. Выведите количество цифр в этом числе.
<?php
// метод через строки
// $number = -2432;
// $number = abs($number);
// $number = strlen((string)abs($number));
// echo $number;    

// математический метод 
// $number = -2432;
// $number = abs($number);
// $count = 1;
// while ($number >=10){
//     $number = (int)($number / 10);
//     $count++;
// }
// echo $count;
?>

//* Даны два числа. Проверьте, что первые цифры этих чисел совпадают.

<?php
// $num_1 = 2342;
// $num_2 = 22423;

// $num_1 = substr((string)abs($num_1), 0, 1);
// $num_2 = substr((string)abs($num_2), 0, 1);

// if ($num_1 == $num_2){
//     echo "Числа $num_1 и $num_2 совпадают";
// }
// else{
//     echo "Числа $num_1 и $num_2 не совпадают";
// }
// математический способ
// $num_1 = -43342;
// $num_2 = 22423;

// $temp_1 = abs($num_1);
// $temp_2 = abs($num_2);

// while ($temp_1 >= 10){
//     $temp_1 = intdiv($temp_1, 10);
// }

// while ($temp_2 >= 10){
//     $temp_2 = intdiv($temp_2, 10);
// }

// if ($temp_1 == $temp_2){
//     echo "Числа $temp_1 и $temp_2 совпадают";
// }
// else{
//     echo "Числа $temp_1 и $temp_2 не совпадают";
// }
?>

