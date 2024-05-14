<?php
   class Employee {

    private $name;
    private $salary;

    public function myMethod($name, $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }
    public function printTaxes(){

        echo $this -> name;
        if($this -> salary > 6000){
            echo " --> ¡Pagar Impuestos!";
        } else {
            echo " --> ¡Salario Isento de Impuestos!";
        }
    }

   }

   $employee1 = new Employee();
   $employee1 -> myMethod('Maria', 5000);
   $employee1 -> printTaxes();

   $employee2 = new Employee();
   $employee2 -> myMethod('Laya', 7000);
   $employee2 -> printTaxes();
   
   $employee3 = new Employee();
   $employee3 -> myMethod('Amaya', 4000);
   $employee3 -> printTaxes();
   
?>