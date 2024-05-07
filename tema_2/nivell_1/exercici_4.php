
<?php 
   
        $num = readline("Introdueix el número final: \n");
        $comptar = readline("De cuant en cuant vols comptar: \n");
       
      
        function calcula($num, $comptar) {
            $comptar = 1; 
            $num =10;
            for($i = 0; $i <= $num; $i += $comptar)
            { 
                
                echo $i ." => ". $comptar. "\n";  
            }
        }
        calcula($comptar, $num);
        calcula();
        
        
    
?>

