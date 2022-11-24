<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p.enunciado {
            background-color: #ffeeaa;
            font-size: 20;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        *{
            font-size:23px;
        }
    </style>

</head>
<body>

<p class="enunciado">
1. Crea un array $dias con los días de la semana y muestra todas sus parejas 
índices/valores mediante un bucle foreach y for.
</p>

<?php
$dias=["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];

//Con foreach
foreach ($dias as $key => $value) {
    echo "$key = $value "."<br>";
}

echo "<br><br><br>";
//Con for
for($i=0;$i<count($dias);$i++){
    echo $i." = ".$dias[$i]."<br>";
}


?>









<p class="enunciado">
2. Crea un array con una lista de 5 alumnos de la clase. Muestra primero la lista de 
los 3 primeros alumnos del array y luego los dos últimos de la lista usando las 
funciones array_slice y array_splice.
</p>

<?php
$alumnos=["David","Juanjo","Anuar","Pedro","Jesús"];


echo "<p>Los tres primeros utilizando array_slice:</p><br>";

foreach (array_slice($alumnos,0,3) as $key => $value) {
    echo "$value "."<br>";
}



echo "<p>Los dos últimos utilizando array_slice:</p><br>";


foreach (array_slice($alumnos,count($alumnos)-2,2) as $key => $value) {
    echo "$value "."<br>";
}



echo "<p>Los tres primeros utilizando array_splice:</p><br>";

foreach (array_splice($alumnos,0,3) as $key => $value) {
    echo "$value "."<br>";
}


echo "<p>Los dos últimos utilizando array_splice:</p><br>";

foreach (array_splice($alumnos,count($alumnos)-2,2) as $key => $value) {
    echo "$value "."<br>";
}
?>







<p class="enunciado">
3. Crea un array de dos dimensiones, de manera que en una dimensión contenga 
el tipo de colores (fuerte o suave) y en la otra 3 colores de cada tipo. 
</p>

<?php

$colores=[
    ["Rojo"=>"FF0000","Verde"=>"00FF00","Azul"=>"0000FF"],
    ["Rosa"=>"FE9ABC","Amarillo"=>"FDF189","Malva"=>"BC8F8F"]
];

echo "<table style=\"border-collapse: collapse; font-size:40px;\">";
foreach($colores as $key => $value){
    echo "<tr style=\"border-collapse: collapse;\">";
    echo "<td style=\"padding-top:4px;padding-right:40px;\">Colores ".($key==0?"Fuertes:":"Suaves:")."<br> "."</td>";
    foreach($value as $key2 => $value2){
        echo "<td style=\"height:50px;width:200px;line-height:20px;text-align:center;padding-top:4px;border: 1px solid black;border-collapse: collapse;background-color:#".$value2.";\">";
        echo "$key2:$value2 "."<br><br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>



<p class="enunciado">
4. Dado el array anterior comprueba si en él se encuentra el color “FF88CC” y el 
color “FF0000” usando la función in_array.
</p>


<?php

$colores=[
    ["Rojo"=>"FF0000","Verde"=>"00FF00","Azul"=>"0000FF"],
    ["Rosa"=>"FE9ABC","Amarillo"=>"FDF189","Malva"=>"BC8F8F"]
];


$ff0000=false;
foreach($colores as $key => $value){
    if(in_array("FF0000",$value)){
        $ff0000=true;
    }
}
if($ff0000){
    echo "El color #FF0000 se encuentra en el array"."<br>";
}else{
    echo "El color #FF0000 NO se encuentra en el array"."<br>";
}



$ff88cc=false;
foreach($colores as $key => $value){
    if(in_array("FF0000",$value)){
        $ff0000=true;
    }
}
if($ff88cc){
    echo "El color #FF88CC se encuentra en el array"."<br>";
}else{
    echo "El color #FF88CC NO se encuentra en el array"."<br>";
}

?>









<p class="enunciado">
5. Crea un array llamado pila como éste:
$pila = array(“cinco” => 5, “uno”=>1, “cuatro”=>4, “dos”=>2, “tres”=>3);
Muestra el array ordenado por asort, arsort, ksort, sort, rsort.
</p>



<?php
$pila = array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);

echo "Con asort:<br>";
asort($pila);
foreach($pila as $key => $value){
    echo "$value<br>";
}
echo"<br><br><br>";


echo "Con arsort:<br>";
arsort($pila);
foreach($pila as $key => $value){
    echo "$value<br>";
}
echo"<br><br><br>";


echo "Con ksort:<br>";
ksort($pila);
foreach($pila as $key => $value){
    echo "$value<br>";
}
echo"<br><br><br>";


echo "Con sort:<br>";
sort($pila);
foreach($pila as $key => $value){
    echo "$value<br>";
}
echo"<br><br><br>";


echo "Con rsort:<br>";
rsort($pila);
foreach($pila as $key => $value){
    echo "$value<br>";
}
echo"<br><br><br>";
?>


<p>6. Crea un array con los países de la Unión Europea y sus capitales. Muestra por 
cada uno de ellos la frase: “La capital de <<país>> es <<capital>>”. Luego 
ordena la lista por el nombre del país y luego por el nombre de la capital.
</p>

<?php
    $paises=["España"=>"Madrid",
        "Alemania"=>"Berlín",
        "Austria"=>"Viena",
        "Bélgica"=>"Bruselas",
        "Bulgaria"=>"Sofía",
        "Chipre"=>"Nicosia",
        "Croacia"=>"Zagreb",
        "Dinamarca"=>"Copenhague",
        "Eslovaquia"=>"Bratislava",
        "Eslovenia"=>"Liubliana",
        
        "Estonia"=>"Tallín",
        "Finlandia"=>"Helsinki",
        "Francia"=>"París",
        "Grecia"=>"Atenas",
        "Hungría"=>"Budapest",
        "Irlanda"=>"Dublín",
        "Italia"=>"Roma",
        "Letonia"=>"Riga",
        "Lituania"=>"Vilna",
        "Luxemburgo"=>"Luxemburgo",
        "Malta"=>"La Valeta",
        "Países Bajos"=>"Ámsterdam",
        "Polonia"=>"Varsovia",
        "Portugal"=>"Lisboa",
        "República Checa"=>"Praga",
        "Rumanía"=>"Bucarest",
        "Suecia"=>"Estocolmo",
    ];
    echo "<hr>";
    foreach($paises as $key => $value){
        echo "La caputal de $key es $value<br>";
    }
    echo "<hr>";

    echo "<br><br><br><br>Ordenados por CAPITAL";
    echo "<hr>";
    asort($paises);//A diferenia de sort(), asort() mantiene el valor de la clave, no la cambia por un número
    foreach($paises as $key => $value){
        echo "La caputal de $key es $value<br>";
    }
    echo "<hr>";
    

    ksort($paises);
    echo "<br><br><br><br>Ordenados por PAIS";
    echo "<hr>";
    foreach($paises as $key => $value){
        echo "La caputal de $key es $value<br>";
    }
    echo "<hr>";
?>

    

<p class="enunciado">7. Obtén el número de valores iguales al valor 2 contenidos en un array de 10 
valores generados aleatoriamente con valores de 1 a 10.</p>

<?php
$aleatorios=array();
$doses=0;
    for($i=0;$i<10;$i++){
        $aleatorio=rand(1,10);
        array_push($aleatorios,$aleatorio);

        if($aleatorio===2){
            $doses++;
        }
        echo $aleatorio."<br>";
    }

    if($doses==1){
        echo "Hay $doses dos.";
    }else{
        if($doses==0){
            echo "No hay ningún dos.";
        }else{
            echo "Hay $doses doses.";
        }
    }
    


?>



</body>
</html>