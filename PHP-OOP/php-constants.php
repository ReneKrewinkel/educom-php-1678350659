<?php

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting";
}

echo Goodbye::LEAVING_MESSAGE;

echo "<br>";





class Goodbye2 {
    const LEAVING_MESSAGE = "Thank you for visiting";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}






$goodbye2 = new Goodbye2();
$goodbye2 -> byebye();


echo "<br>";












?>