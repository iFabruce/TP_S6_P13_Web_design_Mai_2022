<?php 
	
	include('connection.php');
		function getAllBlogs()
		{
			$sql = "select * from blog";
			$list_req = mysqli_query(dbconnect(),$sql);
			$result = array();
		while ($member = mysqli_fetch_array($list_req)) {
			$result[] = $member;
		}
			return $result;
			mysqli_free_result($list_req);
		}
	
		function getOneBlog($id)
		{
			$sql = "select * from blog where id =".$id;
			$req = mysqli_query(dbconnect(),$sql);
			$result = mysqli_fetch_assoc($req);
			return $result;
			mysqli_free_result($req);
		}
	function get_member_by_mail($mail)
	{
		$sql = "select * from membres where email='%s'";
		$sql = sprintf($sql,$mail);
		$member_req = mysqli_query(dbconnect(),$sql);
		$result = mysqli_fetch_assoc($member_req);
		mysqli_free_result($member_req);
		return $result;
		mysqli_free_result($member_req);
	}
	function get_member_by_id($id)
	{
		$sql = "select * from membres where idmembre='%d'";
		$sql = sprintf($sql,$id);
		$member_req = mysqli_query(dbconnect(),$sql);
		$result = mysqli_fetch_assoc($member_req);
		mysqli_free_result($member_req);
		return $result;
		mysqli_free_result($member_req);
	}
	function get_member_by_name($name)
	{
		$sql="select idmembre from membres where nom='%s'";
		$sql = sprintf($sql,$name);
		$member_req = mysqli_query(dbconnect(),$sql);
		$result = mysqli_fetch_assoc($member_req);
		mysqli_free_result($member_req);
		return $result;
		mysqli_free_result($member_req);
	}
	function list_members()
	{
		$sql = "select * from membres";
		$list_req = mysqli_query(dbconnect(),$sql);
		$result = array();
    while ($member = mysqli_fetch_array($list_req)) {
        $result[] = $member;
    }
		return $result;
		mysqli_free_result($list_req);
	}
	function list_members_without_user($user)
	{
		$sql="select * from membres where idmembre!=$user";
		$list_req = mysqli_query(dbconnect(),$sql);
		$result = array();
    while ($member = mysqli_fetch_array($list_req)) {
        $result[] = $member;
    }
		return $result;
		mysqli_free_result($list_req);
	}

	function insert_members($nom,$mail,$date,$mdp)
	{
		$sql = "insert into membres (nom,email,datenaissance,motdepasse) values('%s','%s','%s',sha1('%s'))";
		$sql = sprintf($sql,$nom,$mail,$date,$mdp);
		$insert_req = mysqli_query(dbconnect(),$sql);
		// mysqli_free_result($insert_req);
	}
	function delete_blog($id)
	{
		$sql = "delete from blog where id=%d";
		$sql = sprintf($sql,$id);
		
		$mdp_req = mysqli_query(dbconnect(),$sql);
		
	}
	function modify_mdp($mdp,$mail)
	{
		$sql = "update membres set motdepasse=sha1('%s') where email='%s'";
		$sql = sprintf($sql,$mdp,$mail);
		$mdp_req = mysqli_query(dbconnect(),$sql);
		mysqli_free_result($mdp_req);
	}
	function list_recap(){
		$sql="select * from v_recap";
		$recap_req = mysqli_query(dbconnect(),$sql);
		$result = array();
	    while ($member = mysqli_fetch_array($recap_req)) {
	        $result[] = $member;
	    }
		return $result;
		mysqli_free_result($recap_req);
	}
	function detail_mois($mois){
		$sql="select * from v_m join gerercategorie c on v_m.nom=c.nom where mois=$mois";
		$req = mysqli_query(dbconnect(),$sql);
		$result = array();
	    while ($member = mysqli_fetch_array($req)) {
	        $result[] = $member;
	    }
		return $result;
		mysqli_free_result($req);
	}
	function add_blog($titre,$description,$date,$photo){
		$sql="insert into blog values(null,'%s','%s','%s','%s')";
		$sql = sprintf($sql,$titre,$description,$date,$photo);
		$insert_req = mysqli_query(dbconnect(),$sql);
	}
	function list_categorie($idmembre){
		$sql="select * from gerercategorie where idmembre=$idmembre";
		$req = mysqli_query(dbconnect(),$sql);
		$result = array();
	    while ($member = mysqli_fetch_array($req)) {
	        $result[] = $member;
	    }
		return $result;
		mysqli_free_result($req);
	}
	function add_mouvement($daty,$designation,$idCategorie,$montantEntree,$montantSortie){
		$sql="insert into mouvement (daty,designation,idCategorie,montantEntree,montantSortie) values('%s','%s','%d','%d','%d')";
		$sql = sprintf($sql,$daty,$designation,$idCategorie,$montantEntree,$montantSortie);
		$insert_req = mysqli_query(dbconnect(),$sql);
	}
	function detail_categorie($idCate){
		$sql="select * from v_mouvement where idCategorie=$idCate";
		$req = mysqli_query(dbconnect(),$sql);
		$result = array();
	    while ($member = mysqli_fetch_array($req)) {
	        $result[] = $member;
	    }
		return $result;
		mysqli_free_result($req);
	}
	function replace_v_m($user){
		$sql="create or replace view v_m as select month(daty) as mois, year(daty) as annee, nom, montantEntree, montantSortie from Mouvement m join gerercategorie c on m.idCategorie=c.idCategorie where idmembre=$user order by month(daty) asc";
		$insert_req = mysqli_query(dbconnect(),$sql);
	}
	function replace_v_mouvement(){
		$sql="create or replace view v_mouvement as select idMvt,daty,designation,montantEntree ,montantSortie,m.idCategorie,nom from Mouvement m join gerercategorie c on m.idCategorie=c.idCategorie;";
		$insert_req = mysqli_query(dbconnect(),$sql);
	}
?>