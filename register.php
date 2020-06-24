<?php 
session_start();
include('includes/header.php');
?>

    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Connexion / Inscription</h1>
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
                        <h2>Connectez-vous !</h2>
                        <div class="separator"></div>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
                       
                        <form method="POST" action="admin/code.php" class="user">

                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="email" placeholder="Votre Email *">
                            </div>

                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password"  placeholder="Mot de passe *">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                    <button type="submit" class="theme-btn btn-style-one" name="clientbtn">Connexion</button>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me"><label for="remember-me">&nbsp; Se rappleler de moi</label>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title">
                        <h2>Inscription gratuite !</h2>
                        <div class="separator"></div>

                          </div>
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form action="client-register.php" method="POST">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                              <input class="form-control" type="text" name="username" placeholder="Nom complet *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input class="form-control check_email" type="email" name="email" placeholder="Email *" required>
                                 <small class="error_email" style="color:green;"></small>
                            </div>

                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input class="form-control" type="address" name="address" placeholder="Addresse *" required>
                            </div>

                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-phone"></span></span>
                                <input class="form-control" type="phone-number" name="phone" placeholder="Numéro Téléphone *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input class="form-control" type="text" name="poids" placeholder="Votre poids (en kg) *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input class="form-control" type="text" name="taille" placeholder="Votre taille (en cm)*" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input class="form-control" type="text" name="objectif_poids" placeholder="Votre objectif poids (kg) *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-lock"></span></span>
                                <input class="form-control" type="password" name="password" placeholder="Mot de passe *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-lock"></span></span>
                                <input class="form-control" type="password" name="confirmpassword" placeholder="Confirmer mot de passe *" required>
                            </div>

                            <div class="clearfix">
                                <div class="form-group pull-left">
                            <button type="submit" name="inscrip_btn" class="theme-btn btn-style-one">Inscription</button>
                                </div>
                                <div class="form-group padd-top-15 pull-right">
                                    * Bienvenue dans votre page Inscription.  
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section> 
</div>


</body>
<?php 
include('includes/footer.php');
include('includes/scripts.php');
?> 
</html>