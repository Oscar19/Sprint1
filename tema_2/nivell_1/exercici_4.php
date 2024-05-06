
<?php 
   
        $num = readline("Introdueix un número: \n");
        $comptar = readline("De cuant en cuant vols comptar: \n");
    
        function calcula($comptar, $num){
            for($i = 0; $i <= $num; $i += $comptar){ 
                
                echo $i ." => ". $comptar. "\n";  }
        }
        calcula($comptar, $num);
    
?>

