<?php 

    $inventario = [
        ["nombre" => "Producto 1", "categoria" => "Categoría A", "precio" => 10.5, "stock" => 100],
        ["nombre" => "Producto 2", "categoria" => "Categoría B", "precio" => 15.0, "stock" => 50],
        ["nombre" => "Producto 3", "categoria" => "Categoría A", "precio" => 7.5, "stock" => 200],
    ];

    //añadir nuevo producto
    $inventario[] = ["nombre" => "Producto 4", "categoria" => "Categoría C", "precio" => 2.5, "stock" => 150];
   // print_r $inventario;

   // calcular el producto con mas stock
   $maxStock = null;
   $valor = 0;
   foreach ($inventario as $producto){
        if($producto["nombre"] == "Producto 1"){
            $producto["stock"]+= 20;
        }
        if($maxStock === null || $maxStock["stock"] < $producto["stock"]){
            $maxStock = $producto;
        }
        //calcular el valor total del inventario
        $valor = $producto["stock"] * $producto["precio"];
       // print_r ($producto);
        echo $valor;

    }
    echo "\n";
    print_r ($maxStock);
    

?>