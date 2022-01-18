<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylepems.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
  </head>
<body>
<nav class="navbar" style="background-color: #6C6060;">
    <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="home.html">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">BRAND</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-dark" href="Adidas.html">Adidas</a></li>
                <li><a class="dropdown-item text-dark" href="Nike.html">Nike</a></li>
                <li><a class="dropdown-item text-dark" href="Puma.html">Puma</a></li>
                <li><hr class="dropdown-divider"></li>
              </ul>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form>
    </div>
    </nav>
    <div class="center-block">
        <form method="POST" action="pesanan.php">
            <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Penerima</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="inputText">
            </div>
            </div>
            <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Jenis Sepatu</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jenis" id="inputText">
            </div>
            </div>
            <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="nomer">
            </div>
            </div>
            <p style="margin-left:120px;">Alamat</p>
            <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="kab/kota" id="inputText">
            </div>
            </div>
            <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="kecamatan" id="inputText">
            </div>
            </div>
            <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Desa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="desa" id="inputText">
            </div>
            </div>
            <p style="margin-left:120px; font-size: 20px;">Ukuran Sepatu</p>
            <div class="radio">
                <input type="radio" name="uk" value="S"> S
                <input type="radio" name="uk" value="M"> M
                <input type="radio" name="uk" value="L"> L
                <input type="radio" name="uk" value="XL"> XL
            </div>
            <button class="btn btn-primary" type="submit" style="float:right; margin-right: 90px;">BELI</button>
        </form>
    </div>
    <footer class="footer">
        <div class="container2">
          <div class="row2">
            <div class="footer-col">
              <h1 style="color: white;font-size: 70px;">#BELI</h1>
            </div>
            <div class="footer-col">
              <h4>company</h4>
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our services</a></li>
                <li><a href="#">privacy policy</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>get help</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">payment options</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/daninaswa/"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/naswadani"><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>