<?php 
require ('../inc/functions.php');
session_start();
$user= $_SESSION['user'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
	add_blog($_POST['titre'],$_POST['description'],$_POST['date'],$_POST['photo']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajout Blog</title>
	<link href="../css/bootstrap.css" rel="stylesheet"> 
     	<link href="../css/bootstrap.min.css" rel="stylesheet"> 
     	<link href="../js/bootstrap.js" rel="stylesheet"> 
     	<link href="../js/bootstrap.min.js" rel="stylesheet"> 
</head>
<body>

	

	
	<div class="container">
    <div class="row">
	<nav class="navbar navbar-dark">
				
			</nav>
    </div>
    <div class="row">
		<div class="col-md-4"></div>
        <div class="col-md-4">
			<h2>Ajouter blog</h2><br>
			<form action="<?php echo $_SERVER['SCRIPT_NAME']?>"  method="post">
				
					<input type="text" class="form-control" name="titre" placeholder="Titre" ><br>
					<input type="text" class="form-control" name="description" placeholder="Description" ><br>
					<input type="date" class="form-control" name="date" placeholder="Date de publication" ><br>
					<input type="file" name="photo" ><br>
					
					<button type="submit" class="btn btn-warning" >Ajouter</button>
				
			</form>
			<a href="liste_blog.php">Retour</a>
		</div>
		<div class="col-md-4"></div>
		
    </div>

</div>

	
</body>