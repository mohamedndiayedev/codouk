<?php

include('security-client.php');
$connection = mysqli_connect("nnmeqdrilkem9ked.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","zpya0in3doc87txd","w1h5pe97xwnoggrr","s6tm8jesl338iq5q");

if(isset($_POST['registerbtn'])) 
{
   $username = $_POST['username'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $poids = $_POST['poids'];
   $taille = $_POST['taille'];
   $objectif_poids = $_POST['objectif_poids'];
   $password = $_POST['password'];
   $confirmpwd = $_POST['confirmpassword'];

   if ($password === $confirmpwd) {
    $query = "INSERT INTO register_clients(username,email,address,phone,poids,taille,objectif_poids,password) 
    VALUES('$username','$email','$address','$phone','$poids','$taille','$objectif_poids','$password') ";
    $query_run = mysqli_query($connection,$query);
 
    if ($query_run) {
        $_SESSION['success'] = "Client ajouté(e) avec succès!";
        header('Location: register.php');
    }else {
     $_SESSION['status'] = "Client non ajouté(e)! Verifiez les infos.";
     header('Location: register.php');
    }
 
   } else {
    $_SESSION['status'] = "Mots de passe différents!";
    header('Location: register.php');
   }
}
/*Code helping to update data from the Database */


if(isset($_POST['updatebtn']))
{
   $id = $_POST['edit_id'];
   $username = $_POST['edit_username'];
   $email = $_POST['edit_email'];
   $address = $_POST['edit_address'];
   $phone = $_POST['edit_phone'];
   $poids = $_POST['edit_poids'];
   $taille = $_POST['edit_taille'];
   $objectif_poids = $_POST['edit_obj_poids'];
   $password = $_POST['edit_password'];

   $query = "UPDATE register_clients SET username='$username', email='$email', address='$address', 
   phone='$phone', poids='$poids', taille='$taille', objectif_poids='$objectif_poids', password='$password' WHERE id='$id'";
   $query_run = mysqli_query($connection, $query);

   if ($query_run)
    {
       $_SESSION['success'] = "Vos infos sont mis à jour!";
        header('Location: register.php');

   } else {
    $_SESSION['status'] = "Infos pas à jour!";
   }
}
/*Code helping to delete data from the Database */

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM register_clients WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

   if($query_run)
   {
    $_SESSION['success'] = "Client(e) supprimé(e) avec succès! ";
    header('Location: register.php');
   }else 
   {
    $_SESSION['status'] = "Client(e) non supprimé(e)!";
    header('Location: register.php');
   }
}


if(isset($_POST['clientbtn'])) {
  
    $email_log = $_POST['email'];
    $password_log = $_POST['password'];

    $_SESSION['status'] = "Bienvenue chez Codou k!";
    $_SESSION['status_code'] ="success";
    $query = "SELECT * FROM register_clients WHERE email='$email_log' AND password='$password_log' ";
    $query_run = mysqli_query($connection, $query);
    
    
   if (mysqli_fetch_array($query_run))
   {
    $_SESSION['accesscheck'] = $email_log;
    header('Location: admin/client-side/index.html');
   }
   else 
   {
    $_SESSION['status'] = "Votre email et/ou mot de passe est invalide.";
    $_SESSION['status_code'] ="error";
    header('Location: ../register.php');
   }
}


?> 
