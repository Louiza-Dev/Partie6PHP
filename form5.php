<?php
// $_POST['nom'] = (string) $_POST['nom'];
if (!empty($_POST['civilité']) && !empty($_POST['nom']) && $_POST['prenom'] != "" && $_POST['ville'] != ""){
echo 'Civilité: '.$_POST['civilité'].'<br>';
echo 'Nom: '.$_POST['nom'].'<br>';
echo 'Prenom: '.$_POST['prenom'].'<br>';
echo 'Ville: '.$_POST['ville'];
} else {
  echo "Veuillez remplir les champs !!";
}
 ?>
