<?php 
    session_start();
    include '../model/user.php';
    $conn=getConnexion();
    $user=new User($_POST['email'],$_POST['password'],$conn,NULL);
    $u=$user->Logedin($conn,$_POST['email'],$_POST['password']);
    $vide = false;
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        foreach($u as $t){
            $vide=true;
        if ($t['email']==$_POST['email'] && $t['password']==$_POST['password']){
            $_SESSION['l']=$_POST['email'];
            $_SESSION['p']=$_POST['password'];
            $_SESSION['nom']=$t['nom'];
            $_SESSION['panier'] = array();
            $_SESSION['role'] = $t['role'];
            if($t['role'] == 'A'){
                header("location:../../back end/views/dashboard.php");}
            }else{
            header("location:categories.php");
            }
           }        
    if ($vide==false) { 
            header('location:formconnexionuser.php?auth=false');

          }
    }