<?php 
    session_start();
    require_once '../config.php';

    if(isset($_POST['mail']) && isset($_POST['password']))
    {
        $mail = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);
        var_dump($mail);
        var_dump($password);

        $check = $bdd->prepare('SELECT login, mail, password FROM fournisseur WHERE mail = ?');
        $check->execute(array($mail));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
                $password = hash('sha256', $password);
                if($data['password'] === $password)
                {
                    $_SESSION['user'] = $data['mail'];
                    header('Location: landing.php');
                    die();
                }else{ header('Location:comptefournisseur.php?login_err=password'); die(); }
            }else{ header('Location:comptefournisseur.php?login_err=mail'); die(); }
        }else{ header('Location:comptefournisseur.php?login_err=already'); die(); }
    }
    ?>