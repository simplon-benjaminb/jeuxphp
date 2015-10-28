<?php
$prs = $_POST['pseudo'];
echo "Prénom tapé par l'utilisateur : ".$prs;
?>
<br>
<?php
echo "C'est cool t'es pas si mongol en fait!";
?>
<br>
<?php
echo "bon passons au chose serieuse!";
?>
<br><br><br><br><br><br><br><br>


<form method="post" action="traitement.php">

   <p>

       Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />

       <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />

       <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />

       <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />

       <input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">Encore plus vieux que ça ?!</label>

   </p>

</form>
