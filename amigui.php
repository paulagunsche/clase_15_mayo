<?php include('cabeza.php');?>
<section>
<h2>Artículos</h2>
<?php
// basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/ChungKat/clase_15_mayo/master/datos.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
// ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
// lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
for($a = 0; $a < $total = count($csv); $a++){?>
  <article class="row">
    <hr>
    <div class="col-xs-5 col-sm-3 col-md-2"><img src="<?php echo $csv[$a]['Imagen'];?>" class="img-responsive"></div>
    <div class="col-xs-7 col-sm-9 col-md-10">
      <h3>Dirigida por <?php echo $csv[$a]['titulo'];?> </h3>
      <p><?php echo $csv[$a]['texto'];?></p>
      <p><?php echo $csv[$a]['apa'];?></p>
      <img src="<?php echo $csv[$a]['images'];?>" class="img-responsive">
      <p><?php echo $csv[$a]['vinculos'];?></p>
      <p><?php echo $csv[$a]['tags'];?></p>

    </div>
  </article>
<?php };?>

</section>
<?php include('pie.php');?>
