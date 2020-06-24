<?php 
include('security-admin.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Admin Infos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"&times;</span>
        </button>
      </div>

    <form action="reg-admin.php" method="POST">
        <div class="modal-body">

        <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="user" placeholder="Nom complet  *">
        </div>

        <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" placeholder="email *">
         </div>

         <div class="form-group">
                <label>Adresse</label>
                <input class="form-control" type="text" name="address" placeholder="Adresse *">
         </div>
         <div class="form-group">
                <label>Numéro Téléphone</label>
                <input class="form-control" type="text" name="phone" placeholder="Numéro Téléphone *">
         </div>
         <div class="form-group">
                <label>Mot de passe</label>
                <input class="form-control" type="password" name="password" placeholder="Mot de passe *">
         </div>

         <div class="form-group">
                <label>Confirmer mot de passe</label>
                <input class="form-control" type="password" name="confirmpassword" placeholder="confirmer mot de passe *">
         </div> 

        <input type="hidden" name="usertype" value="admin"></input>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" name="register_btn" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>

    </div>
   </div>
</div>

      <div class="container-fluid">

      <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Infos Administrateur
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                  Ajouter Admin
              </button>
        </h6>
     </div>

  <div class="card-body">

      <div class="table-responsive">

       <?php 
           $conn = mysqli_connect("localhost","root","","codou_all_db");
           $query = "SELECT * FROM register_admin";
           $query_run = mysqli_query ($conn, $query);
       ?>
           <table class="table table-bordered" id="dataTable" while="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>N* Client</th>
                            <th>Nom Complet</th>
                            <th>Email</th>
                            <th>Addresse</th>
                            <th>Téléphone</th>
                            <th>Mot de passe</th>
                            <th>Type Utilisateur</th>
                        </tr>
                    </thead>

                    <tbody>
        <?php 
        
        if(mysqli_num_rows($query_run) > 0){
           
          while ($row = mysqli_fetch_assoc($query_run)) 
          {
            ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['usertype']; ?></td>
                            <td>
                              <form action="admin-edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>"> 
                                <button type="submit" name="edit_btn" class="btn btn-success">Modifier</button>
                             </form>
                            </td>
                            <td>
                             <form action="reg-admin.php" method="post"> 
                             <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>"> 
                        <button type="submit" name="delete_btn" class="btn btn-danger" >Supprimer</button>
                              </form>
                            </td>
                    </tr>
     <?php
        }
      } else {echo "Pas d'Admin disponible!";
      }
      ?>
                    </tbody>
           </table>
         </div>

     </div>
<?php 
  include('includes/scripts.php');
  include('includes/footer.php');
?>
   </div>

</div>



