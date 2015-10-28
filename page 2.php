<?php
$m15 = $_POST['moins15'];
$m25 = $_POST['medium15-25'];
$m40 = $_POST['medium25-40'];
$mv = $_POST['plus40'];

if ($m15)
{
echo "AHAHAH t'es un gosse! Fais attention de pas te pisser dessus";
  exit();
// C'est ici que je mets le code servant à effectuer la connexion, car le mot de passe est bon.
}
else // Si le mot de passe n'est pas bon.
{
echo 'Vous n\'avez pas rentré les bons identifiants';

}
?>
