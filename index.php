<?php $page=isset($_GET['page'])?$_GET['page']:"login";?>
<!DOCTYPE html> 
<html lang="fr"> 
  <head> 
   	 	<meta charset="utf-8"> 
   	 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     	<title><?php echo $page ?></title> 
     	<link href="css/bootstrap.css" rel="stylesheet"> 
     	<link href="css/bootstrap.min.css" rel="stylesheet"> 
     	<link href="js/bootstrap.js" rel="stylesheet"> 
     	<link href="js/bootstrap.min.js" rel="stylesheet"> 


     	<link href="css/" rel="stylesheet">
   </head> 
<body>
		<div id="page">
			<div class="header">
			<nav class="navbar navbar-dark bg-warning">
				
			</nav>
				<?php if($page!="login"){ ?>
				<a href="index.php">retour</a>
				<?php }?>
			</div>
					
	
				<?php include("pages/".$page.'.php'); ?>
		
		</div>
</body>
</html>