<?php
$file = './profesores.json';

$profesores = json_decode($jsonData);

print (gettype($profesores));

print "<h3>Listado de profesores</h3>";
foreach ($profesores as $profesor) {
    print("Nombre: {$profesor->nombre}<br>");
    print("Email: {$profesor->email}<br>");
    print("Edad: {$profesor->edad}<br>");
    print("Salario: {$profesor->salario}<br>");
    print("Dirección: {$profesor->direccion->calle}<br>");
    print("Calle: {$profesor->direccion->numero}<br>");
    print("Numero: {$profesor->direccion->ciudad}<br>");
    print("<ul>");
    foreach ($profesor->materias as $materia) {
        print("<li>$materia</li>");
    }
    print ("</ul>");
    print('<hr>');

}

profesores_salario($profesores,2000);

function profesores_salario($datos,$salariominimo){
    foreach ($datos as $dato) {
        if($dato->salario>$salariominimo){
            print "El profesor ". $dato->nombre . " gana " .$dato->salario;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        }
    }
    
}
?>