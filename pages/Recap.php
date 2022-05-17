<?php 
require ('../inc/functions.php');
	session_start();
	$user= $_SESSION['user'];
	$list=list_recap();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>recap</title>
	<link href="../css/bootstrap.css" rel="stylesheet"> 
    <link href="../css/" rel="stylesheet">
</head>
<body>
	<div id="page">
		<div id="header">
			<nav class="navbar navbar-default">
				  <div class="container-fluid">
				      	<ul class="nav navbar-nav navbar-right">
					        <li class="dropdown">
					          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span><span class="caret"></span></a>
					          	<ul class="dropdown-menu">
						            <li><a href="ajouter_categorie.php">ajouter une categorie</a></li>
									<li><a href="ajouter_mouvement.php">ajouter un mouvement</a></li>
						            <li role="separator" class="divider"></li>
									<a href="logout.php" title="logout">
										<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
										<small>Log out</small>
									</a>
				          		</ul>
				        	</li>
				      	</ul>
				    </div>
			</nav>
  		</div>
		<h1>Recap</h1>
		<div class="content">
			<table width="600">
				<tr>
					<th>Mois</th>
					<th>Annee</th>
					<th>MontantEntrerTotal</th>
					<th>MontantSortieTotal</th>
					<th>Reste</th>
					<th> </th>
				</tr>
				<?php foreach ($list as $detail) {?>
					<tr>
						<td><?php echo $detail['mois']?></td>
						<td><?php echo $detail['annee']?></td>
						<td><?php echo $detail['montantEntrerTotal']?></td>
						<td><?php echo $detail['montantSortieTotal']?></td>
						<td><?php echo $detail['montantEntrerTotal']-$detail['montantSortieTotal']?></td>
						<td> <a href="detail_mois.php?mois=<?php echo $detail['mois']?>">detail</a
							> </td>
					</tr>
				<?php }?>
			</table>
			</div>
	</div>
	<script src="../js/jquery.js"></script> 
    <script src="../js/bootstrap.min.js"></script> 
</body>