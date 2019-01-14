<?php

    $username = "";
    $email = "";
    $error = array();

    //konekcija s database-om
    $db = mysqli_connect('localhost', 'root', '', 'antekovacevic');

    //ako se klikne "register"
    if (isset($_POST['register'])) {
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password_1 = mysql_real_escape_string($_POST['password_1']);
        $password_2 = mysql_real_escape_string($_POST['password_2']);


    }

?>