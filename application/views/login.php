<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE name=:name OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":email" => $name
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman utama

        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Login</h4>

        <form action="" method="POST">

            <div class="section colm colm7">
                <label for="email" class="field prepend-icon">
                    <input type="text" name="email" id="email" placeholder="Email/Full Name">
                </label>
            </div>


            <div class="section colm colm7">
                <label for="password" class="field prepend-icon"> 
                    <input type="password" name="password" id="password" placeholder="Password">
                </label>
            </div>

            <div class="section">
                <button type="submit" class="button" id="btn_login">LOGIN</button>
            </div>

        </form>
            
        </div>

    </div>
</div>
    
</body>
</html>