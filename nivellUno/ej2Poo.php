<?php
    class Shape {
        protected $width;
        protected $height;
        public function __construct($width, $height) {
            $this -> width  = $width;
            $this -> height = $height;
        }        
    }
    
    class Rectangle extends Shape {
        public function area() {
            $areaRectangle =  $this -> width * $this -> height;

            return 'La area de lo Rectangulo es de:  '.$areaRectangle;
        }
    }
    class Triangle extends Shape {
        public function area() {
            $areaTriangle = ($this -> width * $this -> height) / 2;

            return 'La area de lo Triangulo es de: '.$areaTriangle;
        }
    }

    $rectangle = new Rectangle(6, 12);
    echo $rectangle -> area();

    $triangle = new Triangle(8, 4);
    echo $triangle -> area();

?>