<?php

$conn = mysqli_connect("localhost","root","","notify");
if($conn){
    echo "";
}else{
    echo mysqli_error($conn);
}

if(isset($_POST['send'])) {

    $name = $_POST['name'];
    $message = $_POST['msg'];
    $date = $_POST['y-m-d h:i:s'];

    $query = "INSERT INTO message (name,message,cr_date) VALUES ('$name','$message','$date')";
    $query_run = mysqli_query($conn,$query);

    if($query_run) {

        $_POST['success'] = "Messeage sent with successfully!";
        header('Location: send_msg.php');
    } else{
        $_POST['status'] = "Messeage not sent!";
        header('Location: send_msg.php');   
    }
}


?>