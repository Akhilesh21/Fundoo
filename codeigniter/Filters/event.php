<html>
    <body>
        <style>
            div
            {
                display: none;
                border:2px solid black;
                width:200px;
                height:100px;
                padding: 5px;
            }
        </style>
        <script>
            
            document.addEventListener("click",hide1)
            function hide1()
            {
                if(document.getElementById("1").checked)
                document.getElementById("cont1").style.display = "block";
                else
                document.getElementById("cont1").style.display = "none";
            }
               
            document.addEventListener("click",hide2)
            function hide2()
            {
                if(document.getElementById("2").checked)
                document.getElementById("cont2").style.display = "block";
                else
                document.getElementById("cont2").style.display = "none";
            }
            
            document.addEventListener("click",hide3)
            function hide3()
            {
                if(document.getElementById("3").checked)
                document.getElementById("cont3").style.display = "block";
                else
                document.getElementById("cont3").style.display = "none";
            }
            


            </script>
        <form action="b1.php" method="POST">
        <pre>
            <input type="radio" name="op" value="1" id="1">Area of rectangle<br>
            <input type="radio" name="op" value="2" id="2">Area of square<br>
            <input type="radio" name="op" value="3" id="3">Area of circle<br>


            <div id="cont1" style="height:200px" >
            Enter length<input type="number" name="l"><br>
            Enter breadth<input type="number" name="b"><br>
            </div>
            
            <div id="cont2" style="height:60px">
            Enter side<input type="number" name="s"><br>
            </div>

            <div id="cont3" >

            Enter side<input type="number" name="s"><br>
            </div>

    <input type="submit" name="submit" value="submit"><br>

    <?php
    if(isset($_POST['submit'])){
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
}
    ?>

    </body>
</html>