<!DOCTYPE html>
<html>
<body>
<?php
class Student {
  public $name;
  public $rollNo;
  public function __construct($name,$rollNo) {
    $this->name = $name;
    $this->rollNo = $rollNo;
    
  }
  public function display() {
    echo "<div>
              <h1>Result : </h1>
              <p> name: {$this->name}</p>
              <p> roll No. : {$this->rollNo}</p>
              
          </div>"; 
  }
}

class MarkSheet extends Student {

   public $CA1;
   public $CA2;
   public $FinalExam;
   public $total;

  
   
   public function __construct($name,$rollNo,$ca1,$ca2,$finalExam){
   
          $this->name = $name;
          $this->rollNo = $rollNo;
          $this->CA1 = $ca1;
          $this->CA2 = $ca2;
          $this->FinalExam = $finalExam;
   }
   
  public function sum(){
        $this->total = (($this->CA1+$this->CA2 + $this->FinalExam)/300)*100;
    }

  
  public function result() {
       $this->display();
       $this->sum();
    echo "
    <h1>Marksheet :</h1>
    
    <p> CA1 :{$this->CA1}</P>
    <p> CA2 : {$this->CA2}</p>
    <p>End Term : {$this->FinalExam}</p>
    <p> Marks : {$this->total} % </p>
   
    
    "; 
  }
}

$name=$_POST["nme"];
 $roll=$_POST["roll"];
 $ut1= $_POST["ca1"];
 $ut2=$_POST["ca2"];
 $endtrm=$_POST["finalexam"];



$obj = new MarkSheet($name,$roll,$ut1,$ut2,$endtrm);
$obj->result();

?>
 
</body>
</html>