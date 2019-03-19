<?php 

// Дана строка, содержащая полное имя файла (например, 'D:\WebServers\home\testsite\www\myfile.txt'). Выделите из этой строки имя файла
$url = 'D:\WebServers\home\testsite\www\myfile.txt';
$earray = explode("\\", $url);
$filename = $earray[count($earray)-1];
echo($filename);


// В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.
$date1 = strtotime('10-02-2015');
$date2 = strtotime('02-02-2015');
$different = abs($date2-$date1)/86400;
echo($different);


//Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива.

function sumSquares($arr){
    $sum = 0;
    foreach ($arr as $number) {
        $number *= $number;
        $sum += $number;
    }
    return $sum;
}

$elements = [26, 17, 136, 12, 79, 15];
echo sumSquares($elements);


//Найти сумму следующего ряда чисел 1+4+7+10+...+112

function puckArr($array){
   $sum = 0;
    for ($i=1; $i <= 112; $i+=3) {
    	$arr[] = $i;
    	$sum += $i;
	}

    return $sum;
}

$array = [];
var_dump(puckArr($array));

//проверка на кратность

function puckArr($var){
   if($var%4==0)
   {
   	return true;
   }
   else return false;
}

var_dump(puckArr(9));



//функция которая возвращает расширение файла
function puckArr($name){
   	$array = explode('.', $name);
	$extention = $array[count($array)-1];
	return $extention;
}

echo(puckArr('index.php'));

//создать массив каждый элемент которого больше в 3 раза и выбрать из него 3 рандомных числа
function puckArr($array){
    for ($i=10; $i <= 1000; $i++) {
    	$arr[] = $i*3;
	}

    return $arr;
}

$array = [];
var_dump(array_rand(puckArr($array), 3));

?>