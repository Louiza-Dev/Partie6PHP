<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Part6</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-12 text-center border border-dark">Part6</h1>
        <!-- EXooooooooooo11111111111111111111111111111111111111111111111111111 -->
        <div class="col-12 col-md-4 text-center border border-dark">
          <h2>Exo1 - Exo2</h2>
          <p>Les champs doivent être renseignés. Vérifiez la saisie</p>
              <form method="post" action="form1-2.php">
                <label for="name">Votre Nom:</label>
                <input type="text" name="nom" id="name">
                <label for="prename">Votre Prenom:</label>
                <input type="text" name="prenom" id="prename">
                <label for="vile">Votre Départe:</label>
                <input type="text" name="ville" id="vile">
                <button type="submit" name="button">OK</button>
              </form>
        </div>
        <!-- EXooooooooooooooooooo222222222222222222222222222222222 -->
        <div class="col-12 col-md-4 text-center border border-dark">
          <h2>Exo3</h2>
          <p>Vérifiez la saisie. Empêchez l'inclusion de balises html</p>
              <form method="post" action="form3.php">
                <label for="civil">Choisissez votre civilité:</label>
                <!-- <input type="text" name="civilité"> -->
                <select name="civilité" id="civil">
                  <option value="Mme">Mme</option>
                  <option value="Mlle">Mlle</option>
                  <option value="M.">M.</option>
                </select>
                <label for="nam">Votre Nom svp:</label>
                <input type="text" name="nom" id="nam">
                <label for="pern">Votre Prenom:</label>
                <input type="text" name="prenom" id="pern">
                <label for="dep">Votre Départe:</label>
                <input type="text" name="ville" id="dep">
                <button type="submit" name="button">Valider</button>
              </form>
        </div>
        <!-- EXooooooooooooo4444444444444444444444444444444444444444444 -->
        <div class="col-12 col-md-4  text-center border border-dark">
          <h2>Exo4</h2>
          <p>Envoie sur la même page. Vérifiez . Empêchez </p>
              <form method="post" action="index.php">
                <label for="civile">Choisissez votre civilité:</label>
                <!-- <input type="text" name="civilité"> -->
                <select name="civilité" id="civile">
                  <option value="Mme">Mme</option>
                  <option value="Mlle">Mlle</option>
                  <option value="M.">M.</option>
                </select>
                <label for="nom">Votre Nom svp:</label>
                <input type="text" name="nom" id="nom">
                <label for="prenom">Votre Prenom:</label>
                <input type="text" name="prenom" id="prenom">
                <label for="villl">Votre Départe:</label>
                <input type="text" name="ville" id="villl">
                <button type="submit"  name="button">OK</button>
               </form>         <!-- onclick="okClick()" -->
              <?php
              // if (isset($_POST['civilité']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0){
              //   $nm = $_POST['nom'];
              //   $prnm = $_POST['prenom'];
              //   $vl = $_POST['ville'];
              //   $cvl = $_POST['civilité'];
                $rej = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
                if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['civilité']) && !empty($_POST['ville'])){
                  $nm = $_POST['nom'];
                  $prnm = $_POST['prenom'];
                  $vl = $_POST['ville'];
                  $cvl = $_POST['civilité'];
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
        </div>
        <!-- EXooooooooooo555555555555555555555555555555555555555555 -->
        <div class="col-12 col-md-4 text-center border border-dark">
          <h2>Exo5</h2>
          <p>Sélectionner un fichier</p>
              <form method="post" action="index.php" enctype="multipart/form-data">
                <label for="civilité">Choisissez votre civilité:</label>
                <!-- <input type="text" name="civilité"> -->
                <select name="civilité" id="civilité">
                  <option value="Mme">Mme</option>
                  <option value="Mlle">Mlle</option>
                  <option value="M.">M.</option>
                </select>
                <label for="nomm">Votre Nom svp:</label>
                <input type="text" name="nom" id="nomm">
                <label for="pree">Votre Prenom:</label>
                <input type="text" name="prenom" id="pree">
                <label for="fich">Votre Fichier:</label>
                <input type="file" name="fichier" id="fich">
                <input type="submit" value="Envoyez">
               </form>
              <?php
              if (isset($_POST['civilité']) && isset($_POST['nom']) && isset($_POST['prenom'])){// && isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0){
                $cvl = $_POST['civilité'];
                $nm = $_POST['nom'];
                $prnm = $_POST['prenom'];
                // $fch = $_FILES['fichier'];    //htmlspecialchars()
                // $fich = $fch['name'];
                // $result = move_uploaded_file($fch["tmp_name"],$fich);
                $rej = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";

                if (!empty($nm) && !empty($prnm) && !empty($_FILES['fichier']['name']) && !empty($cvl)){
                  if(preg_match($rej , $nm) &&  preg_match($rej , $prnm)){
                    echo 'Civilité: '.$cvl.'<br>';
                    echo 'Nom: '.$nm.'<br>';
                    echo 'Prenom: '.$prnm.'<br>';
                    echo 'Fichier: '. $_FILES['fichier']['name'];
                  } else {
                    echo 'Veuillez verifiez votre saisie !!';
                  }
                } else {
                  echo 'Veuillez remplir les champs !!';
                }
              }
              ?>
        </div>
          <!-- EXoooooooooooo6666666666666666666666666666666666666  -->
        <div class="col-12 offset-4 col-md-4 text-center border border-dark">
          <h2>Exo6</h2>
          <p>Vérifiez si les paramètres existent, affichez les sinon affichez erreur.</p>
          <form method="post" action="index.php" enctype="multipart/form-data">
            <label for="civilité">Choisissez votre civilité:</label>
            <!-- <input type="text" name="civilité"> -->
            <select name="civilité" id="civilité">
              <option value="Mme">Mme</option>
              <option value="Mlle">Mlle</option>
              <option value="M.">M.</option>
            </select>
            <label for="nomm">Votre Nom svp:</label>
            <input type="text" name="nom" id="nomm">
            <label for="pree">Votre Prenom:</label>
            <input type="text" name="prenom" id="pree">
            <label for="fich">Votre Fichier:</label>
            <input type="file" name="fichier" id="fich">
            <input type="submit" value="Envoyez">
           </form>
          <?php
          if (isset($_POST['civilité']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0){
            $cvl = $_POST['civilité'];
            $nm = $_POST['nom'];
            $prnm = $_POST['prenom'];
            $fch = $_FILES['fichier'];    //htmlspecialchars()
            $fich = $fch['name'];
            $rej = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
            // $result = move_uploaded_file($fch["tmp_name"],$fich);
            $extFich = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
            $extAutr = array('pdf');
            if (in_array($extFich, $extAutr)){ // move_uploaded_file($fich['tmp_name'], 'uploads/' . basename($fich['name']));
                echo 'Fichier: '. $fich.'<br>';
            }else {
              echo 'Veuillez introduire le bon fichier !! '. '<br>';
            }
            if (!empty($nm) && !empty($prnm) && !empty($cvl)){
              if(preg_match($rej , $nm) &&  preg_match($rej , $prnm)){
                echo 'Civilité: '.$cvl.'<br>';
                echo 'Nom: '.$nm.'<br>';
                echo 'Prenom: '.$prnm.'<br>';
              } else {
                echo 'Veuillez verifiez votre saisie !!';
              }
            } else {
              echo 'Veuillez remplir les champs !!';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
