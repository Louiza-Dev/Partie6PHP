<?php
// $_POST['nom'] = (string) $_POST['nom'];
// if (!empty($_POST['civilité']) && $_POST['nom'] != "" && $_POST['prenom'] != "" && $_POST['ville'] != ""){
// echo 'Civilité: '.$_POST['civilité'].'<br>';
// echo 'Nom: '.$_POST['nom'].'<br>';
// echo 'Prenom: '.$_POST['prenom'].'<br>';
// echo 'Ville: '.$_POST['ville'];
// } else {
//   echo "Veuillez remplir les champs !!";
// }
 ?>
<?php
// if (isset($_POST['civilité']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0){
  $nm = $_POST['nom'];
  $prnm = $_POST['prenom'];
  $vl = $_POST['ville'];
  $cvl = $_POST['civilité'];
  $rej = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
  if (!empty($nm) && !empty($prnm) && !empty($cvl) && !empty($vl)){
    if( preg_match($rej , $nm) &&  preg_match($rej , $prnm) &&  preg_match($rej , $vl)){
      echo 'Civilité: '.$cvl.'<br>';
      echo 'Département: '.$vl.'<br>';
      echo 'Nom: '.$nm.'<br>';
      echo 'Prenom: '.$prnm;
      } else {
      echo 'Veuillez verifiez votre saisie !!';
      }
    } else {
    echo 'Veuillez remplir les champs !!';
  }
// }
?>
