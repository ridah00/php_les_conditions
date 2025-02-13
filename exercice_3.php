<?php 
$var_gender = "Homme";
$var_age = 32;
echo ($var_age >= 18 && $var_gender == "Homme") ? "Vous etes un homme et majeur":"";
echo '<br>';
$var_gender = "Homme";
$var_age = 16;
echo ($var_age < 18 && $var_gender == "Homme") ? "Vous etes un homme et mineur":"";
echo '<br>';
$var_gender = "Femme";
$var_age = 32;
echo ($var_age >= 18 && $var_gender == "Femme") ? "Vous etes une femme et majeur":"";
echo '<br>';
$var_gender = "Femme";
$var_age = 12;
echo ($var_age < 18 && $var_gender == "Femme") ? "Vous etes une femme et mineur":"";


?>