

<?php

/*Создать массив из названий 5 стран мира.
Вывести массив на экран при помощи print_r внутри тегов <pre></pre>*/
$countries = array(
                'Ukraine',
                'German',
                'Italy',
                'USA',
                'Poland'
            );
echo '<pre>';
print_r($countries);
echo '</pre>';


/*Создать ассоциативный массив из 5 элементов,
в котором ключи - это названия стран, а значения элементов - это столицы стран.
Вывести массив на экран*/
$countries = array(
                'Ukraine' => 'Kyiv',
                'German' => 'Berlin',
                'Italy' => 'Rome',
                'USA' => 'Washington',
                'Poland' => 'Krakow'
            );
echo '<pre>';
print_r($countries);
echo '</pre>';


/*Создать многомерный массив, который иллюстрирует список товаров.
Каждый товар - это книга (художественная литература). Каждая книга имеет стиль, автора, название и цену.
В списке товаров должно быть не менее 3 книг.*/
$stephen = array(
    'Genre' => 'Psychological thriller',
    'Author' => 'Stephen King',
    'Name' => 'Misery',
    'Price' => 205
);
$akunin = array(
    'Genre' => 'Detective',
    'Author' => 'Boris Akunin',
    'Name' => 'Azazel',
    'Price' => 190
);
$shevchenko = array(
    'Genre' => 'Poems',
    'Author' => 'Taras Shevchenko',
    'Name' => 'Kobzar',
    'Price' => 310
);
$books = array(
    $stephen,
    $akunin,
    $shevchenko
);
echo'<pre>';
print_r($books);
echo'</pre>';


/*Определить константы, которые соответствуют названиям нескольких стран мира.
Используя эти константы, сформировать массив из соответствующих значений*/
define('UA','Ukraine');
define('DE','German');
define('IT','Italy');
define('PL','Poland');
define('UK','United Kingdom');
$const_array = array(UA,DE,IT,PL,UK);
echo'<pre>';
print_r($const_array);
echo'</pre>';


/*Создать скрипт, который бы вывел на экран значение переменной $$$$$hello.
Значение может быть любым.*/
$hello = 'some';
$some = 'word';
$word = 'world';
$world = 'my_var';
$my_var = 'Hello world';
echo $$$$$hello;
echo '<br>';
$hello = 'some';
$$hello = 'word';
$$$hello = 'world';
$$$$hello = 'my_war';
$$$$$hello = 'Hello World';
echo $$$$some;
echo '<br>';
$a = 5;
var_dump((bool)$a);
echo '<br>';
echo '<br>';

/*Создать форму, которая содержит поля name, email, phone.
Задать скрипт, который выведет на экран отправленные данные - $_POST или $_GET (в зависимости от свойств формы)*/
echo'<form action="#" method="post">';
echo '<input type="text" name="name"><br>';
echo '<input type="email" name="email"><br>';
echo '<input type="password" name="pass"><br>';
echo '<input type="submit">';
print_r($_POST);
echo '<br>';
echo '<br>';
$a = 10;
//echo isset($a);
unset($a);

/*Создать форму с полями username, email, message.
Сериализовать данные, полученные при отправке формы и вывести полученную строку на экран.*/
echo '<form action="#" method="post"><br>';
echo '<input type="text" name="name"><br>';
echo '<input type="email" name="email"><br>';
echo '<textarea name="massage" placeholder="your massage here..."></textarea><br>';
echo '<input type="submit">';
echo '<br>';
echo '<br>';
echo $arr = serialize($_POST);
echo '<br>';
echo '<br>';
print_r($un_arr = unserialize($arr));
echo '<br>';
echo '<br>';
/*Вычислить количество секунд в году и присвоить это значение переменной.
Вычислить остаток от деления этого значения на 2*/
$leap_year = 60 * 60 * 24 * 366;
echo 'Количество секунд в году = '.$second_year = (60 * 60 * 24 * 365 * 3 + $leap_year) / 4;
echo '<br>';
echo 'Остаток от деления на два равен ',$balance = $second_year % 2;
echo '<br>';

/*Создать строку, содержащую число 12345
используя лишь отдельные цифры 1,2,3,4,5 и операцию конкатенации*/
echo 1 .', ' . 2 . ', '. 3 . ', ' . 4 .', ' . 5;
echo '<br>';

/*Вычислить значение выражения: false && true || false && true || !false && true*/
var_dump(true);
var_dump(false && true || false && true || !false && true);
echo '<br>';
/*Вывести на экран true/false в зависимости о того,
делится переменная $x на 2 или нет.*/
$x = 4;
if (!($x % 2)) {
    var_dump(true);
} else{
    var_dump(false);
}
echo '<br>';

/*Создать алгоритм обмена значениями двух переменных не используя третьей.*/
$a = 8;
$b = 10;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "a = {$a}, b = {$b}";
echo '<br>';
//echo $dir = `dir`;

/*Создать алгоритм вычисления максимального значения двух заданных переменных*/
$x = 90;
$y = 65;
if($x > $y){
    $max = $x;
} else {
    $max = $y;
}
echo "Max = {$max}";
echo '<br>';
echo '<br>';

/*Создать алгоритм вычисления максимального значения двух заданных переменных при помощи тернарного оператора*/
$x = 68;
$y = 63;
echo 'Max val = '. $max = ($x > $y) ? $x : $y;
//echo "Max value = {$max}";
echo '<br>';
echo '<br>';

/*Создать алгоритм вычисления максимального значения двух переменных при помощи switch*/
$x = 98;
$y = 98;
switch($x){
    case $x > $y : echo 'max = '.$x; break;
    case $y > $x : echo 'max = '.$y; break;
    default : echo 'Equally = '.$x;
}
echo '<br>';
echo '<br>';


/*Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for.
Простое число - это число которое делится только на себя и на 1*/
$simple = array();

/*for ($i = 2; $i <= 100; $i++)
{
    $bool = true;
    for ($j = 2; $j <= $i/2; $j++)
        if( $i % $j == 0)
            $bool = false;
    if($bool)
        $simple[] = $i;
}
var_dump($simple);*/
echo '<br>';

for ($i = 2; $i <= 100; $i++){
    $bool = true;
    for ($j = 2; $j <= $i / 2; $j++){
        if ($i % $j == 0)
            $bool = false;
    }
    if ($bool)
        echo $i.'<br>';
}
echo '<br>';
echo '<br>';

/*Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while.
Простое число - это число которое делится только на себя и на 1*/

//not correct *******
$x = 2;
while($x <= 100){
    if($x % 2 == 0 and $x !== 2){}
    elseif($x % 3 == 0 and $x !== 3){}
    elseif($x % 5 == 0 and $x !== 5){}
    elseif($x % 7 == 0 and $x !== 7){}
    else{
        echo $x.'<br>';
    }
    $x++;
}
echo '<br>';
echo '<br>';


/*Создать массив из 10 любых числовых значений.
При помощи foreach вывести на экран те значения, которые делятся на 3*/
$arr = array(1,2,3,4,5,6,7,8,9,10);
foreach($arr as $i){
    if($i % 3 ==0){
        echo $i;
    }
}
echo '<br>';
echo '<br>';

/*Выполнить предыдущие задания при помощи альтернативного синтаксиса*/
$arr = array(1,2,3,4,5,6,7,8,9,10);
foreach($arr as $i) :
    if($i % 3 ==0) : ?>
       <?= $i ?>
<?php endif; ?>
<?php endforeach;
echo '<br>';
echo '<br>';


/*Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400.*/
for ($i = 2; $i <= 400; $i++){
    $bool = true;
    for ($j = 2; $j <= $i / 2; $j++){
        if ($i % $j == 0)
            $bool = false;
    }
    if (($bool) and ($i > 200)){
        echo $i.'<br>'; break;
    }
}
echo '<br>';
echo '<br>';


/*Как можно упростить функцию test() в данном скрипте? */
function test($x, $y)
{
    if ($y == 0) {
        return false;
    }
        return $x / $y;
}
//echo test(6, 0) or die('Error 1');
//echo 'Unreached line';
//simple
function simple($x, $y)
{
    if ($y !== 0) {
        return $x / $y;}
}
//echo simple(6, 0) or die('Error 2');
//echo 'Unreached line';
echo '<br>';
echo '<br>';



/*Создать текстовый файл, в котором будет 10 строк.
В первой строке записать 1, во второй 22, в третьей 33, ..., в десятой - десять десяток */
$f = fopen('text.html', 'w');
fwrite($f, '1' . PHP_EOL . '22'. PHP_EOL . '333'. PHP_EOL . '4444'. PHP_EOL . '55555'. PHP_EOL . '666666'. PHP_EOL . '7777777'. PHP_EOL . '88888888'. PHP_EOL . '999999999'. PHP_EOL . '10101010101010101010');
fclose($f);

//combine
$i = 0;
for($line = 9; $line >= 0; $line--){
    $i++;
    echo '<br>';
    for($count = 1;$count <= $i; $count++){
        echo $i;
    }
}



