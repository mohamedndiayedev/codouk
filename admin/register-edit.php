<?php 
session_start();
  include('includes/header.php');
  include('includes/navbar.php');
?>

<div class="container-fluid">
        <div class="card shadow mb-4">
        <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editer Infos Clients(es)</h6>
      </div>
<div class="card-body">
<?php

$connection = mysqli_connect("localhost","root","","codou_all_db");
if(isset($_POST['edit_btn'])) 
{
   $id = $_POST['edit_id'];
   $query = "SELECT * FROM register_clients WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
   {

    ?>
    <form action="code.php" method="post">
        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
        <div class="form-group">
                <label>Username</label>
                <input class="form-control" value="<?php echo $row['username'] ?>" type="text" name="edit_username" placeholder="Nom complet *">
        </div>
        <div class="form-group">
                <label>Email</label>
                <input class="form-control" value="<?php echo $row['email'] ?>" type="email" name="edit_email" placeholder="Email *">
         </div>

         <div class="form-group">
                <label>Addresse</label>
                <input class="form-control" value="<?php echo $row['address'] ?>" type="text" name="edit_address" placeholder="Addresse *">
        </div>
        <div class="form-group">
                <label>Phone</label>
                <input class="form-control" value="<?php echo $row['phone'] ?>" type="text" name="edit_phone" placeholder="Téléphone *">
        </div>
        <div class="form-group">
                <label>Poids</label>
                <input class="form-control" value="<?php echo $row['poids'] ?>" type="text" name="edit_poids" placeholder="Poids *">
        </div>
        <div class="form-group">
                <label>Taille</label>
                <input class="form-control" value="<?php echo $row['taille'] ?>" type="text" name="edit_taille" placeholder="Taille *">
        </div>
        <div class="form-group">
                <label>Objectif Poids</label>
                <input class="form-control" value="<?php echo $row['objectif_poids'] ?>" type="text" name="edit_obj_poids" placeholder="Objectif poids (en kg) *">
        </div>

        <div class="form-group">
                <label>Mot de passe</label>
                <input class="form-control" value="<?php echo $row['password'] ?>" type="password" name="edit_password" placeholder="Mot de passe *">
         </div>
         <a href="register.php" class="btn btn-danger">Annuler</a>
         <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
   </form>
      <?php
    }
}

?>

</div>
</div>
</div>
</div>


<?php 
  include('includes/scripts.php');
  include('includes/footer.php');
?>