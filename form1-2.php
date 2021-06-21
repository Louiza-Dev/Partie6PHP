<?php
$nm = $_POST['nom'];
$prnm = $_POST['prenom'];
$vl = $_POST['ville'];
$rej = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
if (!empty($nm) && !empty($prnm) && !empty($vl)){
  if( preg_match($rej , $nm) &&  preg_match($rej , $prnm) && preg_match($rej , $vl)){
    echo 'Nom: '.$nm.'<br>';
    echo 'Prenom: '.$prnm.'<br>';
    echo 'Ville: '.$vl;
    } else {
    echo 'Veuillez verifiez votre saisie !!';
    }
  } else {
  echo 'Veuillez remplir les champs !!';
}
?>
