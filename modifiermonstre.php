<?php
if (isset($_GET['id'])) {
	$id = htmlspecialchars($_GET['id']);
    $bdd = new PDO('mysql:host=localhost;dbname=monsterleague','root','');
    if(isset($_POST['submit'])){
		$name=($_POST['name']);
		$life=($_POST['life']);
		$strength=($_POST['strength']);
        $modif=$bdd->prepare('UPDATE monsters SET name=:name, life=:life, strength=:strength  where id=:id');
        $modif->bindValue(':id',$id, PDO::PARAM_STR);
        $modif->bindValue(':name',$name, PDO::PARAM_STR);
        $modif->bindValue(':life',$life, PDO::PARAM_STR);
		$modif->bindValue(':strength',$strength, PDO::PARAM_STR);
    	$modif->execute();
	}
}
?>
  
<!DOCTYPE html>
  	<html>
  		<head>
  			<title>Modification d'un monstre</title>
			<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  		</head>
  		<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="index.php">Monsters League</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
					</ul>

					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
			
			<div class="jumbotron">	
				<h1 class="display-4">Modifie ton monstre !</h1>
				<p class="lead">Modifie les monstres comme tu le veux. Attention ! tous les champs doivent être rempli, si tu ne veux pas changer une valeur, écrit la même valeur de base.</p>
			</div>
			<form class=" form-control" method="post">
				<br>
				- Modifier name : <input type="text" name="name" placeholder="Entrer un nom"><br><br>
				- Modifier life : <input type="text" name="life" placeholder="Entrer la vie du monstre"><br><br>
				- Modifier strength : <input type="text" name="strength" placeholder="Entrer la force du monstre"><br><br>
				<input class="btn btn-md btn-danger center-block" type="submit" name="submit" value="Modifier"/>
				<input class="btn btn-md btn-danger center-block" type="reset" value="Réinitialiser" />
				<a href="index.php" target="_self"><input class="btn btn-md btn-danger center-block" type="button" value="Retour accueil" /></a>
			</form>
    	</body>
	</html>
