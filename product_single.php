<?php
// Start the session
session_start();

// buka database
include("proses/db_connect.php");

// cek get
if (isset($_GET['produk'])) {
  $id_produk = $_GET['produk'];
  
}else{
  header('location: product.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Tampomas Coffee</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/image/favicon-16x16.png" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Public Sans'>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
              <a href="index.php" class="navbar-brand mx-3 my-2"><img src="assets/image/logo.png" alt="logo" style="width: 180px;"></a>

                <div class="nav mx-auto">
                  <a href="index.php" class="nav-item me-3">Beranda</a>
                  <a href="product.php" class="nav-item me-3 nav-active">Produk</a>
                  <a href="blog.php" class="nav-item me-3">Blog</a>
                  <a href="about.php" class="nav-item me-3 ">Tentang Kami</a>
                </div>
          </div>
        </nav>

        <!-- Header-->
        <!-- isi -->
        <?php 
        // ambil data produk dari database berdasarkan id
        $query = "SELECT id_m_product, category_product, photo_product, name_product, price_product, desc_product, stock_product FROM m_product WHERE id_m_product='$id_produk'";
        $result = mysqli_query($db_connect, $query);
        list($id ,$kategori, $foto, $nama, $harga, $desc, $stok) = mysqli_fetch_array($result);
        ?>
        <div class="container mt-5 mb-5">
            <div class="row">
              <div class="col-5">
                <img class="img-fluid" src="assets/image_product/<?php echo $foto; ?>" alt="" style="width: 400px; max-height: 500px;">
              </div>
              <div class="col">
                <p class="fs-5" style="color: #D19F4B"><?php echo $kategori; ?></p>
                <p style="font-weight: 600;font-size: 50px; letter-spacing: -2.4px;"><?php echo $nama; ?></p>
                <p class="fs-5 mt-3">Rp <?php echo number_format($harga, 0, ',', '.'); ?></p>
                <p class="mt-5 text-black-50 fs-5"><?php echo $desc; ?></p>
                
                <form action="proses/buynow_addtocart_p.php" method="POST">
                  <input type="hidden" id="id_produk" name="id_produk" value="<?php echo $id; ?>">
                  <div class="row d-flex mt-5">
                    <div class="col d-flex text-dark">
                      <label class="me-3 pt-3" for="floatingInput">Stok</label>
                      <input required type="number" class="form-control" min="0" value="<?php echo $stok; ?>"
                        style="width: 103px; height: 50px;" disabled>
                    </div>
                  </div>
                  <div class="row d-flex mt-5">
                    <div class="col-3 d-flex text-dark">
                      <input class="btn text-white" type="submit" name="buy_now" value="Shopee / Tokped" style="background:#D19F4B; width: 131px; height: 42px;" />
                    </div>
                  </div>
                </form>

              </div>
            </div>
            <div class="row mt-4">
              <div class="col-5 d-flex">
                <!-- <img class="img-fluid me-4" src="assets/image/detailsatu.png" alt="">
                <img class="img-fluid me-4" src="assets/image/detaildua.png" alt="">
                <img class="img-fluid" src="assets/image/detailtiga.png" alt=""> -->
              </div>
            </div>
          </div>

        
          <div class="text-center m-5">
            <a href="product.php">
              <button class="btn" style="color:#D19F4B; border-color:#D19F4B; width: 203px;height: 44px;">Kembali ke Produk</button>
            </a>
            
          </div>
        
        <!-- Footer -->
        <section class="bg-light text-dark py-5 mx-auto">
          <div class = "container px-5">
              <div class = "row gx-5">
                  <div class = "col-lg-3 mb-5 mb-lg-0">
                      <h2 class = "h5 px-1">Akses Cepat</h2>
                      <a class = "row link-dark text-decoration-none px-3 py-2" href = "about.php">Tentang Kami</a>
                      <a class = "row link-dark text-decoration-none px-3 py-2" href = "product.php">Belanja</a>
                      <a class = "row link-dark text-decoration-none px-3 py-2" href = "blog.php">Blog</a>
                  </div>
                  <div class = "col-lg-4 mb-5 mb-lg-0">
                      <h2 class = "h5">Toko</h2>
                      <p>Dusun Padasari, RT 05/RW 03, Desa Pangadegan, 
                        Kecamatan Rancakalong, Kabupaten Sumedang 45361.</p>
                  </div>
                  <div class = "col mb-5 mb-lg-0">
                      <h2 class = "h5">Hubungi Kami</h2>
                      <p>Phone : +62811111111</p>
                      <p>Email:
                        TampomasCoffee@gmail.com
                      </p>
                  </div>
              </div>
            </div>
        </section>
        
        <footer class="py-1 ">
          <div class="pt-lg-2 pt-2 footer bg-white">
            <div class="container">
              <div class="row">

                <div class="align-items-center g-0 border-top py-2 mt-6 row">
                  <div class="col-lg-4 col-md-5 col-sm-12">
                    <span class="iconify" data-icon="bi:whatsapp" data-width="30" data-height="30"></span>
                    <span class="iconify" data-icon="ant-design:instagram-outlined" data-width="36" data-height="36"></span><br>
                    <p class="text-dark mt-2" style="font-size: 10px;">© 2022, TampomasCoffee</p>
                  </div>
                  </div>
                </div>
              </div>
          </div>
        </footer>
        
        <!-- iconify js -->
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>

<?php
// tutup database
mysqli_close($db_connect);
?>
</html>