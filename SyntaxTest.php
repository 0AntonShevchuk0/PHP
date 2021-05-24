<?php
    //змінна
    $a = 10;
    //присвоєння рядку
    $b = 'aaabbb';
    //виведення змінної
    echo "variable: $b";
    //динамічна типізація
    $b = $a;
    //виведення зміної як заголовку
    //декілька пропусків рахуються за один
    echo "       <h1>h1: $b</h1>";
    //рядок не можна конкатенувати з числом
    //$c = 'fdg' + $b;
    //не можна робити щось зі змінною, якій не присвоєно значення
    //echo $d;
    echo $c;
    //арифметичні операції працюють
    $c = 11 + $b;
    //вивденя як заголовку
    echo "<h2>arithmetic operations: $c</h2>";
    //виведення просто рядку
    echo 'just string: hello,';
    //одинарні лапки розцінюються як рядок
    echo '  not variable: $a';
    //16-рична система
    $a1 = 0xFFF;
    echo "<p>16: $a1</p>";
    //8-рична система
    $a2 = 0777;
    echo "<p>8: $a2</p>";
    //2-ва система
    $a3 = 0b10101010;
    echo "<p>2: $a3</p>";
    //дуже великі числа можна записати як float
    $a4 = 1000000000000000000;
    echo "<p>large number: $a4</p>";
    //логічні типи даних є, але виводяться числа
    $a5 = true;
    echo "<p>boolean: $a5</p>";
    $a51 = true + 1;
    echo "<p>boolean2: $a51</p>";
    //якщо ми не хочемо ініціалізувати змінну,
    // можемо присвоїти їй значення null
    $a6 = null;
    $a7 = NULL;
    echo "<p>$a6</p>";
    //для float можна вказувати значущі цифри та порядок.
    // Порядок записується з маленької чи великої літери
    // для додатних степенів і з великої для від'ємних
    //Для значень є межа, але вона дуже велика
    $a8 = 4.567e10;
    echo "<p>float1: $a8</p>";
    $a9 = 4.567E-2;
    echo "<p>float2: $a9</p>";
    $a91 = 4.567E400;
    echo "<p>float3: $a91</p>";
    //для конкатенації рядків використовується крапка.
    echo 'string concat: hello '.'word';
    //вид лапок не має значення
    $a10 = "hi";
    $a11 = 'hello';
    $result = $a10.$a11;
    echo "<p>another string concat: $result</p>";
    //порядок оперцій той самий, але є операція степеню
    $a12 = (2 + 2 * 2) % (2 - 2 / 2) + 2 ** 2;
    echo "<p>arithmetic operations: $a12</p>";
    //інкремент та дикремент працює як в префіксній, так і у постфіксній формі
    $result = 10;
    $enter = null;
    $enter = ++$result;
    echo "<p>pre increment: $enter</p>";
    $enter = $result++;
    echo "<p>post increment: $enter</p>";
    $enter = --$result;
    echo "<p>pre decrement: $enter</p>";
    $enter = $result--;
    echo "<p>post decrement: $enter</p>";
    //звичайне порівняння
    $logic = ($enter == 11);
    echo "<p>compare1: $logic</p>";
    //порівняння ще й типів
    $logic = ($enter === 1.1E1);
    echo "<p>compare2: $logic</p>";
    //при звичайному порівнянні можуть бути несподівані результати
    $logic = ($enter != "11");
    echo "<p>compare3: $logic</p>";
    //для порівняння більше-менше перевірки типів немає і можуть
    //виникнути проблеми
    $logic = ($enter > "10");
    echo "<p>compare4: $logic</p>";
    //в php 7 з'явився ще оператор порівняння. Він не чутиливий до типів
    $result = 3 <=> 2;
    echo "<p>comparator example 1: $result</p>";
    $result = 3 <=> 4;
    echo "<p>comparator example 2: $result</p>";
    $result = 3 <=> "3";
    echo "<p>comparator example 3: $result</p>";
    //конструкції if-else також є як і всі логічні операції, які можна
    //записувати по різному(словами чи символами)
    if ($result == false and $result === false) {
        echo "<p>if-else example: result is boolean</p>";
    }
    else if (false or (false && true)) {
        echo "<p>if-else example: we cant reach this block</p>";
    }
    else {
        echo "<p>if-else example: result is not boolean</p>";
    }
    $result = 10;
    $result %= 3;
    echo "<p>short assigment: $result</p>";
    //приклади неявного задання false
    if (!null) {
        echo "<p>null equals false</p>";
    }
    if (!"") {
        echo "<p>empty string equals false</p>";
    }
    if (!-0.0E10) {
        echo "<p>0 float equals false</p>";
    }
    //альтернативний вигляд блоку if-else
    if (true and false):
        echo "<p>cant reach</p>";
    elseif (false and false):
        echo "<p>cant reach</p>";
    else:
        echo "<p>alternative if-else</p>";
    endif;
    //в php є також тернарний оператор
    $result = true || false ? 1 : 0;
    echo "<p>ternaty operator: $result</p>";
    $result = 10;
    //є також 2 форми запису для switch-case
    switch ($result) {
        case 10: echo "<p>switch: result = 10</p>"; break;
        case 2: echo "<p>cant reach this block</p>"; break;
    }
    switch ($result):
        case 10:
            echo "<p>switch: result = 10</p>";
            break;
        case 2:
            echo "<p>cant reach this block</p>";
            break;
        default:
            echo "<p>default actions</p>";
            break;
    endswitch;
    //цикл for не відрізняється від звичайного
    // і також має 2 форми запису.
    $var = 5;
    for ($i = 0, $j = 1; $i < 10 and $var < 100; $i++, $j+= 2) {
        $var += 2 + $j;
    }
    echo "<p>for result: $var</p>";
    $var = 5;
    for ($i = 0, $j = 1; $i < 10 and $var < 100; $i++, $j+= 2):
        $var += 2 + $j;
    endfor;
    echo "<p>for2 result: $var</p>";
    //цикл while також не має особливостей і має 2 форми запису
    while ($var > 50) {
        $var--;
    }
    echo "<p>while result: $var</p>";
    while ($var < 100):
        $var++;
    endwhile;
    echo "<p>while2 result: $var</p>";
    //do-while має 1 форму запису
    do {
        $var++;
    }
    while ($var < 200);
    echo "<p>dowhile result: $var</p>";
    //створення пустих масивів 2-ма способами
    $array = array();
    $array2 = [];
    //створення заповнених масивів 2-ма способами
    $array = array(1, 2 ,3);
    $array2 = [1, 2, 3];
    echo "<p>array with numbers:</p>";
    for ($i = 0; $i < count($array); $i++) {
        echo "$array[$i] ";
    }
    //масив з різними типами даних
    //тут використовується також оператор, що дозволяє заповнювати
    // масив не по порядку
    $array = array(0 =>'sdf', 22 => 43245, 156 => "sdf", 2 => true);
    echo "<p>array with different types:</p>";
    //для перебору таких масивів є цикл foreach, що перебирає масив
    // не по індексам, а по елементам
    foreach ($array as $element) {
        echo "$element ";
    }
    //є також масиви з рядковимим індексами
    $capitals_and_countries = array("England" => "London", "French" => "Paris", "Urkaine" => "Kyiv");
    echo "<p>array with string indexes:</p>";
    //для їх перебору підходить тільки foreach
    foreach ($capitals_and_countries as $element) {
        echo "$element ";
    }
    //цікаво, що при вказуванні ключу не потрібні лапки
    echo "$capitals_and_countries[England]";
    //види масивів можна змішувати
    $mixed_array = array("key" => "value", 24, "dfs", 56 => 65);
    echo "<p>mixed array:</p>";
    //цикл foreach може отримати більш детальну інформацію
    foreach ($mixed_array as $key => $element) {
        echo "key: $key value: $element ";
    }
    //багатовимірні масиви мають той самий функціонал, що і одновимірні.
    // Наведено приклад змішаного з функцією array та квадратними дужками
    $big_array = array(array("key" => "value", "key2" => "value2"), "KEY" => [45, 3 => 106]);
    echo "<p>multidimensional array:</p>";
    $counter = 0;
    //для перебору знадобится декілька циклів. Якщо хоч 1 елемент
    // заданий з рядковим ключем, то краще взяти цикли foreach
    foreach ($big_array as $row) {
        echo "Row [$counter]: ";
        $counter++;
        foreach ($row as $value) {
            echo "$value ";
        }
    }
    echo "<p>function1:</p>";
    show("dsfsd");
    //функції не мають типу повертаючого значення
    function show($arg) {
        echo "<h3>$arg</h3>";
    }
    //можна додавати необов'язкові аргументи
    //можна визначати тип аргументів
    function show2($arg, int $count = 1) {
        while ($count > 0) {
            echo "<h4>$arg</h4>";
            $count--;
        }
    }
    echo "<p>function2-1:</p>";
    show2("value");
    echo "<p>function2-2:</p>";
    show2("value", 2);
    //також можна зробити кількість елементів змінною
    function show3(...$args) {
        foreach ($args as $arg) {
            echo "<h4>$arg</h4>";
        }
    }
    echo "<p>function3:</p>";
    show3('hello', "word", "code is", 567);
    //рекурсія як і повертаюче занчення, тип якого
    //можна визначати працюють як звичайно
    function factorial($number) : float {
        if ($number == 0) return 1;
        else if ($number == 1) return 1;
        else return $number * factorial($number - 1);
    }
    echo "<p>factorial:</p>";
    echo factorial(10);
    //echo factorial("helolo");
    echo "<p>null return:</p>";
    echo show3(45) == null;
    //можна реалізувати анонімні функції і передавати їх як аргументи
    $arg_function = function($number) {
        return 10 + $number;
    };
    function specific_sum($number) {
        return 20 + $number;
    }
    echo "<p>annonymous function:</p>";
    echo specific_sum($arg_function(10));
    $num = 10;
    //замикання дозволяє використовувати зовнішні змінні
    $func = function ($arg) use ($num) {
        return $arg + $num;
    };
    $result = $func(10);
    echo "<p>function closure:</p>";
    echo "<p>$result</p>";
    //функції можна описати коротко за допомогою стрілок
    $func2 = fn($b) => $num * $b;
    $result = $func2(10);
    echo "<p>short function closure:</p>";
    echo "<p>$result</p>";
    //короткі функції зручно передавати в якості аргументу( наприклад компаратор)
    function func3($num, $index_sum) {
        return $num * 10 ** $index_sum(1, 2);
    }
    $result = func3(1.994, fn($a, $b) => $a + $b);
    echo "<p>annonymous function2:</p>";
    echo "<p>$result</p>";
    //генератори дозволяють перебирати масиви з меншими затратами пам'яті
    function generator1($numbers) {
        yield 10;
        foreach ($numbers as $n) {
            yield $n;
        }
        yield from [1, 2, 3, 'dsf'];
    }
    echo "<p>generator: </p>";
    foreach (generator1([10, 20, 30]) as $n) {
        echo " $n";
    }
    //конструкція $$ буде використовувати значення
    //змінної як ім'я зміної
    $result2 = 'test1';
    $test1 = 'test2';
    echo "</br>";
    echo $$result2;
    //посилання дозволяють редагувати змінну через інші
    $var1 = 10;
    $var2 = &$var1;
    $var2 = 20;
    echo "<p>links: </p>";
    echo "var1: $var1";
    //функція може приймати посилання як аргумент, але потрібно
    //визначити його тип. Також можна повертати посилання
    function &getLink(&$var) {
        if ($var === 20) {
            $var += 5;
        }
        return $var;
    }
    $var3 = &getLink($var1);
    $var3 += 2;
    echo " var1: $var1";
    //статичні змінні зберігають значення після завершення роботи функції
    function scream() {
        static $count = 0;
        $count++;
        for ($i = 0; $i < $count; $i++) {
            echo 'a';
        }
        echo "<p></p>";
    }
    echo "<p>static variables: </p>";
    scream();
    scream();
    scream();
    //глобальні змінні дозволяють користуватися в функції змінними,
    //що знаходяться за її межами через слово global
    echo "<p>global variables: </p>";
    $result = "hello world";
    //помилка. Немає доступу до змінної
    //function writer() {
        //echo "<h3>$result</h3>";
    //}
    function writer() {
        global $result;
        echo "<h3>$result</h3>";
    }
    //можна користуватися масивом зміних GLOBALS
    function writer2() {
        $str = $GLOBALS["result"];
        echo "<h3>$str</h3>";
    }
    writer();
    writer2();
    const MYCONST = 10;
    echo MYCONST;
    echo "<h3>MYCONST</h3>";
    define("MYCONST2", 100);
    echo MYCONST2;
    echo "<h3>Line:".__LINE__."</h3>";
    if (!defined("CONST")) {
        echo "<p>Const CONST not defined</p>";
    }
    echo "<p>Variables cheking</p>";
    //Ми можемо перевіряти чи ініціалізована змінна
    $alert;
    if (isset($alert)) {
        echo $alert;
    }
    else {
        echo "<p>alert is underfined</p>";
    }
    $result = 0;
    //можна перевіряти чи змінна пуста(0, "", -0.0)
    if (!empty($result)) {
        echo $result;
    }
    else {
        echo "<p>result is empty</p>";
    }
    //можемо звільняти змінну
    unset($result);
    if (isset($result)) {
        echo $result;
    }
    else {
        echo "<p>result is underfined</p>";
    }
    echo "<p>Types: </p>";
    $a = 10;
    $b = null;
    $c = 'fg';
    //можна отримати тип змінних
    echo "<p>a type = ".gettype($a)." b type = ".gettype($b)." c type = ".gettype($c)."</p>";
    $d = 1;
    $e = true;
    //можна перевірити тип змінних
    echo "<p>a integer? ".is_integer($a)." b string? ".is_string($b)." c object? ".is_object($c)."</p>";
    echo "<p>d bool? ".is_bool($d)." e bool? ".is_bool($e)."</p>";
    $f = [[1, 2, "adasd"]. [324, 3=>"dfd"]];
    echo "<p>f array? ".is_array($f)." b null? ".is_null($b)."</p>";
    echo "<p>a number? ".is_numeric($a)." b scalar? ".is_scalar($b)."</p>";
    $a = 435.6577;
    //можна змінити тип змінної
    settype($a, "Integer");
    echo " $a";
    $a = "435.6577";
    settype($a, "Integer");
    echo " $a";
    //існує приведення типів(рядки до чисел не приводяться)
    $result = (int)true + 10;
    echo "<h3>$result</h3>";
    echo "<p>arrays: </p>";
    $arr = array(1, 2, 3);
    //є 2 функції для отримання розміру масиву
    echo "<p>array size = ".count($arr)."</p>";
    shuffle($arr);
    for ($i = 0; $i < sizeof($arr); $i++) {
        echo " $arr[$i]";
    }
    //є простий спосіб створення асоціативного масиву
    $country = "Ukraine";
    $city = "Kyiv";
    $university = "KPI";
    $arr2 = compact("country", "city", "university");
    foreach ($arr2 as $key => $value) {
        echo "<p>key = $key, value = $value</p>";
    }
    $arr3 = ["B", "A", "C"];
    //сорутвання за зростанням
    asort($arr3);
    //функція виведення певного значення на екран
    print_r($arr3);
    //r - зворотний порядок
    arsort($arr3);
    echo "</br>";
    print_r($arr3);
    //сортування по ключам
    ksort($arr2);
    echo "</br>";
    print_r($arr2);
    krsort($arr2);
    echo "</br>";
    print_r($arr2);
    echo "</br>";
    $arr4 = ["a10", "a5", "A7"];
    //звичайне сорутвання працює досить погано
    asort($arr4);
    print_r($arr4);
    echo "</br>";
    //чутливе до чисел та регістру сортування
    natcasesort($arr4);
    print_r($arr4);
    echo "</br>";

    echo "<p>OOP</p>";
    //створюємо об'єет класу
    $obj = new A(10);
    //виводимо поля класу
    print_r($obj);
    //змінюємо змінну класу(краще використовувати інкапсуляцію)
    $obj->b++;
    echo "<p>$obj->b</p>";
    //виконуємо метод класу
    $obj->message();
    //новий об'єкт з прописаним не обов'язковим параметром
    $obj2 = new A(10, "Object built");
    $obj2->b++;
    //присвоювання одного об'єкту іншому
    $obj3 = $obj;
    //перевірка однвковості даних об'єктів та об'єктів
    if ($obj == $obj2) echo "<p>objects obj and obj2 are equal</p>";
    if ($obj === $obj2) echo "<p>objects obj and obj2 are equivalent</p>";
    if ($obj === $obj3) echo "<p>objects obj and obj3 are equivalent</p>";
    //оголошення класу
    class A {
        //приватна змінна(не наслідується)
        private $a;
        //можна визначати тип полів
        public int $b = 10;

        //принцип інкапсуляції
        public function getA() {
            return $this->a;
        }

        public function setA($a) {
            $this->a = $a;
        }

        //метод класу
        public function message() {
            echo "<h3>hello world!</h3>";
        }

        //конструктор
        function __construct($a, $message = "Object ready") {
            $this->a = $a;
            echo "<p>$message</p>";
        }

        //деструктор
        function __destruct() {
            echo "<p>Object destroyed</p>";
        }
    }
    //анонімні класи корисні, коли потрібно стоврити тільки 1 екземпляр
    $obj = new class("hello world") {
        public $data;

        public function show_data() {
            echo "<h4>$this->data</h4>";
        }

        function __construct($message) {
            $this->data = $message;
            echo "<h4>$message</h4>";
        }
    };
    $obj->show_data();
    //наслідування є. Множинного наслудування немає
    class B extends A {
        public $c;

        public function message()
        {
            echo"inherited ";
            //помилання на батьківські компоненти
            parent::message();
        }

        public function __construct($a, $message = "Object ready")
        {
            //батьківський конструктор
            parent::__construct($a, $message);
            parent::message();
        }
    }
    $obj = new B(10);
    $obj ->message();
    //перевірка належності об'єкту до класу
    if ($obj instanceof A) echo "<p>obj is instance of A</p>";
    class C {
        //захищена змінна(як private), що наслідується
        protected $d;

        //функцію не можна перевизначити
        final function show() {
            echo "<h4>$this->d</h4>";
        }

        //метод або змінна без можифікатору доступу тут аналогічна public
        function __construct($d) {
            $this->d = $d;
        }
    }
    //була б помилка
    /*class D extends C {
        public function show() {

        }
    }*/
    //клас не можливо наслідувати
    final class E {
        public $e = 10;
    }

    class F {
        public static $message;

        public $num = 10;

        public static function get_message() {
            echo "<p>".self::$message." ";
        }

        public function show() {
            self::get_message();
            echo "$this->num</p>";
        }

        public function __construct($message, $num) {
            self::$message = $message;
            $this->num = $num;
        }
    }
    $obj = new F("Our rating is ", 235);
    $obj->show();
    F::get_message();

    //є також інтерфейси, які вирушують проблему множинного наслідування.
    //Є підтримка наслідування інтерфейсів та їх множинного імплеметування
    //Функції інтерфейсів мають бути обв'язково реалізовані
    interface transportable {
        public function transport();
    }

    interface sizable {
        public function show_size($size);
    }

    interface iCount extends  sizable {
        public function show_count($count);
    }

    class G implements transportable, iCount {
        public function transport()
        {
            echo "<h4>Transport ";
        }

        public function show_size($size)
        {
            echo "$size with ";
        }

        public function show_count($count)
        {
            echo "$count oranges</h4>";
        }

        public function show_report($size, $count) {
            $this->transport();
            $this->show_size($size);
            $this->show_count($count);
        }
    }

    $obj = new G();
    $obj->show_report("2 containers", 20000);
    //instance of працює для інтерфейсів
    if ($obj instanceof sizable) echo "<p>obj is instace of sizable</p>";

    //абстрактні класи використовуються для поліморфізму
    abstract class Gun {
        public abstract function shoot();
    }

    //різні реалізації абстрактого методу в дочірніх класах
    class ShotGun extends Gun {
        public function shoot()
        {
            echo "<p>shotgun shoots</p>";
        }
    }

    class Ruffle extends Gun {
        public function shoot()
        {
            echo "<p>ruffle shoots</p>";
        }
    }

    $obj = new ShotGun();
    $obj->shoot();
    $obj = new Ruffle();
    $obj->shoot();

    //функції можна виносити окремо в trait
    trait traffic_light {
        public function glows_green() {
            echo "<p>glows green</p>";
        }
        public function glows_yellow() {
            echo "<p>glows yellow</p>";
        }
        public function glows_red() {
            echo "<p>glows red</p>";
        }
    }

    //при наслідуванні функція з trait перевизначає
    //батьківську функцію
    class H {
        public function glows_green() {
            echo "<p>shine green</p>";
        }
    }

    class J extends H{
        use traffic_light;
    }

    $obj = new J();
    $obj->glows_green();
    $obj->glows_red();

    //для клонування об'єктів використовується clone
    //у випадку, коли в об'єкті є об'єкти, треба
    //додатково реалізувати функцію __clone
    class I {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    class K {
        public $i;
        public $info;

        public function __construct($i, $info)
        {
            $this->i = $i;
            $this->info = $info;
        }

        public function __clone()
        {
            $this->i = clone $this->i;
        }
    }

    $obj1 = new K(new I("Bob"), "Is good developer");
    $obj2 = clone $obj1;
    $obj2->name = "Bobby";
    print_r($obj1);
    //try catch finilize працює як звичайно
    try {
        $result =1/0;
    }
    catch (DivisionByZeroError $ex) {
        echo "<h5>$ex</h5>";
    }
    catch (Error $ex) {
        echo "<h5>$ex</h5>";
    }
    finally {
        unset($result);
    }
    echo "<p>Strings: </p>";
    $str = <<< LABEL
    hello world!
    hello world!
    LABEL;
    echo "<p>$str</p>";
    $str[0] = 'jd';
    echo "<p>$str</p>";
    $pos = strpos($str, "llo");
    echo "<p>pos: $pos</p>";
    $str = trim("       ddgf        ");
    echo "<p>trimed str: $str</p>";
    $str = strtoupper($str);
    echo "<p>upper str: $str</p>";
    $length = strlen($str);
    echo "<p>length of str: $length</p>";
    $substr = substr($str, 1, 2);
    echo "<p>substr: $substr</p>";
    $str = "hello hello hello hello";
    $str = str_replace("llo", "y", $str);
    echo "<p>replaced substrs: $str</p>";
    //підключення файлу з синглтоном та створення екземпляру
    include "singleton.php";
    $obj = Singleton::get_copy();
?>