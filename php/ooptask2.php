<?php
class students {
    private $name,$age,$studentid;
    
    public function __construct($name,$age,$studentid){
        $this->name=$name;
        $this->age=$age;
        $this->student=$studentid;
    }
           public function getname(){
            return $this->name;
           }
           public function setname($name) {
            $this->name = $name;
        }
           public function getage(){
            return $this->age;
           }
           public function setage($age) {
            $this->age = $age;
        }
           public function getstudent(){
            return $this->student;
           }
           public function setage($studentid) {
            $this->student = $studentid;
        }
           public function getall() {
                  return "Make: {$this->name}, Model: {$this->age}, VIN: {$this->student}";
              }
    
              public function __destruct() {
                echo "{$this->name} destroyed.<br>";
           }
    }
    class classroom{
        public function makearr(){
            $name = array();
            $age = array();
            $studentid=array();
            return new returnArray('name'=>$name, 'age'=>$age,'student'=>$studentid);
         }
         public function add($studentId, $name, $age) {
            $this->students[$studentId] = array('name' => $name, 'age' => $age);
        }
         function rmoveid($studentId)
         try {
            if (isset($this->students[$Id])) {
                unset($this->students[$studentId]);
                return " $studentId gone";
            } else {
                throw new Exception("no id");
            }
        } catch (Exception $err) {
            return $err->getMessage();
        }
        function all(){
            return $this->students;
        }
    }
    $st1= new students("hesham",25,315);
    $st2= new students("sami",26,888);
    $classr= new classroom();
    $classr->add($st1);
    $classr->add($st2);
    $remove->rmoveid(888);
    $inventory->all();
?>

