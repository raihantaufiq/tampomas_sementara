<?php

// Start the session
session_start();
// cek session
if (!isset($_SESSION["login_email_admin"])) {
    header('location: ../login_form.php');
}
// buka database (buat koneksi ke database)
// include("../proses/db_connect.php");
?>

<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Tampomas - Admin</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style.admin.css">
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
       
    </head>
    <body classname='snippet-body' class="body-pd">
        <body id="body-pd">
            <header class="header body-pd" id="header">
                <div class="header_toggle ">
                    <i class='bx bx-x bx-menu' id="header-toggle"></i>
                </div>
                <div class="row align-items-center " style="color:#204D48;">
                    <div class="col">
                        <h7>|</h7>
                    </div>
                    <!--  -->
                    <div class="col ">
                        <a href="profile-admin.php" style="text-decoration: none; color: #204D48;">
                            <h7><?= $_SESSION["nama_admin"] ?></h7>
                        </a>
                    </div>
                    <!--  -->
                </div>
                
            </header>
            <div class="l-navbar show" id="nav-bar">
                <nav class="nav">
                    <div>
                        <a href="dashboard.php" class="nav_logo">
                            <img src="images-admin/Tampomas-Light.png" style="padding-right: -35%;"alt="logo">
                            <img src="images-admin/Text-only.png" alt="text">
                        </a>
                        <div class="nav_list">
                            <a href="dashboard.php" class="nav_link ">
                                <i class="iconify" data-icon="fa:pie-chart"></i>
                                <span class="nav_name">Dashboard</span>
                            </a>
                            <a href="Produk.php" class="nav_link active">
                                <i class="iconify" data-icon="fa-solid:ticket-alt"></i>
                                <span class="nav_name">Produk</span>
                            </a>
                            <a href="blog-admin.php" class="nav_link">
                                <i class="iconify" data-icon="jam:write-f"></i>
                                <span class="nav_name">Blog</span>
                            </a>
                            
                        </div>
                    </div>
                </nav>
            </div>
            <!--Container Main start-->
            <div class="py-3">
                <h3 class="text-center pb-3 ">Produk</h3>
                <div class="card p-2">
                    <div class="card-body py-4">
                        <a href="produk.php"> < Kembali</a>
                      <form action="proses/tambah_product.php" method="post" class="mt-4" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="inputIdProduk" class="form-label">Id Produk</label>
                            <input type="text" class="form-control" id="inputIdProduk" name="id_m_product" placeholder="Masukkan Id produk">
                        </div>
                        <div class="mb-3">
                            <label for="inputKategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="inputKategori" name="category_product" placeholder="Masukkan kategori produk">
                        </div>
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputNama" name="name_product" placeholder="Masukkan nama produk">
                        </div>
                        <div class="mb-3">
                            <label for="inputFoto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="inputFoto" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="inputHarga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="inputHarga" name="price_product" placeholder="Masukan harga produk">
                        </div>
                        <div class="mb-3">
                            <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" placeholder="Masukkan deskripsi produk" id="inputDeskripsi" name="desc_product" style="height: 100px; resize: none;"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inputStok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="inputStok" name="stock_product" placeholder="Masukan stok produk">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success d-flex me-3" name="add_product">Simpan</button>
                            <button type="reset" class="btn btn-outline-success d-flex">Batal</button>
                        </div>
                        
                      </form>
                    </div>
                  </div>
            </div>
            <!--Container Main end-->
            <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
            <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>          
            <script type='text/javascript' src='admin.js'></script>

        </body>
    </html>