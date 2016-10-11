<p><form action="exo1.php" method="post">
  Entrez le jour de la semaine : <input type="text" name="jours"/><br/>
  <button type="submit" name="valider">Valider</button>
</form>


<?php

$jours = array ('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');



echo "<h2>Balise For</h2>";

for ($numero = 0; $numero < 7; $numero++)
{
  echo $jours[$numero]. '<br/>';
}

echo "<h2>Balise Foreach</h2>";

foreach($jours as $element)

{
  echo $element. '<br/>';
}

echo "<h2>Balise While</h2>";

$i = 0;

while ($i <count($jours))
{
  echo("$jours[$i]"). '<br/>';
  $i++;
}

echo"<div><h2>";

$reel=strip_tags($_POST['jours']);
$text=strtolower($reel);

switch($text){
  case 'lundi':
  echo "courage!";
  break;

  case 'mardi':
  echo "Allez!";
  break;


  default:

  break;

}
  echo "</div></h2>";



 ?>
