<?php   

//var_dump("1" == "01");   // bool(true)
//echo ("1" == "01");  // 1
//print ("1" == "01");  // 1
//print ("2" == "01");  // pusto

//echo ("10" == "1e1");  // 1


//  И так Тру это 1  а Фолс это 0
//1 это положительно а 0 отрицательно 

//var_dump(1 == TRUE); // bool(true)  Спрашиваем 1==1 ок верно
//echo (1 == TRUE); //1  //вернет  1 потому что да верно 1==1 
//echo (0 == FALSE);  // 1  Ответ Тру верно.  0 == 0 результат верный.


//Оператор управления ошибками//


/*
// Преднамеренная ошибка при работе с файлами
$my_file = @file ('non_existent_file') or
    die ("Ошибка при открытии файла: сообщение об ошибке было таким: '$php_errormsg'");

// работает для любых выражений, а не только для функций
$value = @$cache[$key];
// В случае если ключа $key нет, сообщение об ошибке (notice) не будет отображено
*/






                  //Операторы инкремента и декремента//
	/*			  
echo "<h3>Постфиксный инкремент</h3>";
$a = 5;
echo "Должно быть 5: " . $a++ . "<br />\n";     //Должно быть 5: 5
//Возвращает значение $a, затем увеличивает $a на единицу.
//сначало покажет 5 а потом *а увеличит на 1 и станет 6
echo "Должно быть 6: " . $a . "<br />\n";		// Должно быть 6: 6

echo "<h3>Префиксный инкремент</h3>";
$a = 5;
echo "Должно быть 6: " . ++$a . "<br />\n";
echo "Должно быть 6: " . $a . "<br />\n";

echo "<h3>Постфиксный декремент</h3>";
$a = 5;
echo "Должно быть 5: " . $a-- . "<br />\n";
echo "Должно быть 4: " . $a . "<br />\n";

echo "<h3>Префиксный декремент</h3>";
$a = 5;
echo "Должно быть 4: " . --$a . "<br />\n";
echo "Должно быть 4: " . $a . "<br />\n";

*/


/*
echo "<h3>Арифметические операции с символьными переменными</h3>";
echo '== Буквы ==' . PHP_EOL; //== Буквы ==

$s = 'W';
for ($n=0; $n<6; $n++) {
    echo ++$s . PHP_EOL;
}
*/

/*
// С цифрами несколько по другому
echo '== Цифры ==' . PHP_EOL;
$d = 'A8';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}
//  A9 B0 B1 B2 B3 B4

echo "<br />\n";
$d = 'A08';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}
//  A09 A10 A11 A12 A13 A14

*/

//////////////////////Логические операторы 

/*
$a and $b  //  и                 // Тру  если А и Б Тру
$a or $b   //или                 //Тру если или А или Б ТРУ
$a xor $b  //исклющающее или    //Тру если А или Б Тру но не оба
!$a       //отрицание          // Тру если А не Тру
$a && $b  //  и                //Тру если А и Б Тру
$a || $b  //  или             // Тру если или А или Б Тру
*/

//  echo $a = (false && foo());  //оба фолс  
//  echo $b = (true  || foo()); // 1  true
//  echo $c = (false and foo());  // оба фолс
//  $d = (true  or  foo());


        /*  // "|| или " имеет больший приоритет, чем "or или"
// Результат выражения (false || true) присваивается переменной $e
// Действует как: ($e = (false || true))

 $e = false || true;  //1 приоритет выше  Тру

// Константа false присваивается $f, а затем значение true игнорируется
// Действует как: (($f = false) or true)
$f = false or true; //приоритет ниже у ОР  Фолс

var_dump($e, $f); // bool(true) bool(false)
*/

// --------------------
// "&& и" имеет больший приоритет, чем "and и "

/*
// Результат выражения (true && false) присваивается переменной $g
// Действует как: ($g = (true && false))
$g = true && false;//  а и б не тру   отрицание bool(false)
*/


// Константа true присваивается $h, а затем значение false игнорируется
// Действует как: (($h = true) and false)
/*
$h = true and false; // только а тру а б игнорируется- 

var_dump($g, $h); //   bool(false)  bool(true)
*/


/* 
 
//ответ на домашку 6 пункт
Есть выражение,,,Обьясните его.

$x = true xor true;
var_dump($x);

Кратко:
Все дело в том что "=" имеет больший приоритет,чем "xor"
Выражение  станет таким : 

($x = true) xor true;
var_dump($x);  // Ответ сервера тру

Все дело в том что  $x присвоили Тру  а xor true игнорируется.

Если бы мы захотели ответ сервера Фолс ,то выражение  уже будет таким
$x = (true xor true);
var_dump($x);  // Ответ сервера фолс.

Все дело в том что здесь Обе Константы Тру и ТРУ а значит сервер вернет Фолс.


Супер подробно:
Обьясню ... но сначала не много теории...Переменой Икс присваиваем выражение true xor true;
В выражении "true xor true" тут true это Константа.
Где XOR это Исключающее Или(см.логические операторы).
(Таблица тут https://www.php.net/manual/ru/language.operators.logical.php )

Выписка из пхп учебника:
"Выражение будет bool(true) если А или Б  true , (формула $a xor $b) , но с одним исключением "Но не Оба"(в нашем примере оба ,тру и тру,Если оба то выражение будет bool(false))."

И так "true xor true" по идее ответ должен быть bool(false) , так как обе константы Тру и Тру.  Но сервер нам отвечает что bool(true).
Так в чем Же Загвозка,,почему тру а не фолс...,разбираемся? 

Подробный Ответ: 
Все дело в том что "=" имеет больший приоритет,чем "xor"
( См. Таблицу Приоритет Операторов https://www.php.net/manual/ru/language.operators.precedence.php )

 Константа true присваивается $x , а затем значение true игнорируется (то которое после xor ). Дейтвует так : ( ($x=true) xor true ).

Готовый пример он же ответ на вопрос :

($x = true) xor true;
var_dump($x);//bool(true)

Если мы захотим ответ bool(false) где Обе Константы Тру и тру ,то   выражение уже будет таким:
$x = (true xor true);
var_dump($x);//bool(false)


*/


//   var_dump(1 === 1.0 ) ;



?>


