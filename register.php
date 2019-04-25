<?php
require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $birth = filter_input(INPUT_POST, 'birth', FILTER_SANITIZE_STRING);
    $province = filter_input(INPUT_POST, 'province', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $district = filter_input(INPUT_POST, 'district', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $postcode = filter_input(INPUT_POST, 'postcode', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', PASSWORD_DEFAULT);


    // menyiapkan query
    $sql = "INSERT INTO users (name, gender, birth, province, city, district, address, phone, postcode, email, password) 
            VALUES (:name, :gender, :datebirth, :monthbirth, :yearbirth, :province, :city, :district, :address, :phone, :postcode, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":gender" => $gender,
        ":birth" => $birth,
        ":province" => $province,
        ":city" => $city,
        ":district" => $district,
        ":address" => $address,
        ":phone" => $phone,
        ":postcode" => $postcode,
        ":email" => $email
        ":password" => $password,
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Customer</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Your Personal Detail</h4>

        <form action="" method="POST">

            <div class="section colm colm8">
                <label for="name" class="field prepend-icon">
                    <input type="text" name="name" id="name" placeholder="Full name">
                </label>
            </div>

            <div class="section colm colm4">
                <label class="field select">
                    <select name="gender" id="gender">
                        <option value disabled>Select gender</option>
                        <option value="M" selected>Male</option>
                        <option value="F">Female</option>
                    </select>
                </label>
            </div>

            <div class="section colm colm5">
                <label class="field select">
                    <select class="inline" name="province" id="province">
                        <option value="">Select province...</option>
                        <option value="1">Bali</option>
                        <option value="2">Bangka Belitung</option>
                        <option value="3">Banten</option>
                        <option value="4">Bengkulu</option>
                        <option value="5">DI Yogyakarta</option>
                        <option value="6">DKI Jakarta</option>
                        <option value="7">Gorontalo</option>
                        <option value="8">Jambi</option>
                        <option value="9">Jawa Barat</option>
                        <option value="10">Jawa Tengah</option>
                        <option value="11">Jawa Timur</option>
                        <option value="12">Kalimantan Barat</option>
                        <option value="13">Kalimantan Selatan</option>
                        <option value="14">Kalimantan Tengah</option>
                        <option value="15">Kalimantan Timur</option>
                        <option value="16">Kalimantan Utara</option>
                        <option value="17">Kepulauan Riau</option>
                        <option value="18">Lampung</option>
                        <option value="19">Maluku</option>
                        <option value="20">Maluku Utara</option>
                        <option value="21">Nanggroe Aceh Darussalam (NAD)</option>
                        <option value="22">Nusa Tenggara Barat (NTB)</option>
                        <option value="23">Nusa Tenggara Timur (NTT)</option>
                        <option value="24">Papua</option>
                        <option value="25">Papua Barat</option>
                        <option value="26">Riau</option>
                        <option value="27">Sulawesi Barat</option>
                        <option value="28">Sulawesi Selatan</option>
                        <option value="29">Sulawesi Tengah</option>
                        <option value="30">Sulawesi Tenggara</option>
                        <option value="31">Sulawesi Utara</option>
                        <option value="32">Sumatera Barat</option>
                        <option value="33">Sumatera Selatan</option>
                        <option value="34">Sumatera Utara</option>
                    </select>
                </label>
            </div>
            
            <div class="section colm colm5">
                <label for="city" class="field prepend-icon">
                    <input type="text" name="city" id="city" placeholder="City">
                </label>
            </div>

            <div class="section colm colm5">
                <label for="district" class="field prepend-icon">
                    <input type="text" name="district" id="district" placeholder="District">
                </label>
            </div>         

            <div class="section colm colm8">
                <label for="address" class="field prepend-icon">
                    <textarea name="address" id="address" placeholder="Address"></textarea>
                </label>
            </div>   

            <div class="section colm colm6">
                <label for="phone" class="field prepend-icon">
                    <input type="text" name="phone" id="phone" placeholder="Phone">
                </label>
            </div>

            <div class="section colm colm4">
                <label for="postcode" class="field prepend-icon">
                    <input type="text" name="postcode" id="postcode" placeholder="Postcode">
                </label>
            </div>

            <h4>Login Information</h4>

            <div class="section colm colm7">
                <label for="email" class="field prepend-icon">
                    <input type="text" name="email" id="email" placeholder="Email">
                </label>
            </div>

            <div class="section colm colm7">
                <label for="password" class="field prepend-icon">
                    <input type="password" name="password" id="password" placeholder="Password">
                </label>
            </div>

            <div class="section colm colm7">
                <input type="checkbox" id="agree" value="Y" checked>
                "I Agree to the Terms & Conditions"
            </div>

            <div class="section">
            <button type="submit" class="btn btn-success btn-black" id="btn_register">REGISTER</button>
            </div>

        </form>
            
        </div>
    </div>
</div>

</body>
</html>