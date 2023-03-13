<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

greeting::welcome();
echo "<br>";
new greeting();


echo "<br>";
echo "<br>";
echo "<br>";

class A {
    public static function welcome () {
        echo "Hello World!";
    }
}

class B {
    public function message() {
        A::welcome();
    }
}

$obj = new B();
echo $obj -> message();

echo "<br>";
echo "<br>";

class domain {
    protected static function getWebsiteName() {
      return "W3Schools.com";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
      $this->websiteName = parent::getWebsiteName();
    }
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;

?>