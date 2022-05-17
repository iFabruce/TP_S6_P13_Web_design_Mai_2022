<?php 
	require ('../inc/functions.php');
	$idCate=$_GET['idCategorie']; 
	$list=detail_categorie($idCate);
	$mois=$_GET['mois']; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail-par-categorie</title>
	<link href="../css/bootstrap.css" rel="stylesheet"> 
    <link href="../css/" rel="stylesheet">
</head>
<body>
	<div id="page">
		<h1>Detail</h1>
		<table width="600">
				<tr>
					<th>idMvt</th>
					<th>daty</th>
					<th>idCategorie</th>
					<th>designation</th>
					<th>montantEntree</th>
					<th>montantSortie</th>
				</tr>
				<?php foreach ($list as $detail) {?>
					<tr>
						<td><?php echo $detail['idMvt']?></td>
						<td><?php echo $detail['daty']?></td>
						<td><?php echo $detail['idCategorie']?></td>
						<td><?php echo $detail['designation']?></td>
						<td><?php echo $detail['montantEntree']?></td>
						<td><?php echo $detail['montantSortie']?></td>
					</tr>
				<?php }?>
			</table>
			<a href="Detail_mois.php?mois=<?php echo $mois?>">retour</a>
	</div>
</body>