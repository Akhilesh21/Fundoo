<html>
    <body>
        <pre>
            <input type="radio" name="op" value="1">Area of rectangle<br>
            <input type="radio" name="op" value="1">Area of square<br>
            <input type="radio" name="op" value="1">Area of circle<br>
    Enter breadth<input type="number" name="b"><br>

    Enter side<input type="number" name="s"><br>
    <input type="submit" name="submit" value="submit"><br>

    <?php
    $op=$_POST['op'];
    $rad=$_POST['rad'];
    $l=$_POST['l'];
    $b=$_POST['b'];
    $s=$_POST['s'];

    interface area
    {
        public function area();
    }
    class rectangle implements area
    {
        protected $le,$br;
        public function rectangle($le,$br)
        {
            $this->le =$le;
            $this->br =$br;
        }
        public function area()
        {
            $area =$this->le*$this->br;
            echo "Area of rectangle:$area<br>";
        }
    }
    class square extends rectangle
    {
        public function square($s1,$s2)
        {
            parent::rectangle($s1,$s2);
        }
        public function area()
        {
            parent::area();
        }
    }
    class circle implements area{
        protected $rad;
        public function circle($rad)
        {
            $this->rad=$rad;
        }
        public function area()
        {
            $area = PI*$this->rad*$this->rad;
            echo "Area of circle: $area<br>";
        }
    }
    if($op == '1'){
        $o = new rectangle($l,$b);
        $o->area();
    }
    elseif($op == '2'){
        $o = new square();
    }
    ?>

    </body>
</html>