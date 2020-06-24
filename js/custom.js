$(document).ready(function () {
    

    $('.check_email').keyup(function (e) { 

        //alert('Salut, je suis Mohamed NDIAYE Dev, je suis en maintenance validation champ!')

       var email = $('.check_email').val();
       //alert(email);
       $.ajax({
           type: "POST",
           url: "client-register.php",
           data: {
               "check_submit_btn":1,
               "email_id":email,
           },
           success: function (response) {
               //alert(response);
               $('.error_email').text(response);
           }
       });
        
    });
});