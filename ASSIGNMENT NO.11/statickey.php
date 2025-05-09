<?php
class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

Counter::increment();
Counter::increment();
Counter::increment();

echo "Total Count: " . Counter::getCount(); 
?>
