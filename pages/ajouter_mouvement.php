<?php 
require ('../inc/functions.php');
session_start();
$user= $_SESSION['user'];
$list_cate=list_categorie($user);
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
	add_mouvement($_POST['daty'],$_POST['designation'],$_POST['idCategorie'],$_POST['montantEntree'],$_POST['montantSortie']);
    replace_v_mouvement();
    replace_v_m($user);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ajouter-mouvement</title>
	<link href="../css/bootstrap.css" rel="stylesheet"> 
    <link href="../css/" rel="stylesheet">
</head>
<body>
	<div id="page">
        <h1>Ajouter des mouvements</h1>
		<form action="<?php echo $_SERVER['SCRIPT_NAME']?>"  method="post">
        <ul>
            <li><input type="text" name="daty" placeholder="daty"></li>
            <br/>
            <li><input type="text" name="designation"  placeholder="designation"></li>
            <br/>
           <li>
            <select name="idCategorie">
                 <option value="">Categorie</option>
                <?php foreach ($list_cate as $cate) {?>
                <option value="<?php echo $cate['idCategorie']?>"><?php echo $cate['nom']?></option>
                <?php }?>
            </select>
            </li>
            <br/>
            <li><input type="text" name="montantEntree" placeholder="montant entree"></li>
            <br/>
            <li><input type="text" name="montantSortie" placeholder="montant sortie"></li>
            <br/>
            <li><input type="submit" value="ajouter" title="set down" ></li>
        </ul>
    </form>
    <a href="Recap.php">retour</a>
	</div>
</body>