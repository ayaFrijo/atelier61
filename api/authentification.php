<?php
session_start();
$id="mystore";
$password="2026";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_saisie=$_POST['id'];
    $password_saisie=$_POST['password'];
    
    if($id===$id_saisie && $password===$password_saisie){
        $_SESSION['user']=$id_saisie;
        $_SESSION['logged_in']=true;
        
        if(isset($_POST['remember'])){
            setcookie('user_id', $id_saisie, time() + 86400 * 30, "/");
            setcookie('user_pass', $password_saisie, time() + 86400 * 30, "/");
        } else {
            setcookie('user_id', '', time() - 3600, "/");
            setcookie('user_pass', '', time() - 3600, "/");
        }
        
        header('Location: store.php');
        exit();
    }
    else{
        $_SESSION['error'] = 'ID ou MOT DE PASSE incorrecte!!';
        header('location: index.php');
        exit();
    }
}
?>