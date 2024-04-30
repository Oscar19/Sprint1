<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
    
</head>
<body>

    <h1>Introduce las notas de los alumnos</h1>
<form action="" method="post">
    <div class="alumnos">
        <div class="alumno">
            <h3>Alumno 1</h3>
            <input type="number" name="1_nota_1" placeholder="Introduce la primera nota">
            <input type="number" name="1_nota_2" placeholder="Introduce la segunda nota">
            <input type="number" name="1_nota_3" placeholder="Introduce la tercera nota">
            <input type="number" name="1_nota_4" placeholder="Introduce la cuarta nota">
            <input type="number" name="1_nota_5" placeholder="Introduce la quinta nota">
        </div>
        <div class="alumno">
        <h3>Alumno 2</h3>
            <input type="number" name="2_nota_1" placeholder="Introduce la primera nota"> 
            <input type="number" name="2_nota_2" placeholder="Introduce la segunda nota">
            <input type="number" name="2_nota_3" placeholder="Introduce la tercera nota">
            <input type="number" name="2_nota_4" placeholder="Introduce la cuarta nota">
            <input type="number" name="2_nota_5" placeholder="Introduce la quinta nota">
        </div>
        <div class="alumno">
        <h3>Alumno 3</h3>
            <input type="number" name="3_nota_1" placeholder="Introduce la primera nota">
            <input type="number" name="3_nota_2" placeholder="Introduce la segunda nota">
            <input type="number" name="3_nota_3" placeholder="Introduce la tercera nota">
            <input type="number" name="3_nota_4" placeholder="Introduce la cuarta nota">
            <input type="number" name="3_nota_5" placeholder="Introduce la quinta nota">
        </div>
    </div>
    
    
    <input type="submit" name="envia" value="Notas de los alumnos"/>
</form>
    
    <?php 
    if(isset($_POST["envia"])){
        echo "<h3>Versión directa</h3>";
        $nota_11 = $_POST["1_nota_1"];
        $nota_12 = $_POST["1_nota_2"];
        $nota_13 = $_POST["1_nota_3"];
        $nota_14 = $_POST["1_nota_4"];
        $nota_15 = $_POST["1_nota_5"];

        $nota_21 = $_POST["2_nota_1"];
        $nota_22 = $_POST["2_nota_2"];
        $nota_23 = $_POST["2_nota_3"];
        $nota_24 = $_POST["2_nota_4"];
        $nota_25 = $_POST["2_nota_5"];

        $nota_31 = $_POST["3_nota_1"];
        $nota_32 = $_POST["3_nota_2"];
        $nota_33 = $_POST["3_nota_3"];
        $nota_34 = $_POST["3_nota_4"];
        $nota_35 = $_POST["3_nota_5"];

        $alumno_1 = array($nota_11 ,$nota_12 ,$nota_13 ,$nota_14 ,$nota_15);
        $alumno_2 = array($nota_21 ,$nota_22 ,$nota_23 ,$nota_24 ,$nota_25);
        $alumno_3 = array($nota_31 ,$nota_32 ,$nota_33 ,$nota_34 ,$nota_35);

        function calcular_media($alumno_1,$alumno_2,$alumno_3){
            $todo_notas = array_merge($alumno_1,$alumno_2,$alumno_3);
            $num_notas = count($todo_notas);
            $media_t_clase = array_sum($todo_notas) / $num_notas;
            return $media_t_clase;
        }
        echo "La media de la clase es: ".calcular_media($alumno_1, $alumno_2, $alumno_3). "<br>";

        $nota_a1 = array_sum($alumno_1) / 5;
        $nota_a2 = array_sum($alumno_2) / 5;
        $nota_a3 = array_sum($alumno_3) / 5;

        echo "Nota del alumno 1: ".$nota_a1. "<br>";
        echo "Nota del alumno 2: ".$nota_a2. "<br>";
        echo "Nota del alumno 3: ".$nota_a3. "<br>";
        /*Manera que he visto por ahí, y estudiar*/
        echo "<h3>Versión escalable</h3>";
        $notas_alumnos = array(
            "Alumno1" => array($nota_11 ,$nota_12 ,$nota_13 ,$nota_14 ,$nota_15),
            "Alumno2" => array($nota_21 ,$nota_22 ,$nota_23 ,$nota_24 ,$nota_25 ),
            "Alumno3" => array($nota_31 ,$nota_32 ,$nota_33 ,$nota_34 ,$nota_35 )
        );
        function media_clase($notas_alumnos){
            foreach($notas_alumnos as $notas){
                $suma_notas_total = array_sum($notas);
                $count_notas = count($notas);
                $media_clase = $suma_notas_total / $count_notas;
                return $media_clase;
            }
        }
       function media_alumno($notas){
            $suma_notas_alumno = array_sum($notas);
            return $suma_notas_alumno / 5;
        }
        foreach($notas_alumnos as $alumnos => $notas){
            $media = media_alumno($notas);
            echo "La media de $alumnos: $media<br>";
        }
       $media_clase = media_clase($notas_alumnos,$media_clase);

       echo "La media de la clase es de : ". $media_clase;
        
    }   
    ?>
 

</body>
</html>