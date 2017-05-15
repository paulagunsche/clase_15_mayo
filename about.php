<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>IDENTIDAD - HISTORIA - MEMORIA</h2>
<p>En este proyecto se busca rescatar y revalorizar el patrimonio cultural y social de los barrios de Santiago a través del relato y el apoyo de material audiovisual, conduciendo al entendimiento de dicho barrio a través del relato de sus propios habitantes, haciendo una radiografía al lugar y una representación directa y real del sentido de pertenencia, la valoración del espacio y la comunidad.</p>
<h2>MOTIVACIÓN</h2>
<p>Como habitante de santiago y participante de una comunidad habitacional que fue denominada patrimonio y zona típica de la ciudad, a nacido el interés por mantener viva la vida en comunidad
  y aportar a través del diseño para visibilizar y abrir espacios comunicacionales en donde se reunan los relatos y memorias de aquellos que aún residen en barrios historicos dentro de santiago.</p>
</section>
<?php include('pie.php');?>
