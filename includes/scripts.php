
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa  fa-angle-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom.js"></script>
<script src="js/sweetalert.min.js"></script>

<?php
  if (isset($_SESSION['status']) && ($_SESSION['status']) !='') 
    {
 ?>
      <script>
      swal({
        title: "<?php echo $_SESSION['status']; ?>",
        //text: "You clicked the button!",
        icon: "<?php echo $_SESSION['status_code']; ?>",
        button: "Cliquez pour continuer!",
        });
     </script>
<?php
      unset($_SESSION['status']);
     }
?>


<script src="js/script.js"></script>


