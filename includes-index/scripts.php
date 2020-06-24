
<script src="js/custom.js" defer></script>
<script src="js/jquery.js" defer></script> 
<script src="js/bootstrap.min.js" defer></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js" defer></script>
<script src="js/revolution.min.js" defer></script>
<script src="js/jquery.fancybox.pack.js" defer></script>
<script src="js/jquery.fancybox-media.js" defer></script>
<script src="js/owl.js" defer></script>
<script src="js/wow.js" defer></script>
<script src="js/script.js" defer></script>
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



</body>

</html>