<?php

  include_once "conection.php";

    if (isset($_POST["simpan"])) {
        $name = htmlspecialchars($_POST['name']) ;
        $email = htmlspecialchars($_POST['email']) ;
        $password = ($_POST['password']) ;
        $address = htmlspecialchars($_POST['address']) ;
        $no_hp = htmlspecialchars($_POST['no_hp']) ;
        $gender = htmlspecialchars($_POST['gender']) ;
        
        $pwd = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (name, email, password, address, no_hp, gender) VALUES ('$name', '$email', '$pwd', '$address', '$no_hp', '$gender')";
    }
    
    if(mysqli_query($conn, $query )) {
        echo "register berhasil";
    }else {
        echo "registerr gagall😜 ";

    }
    
?>