<?php

    abstract class Shape
    {   
        public $color;
        
        public function set_Color($color){
            $this->color=$color;
        }

        public function get_Color():string{
            return $this->color;
        }
        abstract public function getArea();
        abstract public function getParameter();
    }

    class Circle extends Shape
    {
        public $radius;
        
        public function __construct($radius,$color)
        {
            $this->radius = $radius;
            $this->color=$color;
        }
        
        public function getArea()
        {
            return 3.14 * ($this->radius * $this->radius);
        }
        
        public function getParameter()
        {
            return (2 * 3.14 * ($this->radius));
        }

    }

    class Rectangle extends Shape
    {
        public $width, $height;
        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }
        
        public function getArea()
        {
            return $this->width * $this->height;
        }
        
        public function getParameter()
        {
            return 2 * ($this->width + $this->height);
        }
        
    }
    class Square extends Rectangle{
        public function __construct($width, $height,$color)
        {
            $this->width = $width;
            $this->height = $height;
            $this->color = $color;
        }
    }

    function showInfo($a,$p,$c)
    {
        //echo "Area is : ".$a."<br>Parameter is : ".$p."<br>Color is : ".$c;
        echo "<table class='table table-dark table-hover'>";
        echo "<thead class='thead-light'><tr><th>Area</th><th>Parameter</th><th>Color</th></tr></thead>";
        echo "<tbody><tr><td>".$a."</td><td>".$p."</td><td>".$c."</td></tr></tbody>";
        echo "</table>";
    }

?>