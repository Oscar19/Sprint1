<?php 
    require_once("classes/Employee.php");

    $employee1 = new Employee();
    $employee1->inicialize("Oscar", 3500);
    $employee1->imprimir();

    $employee2 = new Employee();
    $employee2 -> inicialize("Jaime", 1200);
    $employee2->imprimir();

    $employee3 = new Employee();
    $employee3 -> inicialize("Adria", 7800);
    $employee3->imprimir();

   

    
    /*foreach($empleados as $empleado){
        echo imprimir();
    }*/
    


?>