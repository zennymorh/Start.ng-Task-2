<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    
    echo "<pre>Welcome ".$name.". Your email is " .$email.". The title of your message is " .$title.". And here is your message: " .$message. "</pre>";
}
?>