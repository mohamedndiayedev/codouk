<?php

session_start();
$connection = mysqli_connect("localhost","root","","codou_all_db");

if(isset($_POST['check_submit_btn']))
{
    $email = $_POST['email_id'];
    $email_query = "SELECT * FROM register_clients WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);

   if (mysqli_num_rows($email_query_run) > 0)
   {
      echo "Cet email entré existe déjà! Text-From: Mohamed NDIAYE, Administrateur!";
   }else 
   {
       echo "Votre email est disponible!";
   }
}

if(isset($_POST['inscrip_btn'])) 
{
   $username = $_POST['username'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $password = $_POST['password'];
   $confirmpwd = $_POST['confirmpassword'];
   $phone = $_POST['phone'];
   $poids = $_POST['poids'];
   $taille = $_POST['taille'];
   $objectif_poids = $_POST['objectif_poids'];
   $email_query = "SELECT * FROM register_clients WHERE email='$email'";
   $email_query_run = mysqli_query($connection, $email_query);

   if (mysqli_num_rows($email_query_run) > 0)
   {
    $_SESSION['status'] = "Cet email entré existe déjà! Essayez un autre.";
    $_SESSION['status_code'] = "error";
    header('Location: register.php');
   }else 
   {

   if ($password === $confirmpwd) 
   {

    $query = "INSERT INTO register_clients (username,email,address,phone,password,poids,taille,objectif_poids) 
    VALUES('$username','$email','$address','$phone','$password',$poids,$taille,$objectif_poids)";
    $query_run = mysqli_query($connection,$query);
 
    if ($query_run) 
    {
        $_SESSION['status'] = "Vous êtes inscrit(e) avec succès!";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else 
    {
     $_SESSION['status'] = "Vous n'êtes pas inscrit(e), verifiez si vos infos sont correctes!";
     $_SESSION['status_code'] = "error";
     header('Location: register.php');
    }

   } 
   else 
   {
    $_SESSION['status'] = "Vos mots de passe ne sont pas identiques!";
    $_SESSION['status_code'] = "warning";
    header('Location: register.php');
   }

}
}

?>