
<?php
    $nume =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];

    // Database connection
    $conn = mysqli_connect('localhost','root','','test');

    $sql = mysqli_query($conn, "insert into contacts(nume, email, subiect, mesaj) values('$nume', '$email', '$subject', '$message')");

    if($sql) {
        echo "Inserted";

    } else {
        echo "Error";
    }
?>










