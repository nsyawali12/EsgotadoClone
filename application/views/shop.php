<!DOCTYPE html>
<html>
  <head>

    <!-- CSS Bootstraps -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Pure CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/");?>shop.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/");?>footer.css">

  </head>

  <body>

  <?php $this->load->view("navbar")?>

    <section> 
          
      <img src="<?php echo base_url("assets/image/shop/");?>black-friday-fashion-friends-1345082.jpg" style="width: 100%; height: 400px;">

      <h2 class="jud-sec"> All Categories </h2>
      <div style="clear:both;"> </div>
    </section>

    <section class="shop-sec">
      <div class="container cont-pro">
        <div class="row">
          <div class="col-sm-3">
            <img class="product" src="<?php echo base_url("assets/image/tas/");?>tas1.jpg" >
            <p class="nama-produk"> LIMITO EDICIO MOCHILO ONZO TERRACOTTA </p>
            <p class="harga-produk"> IDR 200.000 </p>
          </div>

          <div class="col-sm-3">
            <img class="product" src="<?php echo base_url("assets/image/tas/");?>tas2.jpg">
            <p class="nama-produk"> MOCHILO DEZOITO BLACK </p>
            <p class="harga-produk"> IDR 275.000 </p>
          </div>

          <div class="col-sm-3">
            <img  class="product" src="<?php echo base_url("assets/image/tas/");?>tas3.jpg">
            <p class="nama-produk" >FAIXO OITAVO GREEN ECO</p>
            <p class="harga-produk"> IDR 375.000 </p>
          </div>

          <div class="col-sm-3">
            <img class="product" src="<?php echo base_url("assets/image/tas/");?>tas4.jpg">
            <p class="nama-produk" > MOCHILO DOZO GREY </p>
            <p class="harga-produk"> IDR 195.000 </p>
          </div>
        </div>
      </div>

      <div class="container cont-pro">
        <div class="row">
          <div class="col-sm-3"> 
            <img class="product" src="<?php echo base_url("assets/image/tas/");?>tas5.jpg">
            <p class="nama-produk" > VINCO SEGUNDO FOLDABLE BAG </p>
            <p class="harga-produk"> IDR 150.000 </p>
          </div>
          <div class="col-sm-3"> 
            <img class="product" src="<?php echo base_url("assets/image/tas/");?>tas6.jpg">
            <p class="nama-produk"> ZANANO SEGUNDO WHITE </p>
            <p class="harga-produk"> IDR 265.000 </p>
          </div>
          <div class="col-sm-3">
              <img class="product" src="<?php echo base_url("assets/image/shirt/")?>shirt1.jpg">
              <p class="nama-produk"> LONGSLEEVE CREW NECK DARK GREY MEN</p>
              <p class="harga-produk"> IDR 85.000 </p>
          </div>
          <div class="col-sm-3"> 
              <img class="product" src="<?php echo base_url("assets/image/shirt/")?>shirt2.jpg">
              <p class="nama-produk"> LONGSLEEVE CREW NECK BLUE WOMEN </p>
              <p class="harga-produk"> IDR 85.000 </p>
          </div>
        </div>
      </div>

      <div class="container cont-pro">
        <div class="row">
          <div class="col-sm-3">
            <img class="product" src="<?php echo base_url("assets/image/shirt/")?>shirt3.jpg">
            <p class="nama-produk"> BASIC V-NECK DARK GREY MEN </p>
            <p class="harga-produk"> IDR 75.000 </p>
          </div>
          <div class="col-sm-3">
            <img class="product" src="<?php echo base_url("assets/image/shirt/")?>shirt4.jpg">
            <p class="nama-produk"> LONGSLEEVE CREW NECK RED MEN </p>
            <p class="harga-produk"> IDR 85.000 </p>
          </div>
          <div class="col-sm-3">
            <img class="product" src="<?php echo base_url("assets/image/shoes/");?>sepatu1.jpg">
            <p class="nama-produk"> BASNEAK RED </p>
            <p class="harga-produk"> IDR 250.000 </p>
          </div>
          <div class="col-sm-3">
            <img class="product" src="<?php echo base_url("assets/image/shoes/");?>sepatu2.jpg">
            <p class="nama-produk"> BASNEAK GREY </p>
            <p class="harga-produk"> IDR 250.000 </p>
          </div>
        </div>
      </div>

      <div class="container cont-pro">
        <div class="row">
          <div class="col-sm-3">
            <img class="product" src="<?php echo base_url("assets/image/shoes/");?>sepatu3.jpg">
            <p class="nama-produk"> BASNEAK BLACK </p>
            <p class="harga-produk"> IDR 250.000 </p>
          </div>
        </div>
      </div>

      <div class="container cont-pro"></div>
    </section>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>