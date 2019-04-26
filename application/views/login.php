


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Login</h4>

        <form action="<?php echo site_url("/login/login_user/");?>" method="POST">

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