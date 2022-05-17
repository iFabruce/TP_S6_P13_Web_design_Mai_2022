<?php 
require ('inc/functions.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail=$_POST['mail'];
    $mdp=$_POST['mdp'];
    $erreur='erreur';
    $row=get_member_by_mail($mail);
    // check the match of the passwords
    if($row['motdepasse']!=sha1($mdp))
    {
        header("Location:".$_SERVER['SCRIPT_NAME']."?page=login&erreur=".$erreur);
    }
    if($row['motdepasse']==sha1($mdp))
    {
        session_start();
        $_SESSION['user']=$row['idmembre'];
        replace_v_m($_SESSION['user']);
        header('Location:pages/liste_blog.php');
    }
    exit;
}
?>

<div class="container">
    
    <div class="row">
        

    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>BackOffice</h1><br>
            <form  action="index.php?page=login" method="POST" >
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Login</label>
                <input  type="text" name="mail" placeholder="Login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="mdp" placeholder="mot de passe" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div>

              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
            <br>
            <a href="./pages/accueil_fo.php">Acceder au FrontOffice</a>
        </div>
        <div class="col-md-4"></div>

    </div>

</div>



   
    <?php 
    // if error exists
    $erreur=isset($_GET['erreur'])? $_GET['erreur']: '';
    	if($erreur=='erreur')
    	{?>
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                le mot de passe est incorrecte
            </div>
    <?php } ?>