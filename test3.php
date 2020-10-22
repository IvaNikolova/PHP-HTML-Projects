<!DOCTYPE html>
<html>
    <head>
        <title>"Car"</title>
    </head>
    <body>
		<h1> Exercise 3 </h1>
		<h2> Class car </h2>
        <?php
        class Car{
            private $model;
            private $version;
           
            public function Car($m, $v){
                $this->model=$m;
                $this->version=$v;
            }
           
            public function Show_Car(){
               // $art= $this->model."<br>". $this->version."<br>";
               // echo $art; 
				print "Car model: ".$this->model."</br>". " Version: ".$this->version."</br>";
            }
        }
		
		class Driver extends Car{
			public $regnom = array();
			
			public function Driver($m, $v){
				parent::__construct($m,$v);
			}
			
			public function set_regnom($rnum){
				array_push($this->regnom,$rnum);
			}
			
			public function show_driver(){
				parent::show_car();
				print_r($this->regnom);
			}
		}
		$dr = new Driver("BMW","E36");
		$dr->set_regnom("VN123456");
		$dr->set_regnom("V145788K");
		$dr->show_driver();
		
        ?>
    </body>
</html>
