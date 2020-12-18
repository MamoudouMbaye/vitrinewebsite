  <html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>
<body>
<title>Inscription / Connexion</title>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">M2L</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Revenir à l'accueil</a></li>

    </ul>
  </div>
</nav>
</head>

<?php
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=m2l", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (Exception $e)
{
  die('Erreur :' . $e->getMessage());
}
if(isset($_POST['inscription'])){
  if(!empty($_POST['Nom']) && !empty($_POST['Prénom']) && !empty($_POST['Mail']) && !empty($_POST['Mdp']) && !empty($_POST['Mdp2']))
  {
    if($_POST['Mdp'] == $_POST['Mdp2'])
    {
    $Mdp = sha1($_POST['Mdp']);
    $insertsql = $bdd->prepare('INSERT INTO utilisateur(NomUtil,PrenomUtil,AdresseEmailUtil,MdpUtil) VALUES(?,?,?,?)');
    $insertsql->execute(array($_POST['Nom'], $_POST['Prénom'], $_POST['Mail'], $Mdp));

      if($insertsql->rowCount() == 1)
      {
        echo "Inscription effectuée";
      }
    }else{
  echo "Les mots de passe ne correspondent pas";
}
}
else{
  echo "Veuillez remplir tous les champs";
}
}
if(isset($_POST['coenvoyer'])){
if(!empty($_POST['comail']) && !empty($_POST['comdp'])){
$Mdp2 = $_POST['comdp'];
$cosql = $bdd->prepare('SELECT * FROM utilisateur WHERE AdresseEmailUtil = ? AND MdpUtil = ?');
echo $_POST['comail']." ". $Mdp2;

$cosql->execute(array($_POST['comail'], $Mdp2));
echo $cosql->rowCount();
if($cosql->rowCount() == 1){
  echo "Connexion réussie";
  }

  else {
    echo "Identifiants incorrects";
  }
}

  else {
    echo "Veuillez remplir tous les champs présents";
  }
}



?>

<h2>Inscription</h2>
<form action="" method="POST">
<p><input type="text" name="Nom" placeholder="Nom"></p>
<p><input type="text" name="Prénom" placeholder="Prénom"></p>
<p><input type="email" name="Mail" placeholder="Mail"></p>
<p><input type="password" name="Mdp" placeholder="Mot de passe"></p>
<p><input type="password" name="Mdp2" placeholder="Confirmez le mot de passe"></p>
<input type="submit" name="inscription" placeholder="S'inscrire">
</form>

<h2>Connexion</h2>
<form action="" method="POST">
<p><input type="email" name="comail" placeholder="Mail"></p>
<p><input type="password" name="comdp" placeholder="Mot de passe"></p>
<input type="submit" name="coenvoyer" placeholder="Se connecter">
</form>
