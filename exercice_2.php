
<?php 
$isEasy = true ;
$resultat = ($isEasy) ? "c'est facile." : "c'est difiicile.";
echo $resultat;
$isEasy = false ;
echo '<br>';
if ($isEasy) {
    echo "c'est facile.";
}else {
   echo "c'est dificile.";
}
?>