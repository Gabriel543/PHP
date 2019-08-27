<?php 

If($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = filter_input(INPUT_POST, "txtEmail");

    echo "$email";
}else{
    header("location: index.php");
}
