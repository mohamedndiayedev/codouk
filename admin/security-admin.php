<?php
session_start();
include('database/dbconfig-client.php');



if (!$_SESSION['fineclient'])

{
    header('Location: ../register-admin.php');
}

?>