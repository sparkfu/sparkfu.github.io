<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyMember</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <h1>Thanks for using our side!</h1>
    <h3>You want to be a member?</h3>
    <h2>NOT DONE YET. IN PROGRESS</h2>

    <input type="text" name="username" placeholder="Your Username">
    <button class="button">-Be a member-</button>


</body>  
</html>

<?php
    extract($_REQUEST);
    $file = fopen("form.txt" , "a");

    fwrite($file, "name: ");
    fwrite($file, $username . "\n")

?>