<?php

use LDAP\Result;

//$urls = [
//    "http://example.com",
//    "https://google.com",
//    "ftp://fileserver.net",
//    "http://mysite.ru/page",
//    "example.org",
//    "http://test.com/data",
//    "https://vk.com",
//    "http://php.net",
//    "mail.example.com",
//];
# 1 cпособ strpos
// $result = [];
// foreach ($urls as $url){
//     if (strpos($url, "http://") === 0){
//         $result[] = $url . "\n";
//     }
// }
// echo implode(" ", $result); 
# 2 способ subsrt
// $result = [];
// foreach ($urls as $url){
//     if (mb_substr($url, 0, 7) === "http://"){
//         $result[] = $url . "\n";
//     }
// }
// echo implode(" ",$result);
// print_r($result);

# 3 способ srt_start_with() (PHP 8+)

// $result = array_filter($urls, function($url){ // array_filter - callback функция
//     return str_starts_with($url, 'http://');
// });
// echo implode(" ", $result);
// print_r($result);


// $result = [];
// foreach($urls as $url){
//     if (str_starts_with($url, 'http://'))
//         $result[] = $url . "\n";
// } 
// echo implode(" ", $result);
// print_r($result);

// $N = (int)readline("Введите число: ");
// $S = (string)readline("Введите слово: ");
// function some_times(int $N, string $S){
//     for ($i = 0; $i < $N; $i++){
//     echo $S . "\n";
//     }
// }

// some_times($N, $S);


//class Dog {
//    protected static function voice() {
//        echo "Гав-гав!";
//    }
//}
//
//class Horse extends Dog {
//    public static function voice() {
//        echo "И-го-го!";
//    }
//}
//
//class Snake extends Horse {
//    public $voice = "Ш-ш-ш!";
//}
//
//Snake::voice();


// № 2
/* Дан массив со строками. Оставьте в этом массиве только те строки, которые заканчиваются на .html. */
//$urls = [
//    "index.html",
//    "http://example.com/main.html",
//    "https://google.com",
//    "styles.css",
//    "about.html.php",
//    "contacts.htm",
//    "http://mysite.ru/page",
//    "catalogue.HTML",
//    "archive.html.zip",
//    "shop.html?id=123",
//    "test.html",
//];
//
//$result = [];
//
//foreach ($urls as $url){
//    if (str_ends_with($url, ".html")){
//        $result[] = $url . "\n";
//    }
//}
//
//echo implode("\n", $result);

//№3
//Дан массив с числами. Увеличьте каждое число из массива на 10 процентов.

//$numbers = [1, 3 , 5, 7, 8, 10, 11.8, 100.5];
//
//foreach ($numbers as &$number){
//    $number = $number * 1.1;
//}
//
//echo implode("\n",$numbers) . PHP_EOL;
//print_r($numbers);


