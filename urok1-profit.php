<html>

<head>
<title>php1</title>
</head>


<body>
<h1>PHP</h1>
<p> 1 урок </p>

<?php 
// Пункт 3.Изучаем var_dump
var_dump(2*2); // int(4)  
echo '</br>';
//Изучаем следующие выражения.
//1. 3/1
var_dump(3/1); // int(3)  
echo '</br>';
//2. 1/3
var_dump(1/3);//float(0.33333333333333)  
echo '</br>';
//3. '20cats'+40
var_dump('20cats'+40);//int(60)  
echo '</br>';

//4. 18%4  
var_dump(18%4); //int(2)  Деление по модулю 
echo '</br>';

//Пункт 4
//дайте ответ что же явл.значением выражения присваивания?

echo($a=2); // ответ 2 
echo '</br>';
$x = ($y=12)-8; echo $x; // ответ 4
echo '</br>';

//Пункт 5
//Изучаем функции var_dump()
//1.  bool(true)
var_dump(1 == 1.0); //  тут не сравниваем типы  
echo '</br>'; 

//2.  bool(false)
var_dump(1 === 1.0); //сравниваем типы и они разные (инт и флоат)
echo '</br>';

//3. bool(true)
var_dump('02' == 2); //сравниваем строка и число
echo '</br>';

//4. bool(false)
var_dump('02' === 2); // точное сравнение строка и число
echo '</br>';

//5. bool(true)
var_dump('02' == '2'); //сравнение строка и строка
echo '</br>';

//6. //Попробуйте обьяснить результат.


$x = true xor true;   //bool(true) 
//  "Равно =" всегда приоритетнее чем "или xor" и сервер вернул bool(true)
//   ответ ($x = true) xor true; тоже самое что и $x = true xor true; , при одном условии что 
//xor true Игнорируется не читается сервером.

var_dump($x);
echo '</br>';

/*Логический оператор XOR 
Название XOR   -Исключающее или	
Результат XOR  -TRUE, если $a, или $b TRUE, но не оба и если оба то FALSE.*/



 ?>



</body>

</html>
