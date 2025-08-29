<?php
class Rectangle {
    public $width;
    public $height;

    public function __construct($width = 1, $height = 1) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

$rectangle1 = new Rectangle(12, 8);
echo "Area: " . $rectangle1->getArea() . "<br>";
echo "Perimeter: " . $rectangle1->getPerimeter();
?>
