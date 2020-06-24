<?php 
session_start();
include('includes/header.php');
include('includes/scripts.php');
?>

    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Connexion Administrateur</h1>
            <h3 class="styled-font">Nous offrons une expérience diet de qualité.</h3>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="breadcrumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index">Home</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title">
                        <h2>Connectez-vous Coach !</h2>
                        <div class="separator"></div>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
                       
                            <?php
                             if (isset($_SESSION['status']) && ($_SESSION['status']) !='') 
                                {
                                  
                                  echo '<h2 class="bg-danger"> '.$_SESSION['status'].' </h2>';
                                  unset($_SESSION['status']);
                                }
                            ?>
                        <form method="POST" action="admin/reg-admin.php" class="user">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="email"  placeholder="Votre Email *">
                            </div>

                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-lock"></span></span>
                                <input type="password" name="password"  placeholder="Mot de passe *">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                    <button type="submit" class="theme-btn btn-style-one" name="loginbtn">Connexion</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                
        </div>
    </section> 
</div>


</body>
<?php 
include('includes/footer.php');
?> 
</html>