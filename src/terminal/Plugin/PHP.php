<?php 
$PATH     =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
    'path'          => $PATH,
    'wolf05'        => $PATH.'/wolf05',
    'system'        => $PATH.'/wolf05/application/system/Wofl05require.php',
    'plugin'        => '/wolf05/application/assets',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
  $FLR=$Config['base_url'].$ROOT['plugin'];
  tatiyeNet::DirStyle($FLR,'clipboard.min.js');
  tatiyeNet::DirStyle($FLR,'wolf05.css');
  
/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);


?>

<?php 
 $Page=$_POST['id'];
  if($Page == 'array') {?>
	<b>PHP  Arrays</b>
<pre>
  <code class="language-js">
&lt;?php
  $cars = array("Volvo", "BMW", "Toyota");
  echo count($cars); // hasil 3
  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  $arrlength = count($cars);
  for($x = 0; $x &lt; $arrlength; $x++) {
      echo $cars[$x];
      echo "&lt;br&gt;";
  }
  ?&gt;
  </code>
</pre>
<b>PHP Associative Arrays</b>
<pre>
  <code class="language-js">
&lt;?php
  $age = array("Peter"=&gt;"35", "Ben"=&gt;"37", "Joe"=&gt;"43");
  echo "Peter is " . $age['Peter'] . " years old.";

  foreach($age as $x =&gt; $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "&lt;br&gt;";
  }
  ?&gt;
  </code>
</pre>
<b>PHP - Multidimensional Arrays</b>
<pre>
  <code class="language-js">
&lt;?php
  $cars = array
    (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );
      
  for ($row = 0; $row &lt; 4; $row++) {
    echo "&lt;p&gt;&lt;b&gt;Row number $row&lt;/b&gt;&lt;/p&gt;";
    echo "&lt;ul&gt;";
    for ($col = 0; $col &lt; 3; $col++) {
      echo "&lt;li&gt;".$cars[$row][$col]."&lt;/li&gt;";
    }
    echo "&lt;/ul&gt;";
  }
  ?&gt;
  </code>
</pre>


 <?php } elseif ($Page == 'loop'){?>
 	<b>PHP while Loop</b>
<pre>
  <code class="language-js">
&lt;?php
$x = 1;
while($x &lt;= 5) {
    echo "The number is: $x &lt;br&gt;";
    $x++;
}
?&gt;
  </code>
</pre>
<b>The PHP foreach Loop</b>
<pre>
  <code class="language-js">
&lt;?php
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value &lt;br&gt;";
}
$age = array("Peter"=&gt;"35", "Ben"=&gt;"37", "Joe"=&gt;"43");
foreach($age as $x =&gt; $val) {
  echo "$x = $val&lt;br&gt;";
}
?&gt;
  </code>
</pre>
 <?php } elseif ($Page == 'if'){?>
<b>The PHP if</b>
<pre>
  <code class="language-js">
&lt;?php
$t = date("H");
if ($t &lt; "10") {
    echo "Have a good morning!";
} elseif ($t &lt; "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?&gt;
  </code>
</pre>
 <?php } elseif ($Page == 'oop'){?>
  <b> PHP OOP - Classes and Objects</b>
<pre>
  <code class="language-js">
&lt;?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this-&gt;name = $name;
  }
  function get_name() {
    return $this-&gt;name;
  }
}
?&gt;
  </code>
</pre>
<b>Define Objects</b>
<pre>
  <code class="language-js">
&lt;?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this-&gt;name = $name;
  }
  function get_name() {
    return $this-&gt;name;
  }
}
$apple = new Fruit();
$banana = new Fruit();
$apple-&gt;set_name('Apple');
$banana-&gt;set_name('Banana');
echo $apple-&gt;get_name();
echo "&lt;br&gt;";
echo $banana-&gt;get_name();
?&gt;
  </code>
</pre>
<b>PHP - The __construct Function
</b>
<pre>
  <code class="language-js">
    &lt;?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this-&gt;name = $name; 
  }
  function get_name() {
    return $this-&gt;name;
  }
}

$apple = new Fruit("Apple");
echo $apple-&gt;get_name();
?&gt;

&lt;?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this-&gt;name = $name;
    $this-&gt;color = $color;
  }
  function get_name() {
    return $this-&gt;name;
  }
  function get_color() {
    return $this-&gt;color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple-&gt;get_name();
echo "&lt;br&gt;";
echo $apple-&gt;get_color();
?&gt;

  </code>
</pre>
<b>PHP OOP - Destructor</b>
<pre>
  <code class="language-js">

&lt;?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this-&gt;name = $name; 
  }
  function __destruct() {
    echo "The fruit is {$this-&gt;name}."; 
  }
}

$apple = new Fruit("Apple");
?&gt;
  </code>
</pre>
<b>PHP - What is Inheritance?</b>
<pre>
  <code class="language-js">
&lt;?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this-&gt;name = $name;
    $this-&gt;color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this-&gt;name} and the color is {$this-&gt;color}."; 
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry-&gt;message();
$strawberry-&gt;intro();
?&gt;
  </code>
</pre>
<b>PHP OOP - Class Constants</b>
<pre>
  <code class="language-js">
&lt;?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
?&gt;

&lt;?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye-&gt;byebye();
?&gt;
  </code>
</pre>
<b>PHP OOP - Abstract Classes</b>
<pre>
  <code class="language-js">
&lt;?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this-&gt;name = $name;
  }
  abstract public function intro() : string; 
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this-&gt;name!"; 
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this-&gt;name!"; 
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this-&gt;name!"; 
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi-&gt;intro();
echo "&lt;br&gt;";

$volvo = new volvo("Volvo");
echo $volvo-&gt;intro();
echo "&lt;br&gt;";

$citroen = new citroen("Citroen");
echo $citroen-&gt;intro();
?&gt;
  </code>
</pre>
<b>PHP OOP - Traits</b>
<pre>
  <code class="language-js">
&lt;?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj-&gt;msg1();
?&gt;

 
&lt;?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj-&gt;msg1();
?&gt;
  </code>
</pre>
<b>PHP - Static Methods</b>
<pre>
  <code class="language-js">
&lt;?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?&gt;
  </code>
</pre>
<b>PHP - Static Properties</b>
<pre>
  <code class="language-js">
&lt;?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?&gt;
&lt;?php
class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x-&gt;xStatic();
?&gt;
  </code>
</pre>
 <?php } elseif ($Page == 'diteruskan'){?>
 <?php } elseif ($Page == 'diteruskan'){?>
 <?php } elseif ($Page == 'diteruskan'){?>
 2
 <?php } else {?>
 3
 <?php }?>
<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>