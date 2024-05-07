
<?php 
   
        $num = readline("Introdueix el número final: \n");
        $comptar = readline("De cuant en cuant vols comptar: \n");
       
        function calcula2(){
            $i = 1;
            while ($i <= 10){
                echo $i++;
            }
        }
        function calcula($comptar, $num){
            for($i = 0; $i <= $num; $i += $comptar)
            { 
                
                echo $i ." => ". $comptar. "\n";  
            }
        }
        function calcula3($comptar){
            for($i = 0; $i <= 10; $i +=$comptar)
            {
                echo $i ." => ". $comptar. "\n";  
            }
            
        }
        function imprimir($comptar, $num){
            if($num == null || $comptar == null)
            {
                calcula2();
            }
            elseif($num == null && $comptar != null)
            {
                calcula3($comptar);
            }
            else
            {
                calcula($comptar, $num);
            }
        }
        imprimir($comptar, $num);
      
?>

