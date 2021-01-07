<?php
include_once "../Controller/fournisseurC.php";

if(isset($_POST['id']))
{

	$fournisseur1C=new fournisseurC();
    if(!empty($_POST['id '])&& !empty($_POST['login']) && !empty($_POST['mail'])&& !empty($_POST['password']) && !empty($_POST['user']) )
    

    {
		$fournisseur1=new fournisseur($_POST['login'],$_POST['mail'],$_POST['password'],$_POST['user']);
		$fournisseur1C->modifierfournisseur($fournisseur1,$id);
      
    
       
    
        header('Location: ../../tables-data.php'); 
    }
    
}
else {
	echo 'verifier le champs';
}





?>