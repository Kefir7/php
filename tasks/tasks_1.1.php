№1//*Дано число. Проверьте, отрицательное оно или нет. Выведите об этом информацию в консоль.
<?php
// $number = 0;
// if ($number > 0){
//     echo "$number положительно";
// }
// elseif ($number < 0){
//     echo "$number отрицательно";
// }
// else{
//     echo "$number";
// }
?>

№2//* Дана строка. Выведите в консоль длину этой строки.

<?php
// $string = 'Yarolav';
// echo mb_strlen($string);  // выведет 7
?>

№3//* Дана строка. Выведите в консоль последний символ строки.
<?php
// $string = "Yaroslav";
// $last_char = substr($string, -1);
// echo "Последний символ: $last_char";
?>

№4//* Дано число. Проверьте, четное оно или нет.
<?php
// $number = 3;
// if ($number % 2 == 0){
//     echo "Число $number четное";
// }
// else{
//     echo "Число $number нечетное";
// }
?>
№5//* Даны два слова. Проверьте, что первые буквы этих слов совпадают.
<?php
// $word_1 = "Hello";
// $word_2 = "Hello";
// $check_1 = strtolower(substr($word_1, 0, 1));
// $check_2 = strtolower(substr($word_2, 0, 1));
// if ($check_1 == $check_2){
//     echo "Первые буквы ", strtoupper($check_1),", ",strtoupper($check_2), " сопадают";
// }
// else{
//     echo "Первые буквы ", strtoupper($check_1),", ", strtoupper($check_2), " не совпадают\n";
// }

?>

№6//* Дано слово. Получите его последнюю букву. Если слово заканчивается на мягкий знак, то получите предпоследнюю букву.
<?php
// $word = "Слушать";
// $check_last_char = mb_substr($word, -1);
// if ($check_last_char == 'ь'){
//    echo mb_substr($word, -2, 1); 
// }
// else{
//     echo $check_last_char;
// }
?>