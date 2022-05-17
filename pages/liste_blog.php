<?php
require ('../inc/functions.php');
	session_start();

	$blogs=getAllBlogs();
	if(isset($_GET['delete'])){
	
		delete_blog($_GET['id']);
		header("Location:".$_SERVER['SCRIPT_NAME']."");	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liste Blog</title>
	<link href="../css/bootstrap.css" rel="stylesheet"> 
     	<link href="../css/bootstrap.min.css" rel="stylesheet"> 
     	<link href="../js/bootstrap.js" rel="stylesheet"> 
     	<link href="../js/bootstrap.min.js" rel="stylesheet"> 
</head>
<body>
<div class="container">
    <div class="row">
	
    </div>
    <div class="row">
        <div class="col-md-12">
		<h2>Liste blog</h2><br>
				<table class="table">
		<thead class="table-dark">
			<th scope="col">Titre</th>
			<th scope="col">Description</th>
			<th scope="col">Date</th>
			<th scope="col"></th>

		</thead>
		<tbody>
		<?php foreach ($blogs as $blog) {?>
					<tr>
						<td><?php echo $blog['titre']?></td>
						<td><?php echo $blog['description']?></td>
						<td><?php echo $blog['date']?></td>
						<td><a href="<?php echo $_SERVER['SCRIPT_NAME']?>?delete=0&id=<?php echo $blog['id']?>">Supprimer</a> </td>

						
					</tr>
				<?php }?>
		</tbody>
		</table>
			<a href="ajout_blog.php">Ajouter blog</a>
		</div>
		
    </div>

</div>
</body>