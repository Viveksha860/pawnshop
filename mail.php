<?php
include "./include/connect.php";


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);

    if($_POST['name'] != '' && $_POST['email'] != '' && $_POST['subject'] != '' && $_POST['message'] != ''){
        $result = $conn->query("INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES (NULL, '$name', '$email', '$subject', '$message', CURRENT_TIMESTAMP);");
        if($result){
            echo "Inserted Sucessfully";
        }else{
            echo "something went wrong!!".$conn->error;

        }
    }else{
        echo "Data Missing";
    }
 
}else{
    echo "Invalid request";
}

exit;

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "example@gmail.com";

// mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>



';


?>