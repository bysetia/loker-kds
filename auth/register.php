<?php require "../config/config.php"; ?>
<?php require "../includes/header.php"; ?>
<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('../images/hero_1.jpg');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Daftar</h1>
        <div class="custom-breadcrumbs">
          <a href="<?php echo APPURL; ?>">Beranda</a> <span class="mx-2 slash">/</span>
          <span class="text-white"><strong>Daftar</strong></span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="site-section">
  <div class="container">
    <h2 style="font-weight: 500;" align="center">Ayo bergabung dan buat akunmu sekarang!</h2>
    <div class="row">
      <div class="col-md-12 mb-5">
        <form action="register.php" method="POST" class="p-4 border rounded">
          <?php
          if (isset($_POST['submit'])) {
            if (empty($_POST['name']) or empty($_POST['email']) or empty($_POST['password']) or empty($_POST['rePassword'])) {
              echo "<div class='alert alert-danger bg-danger text-white'>Maaf error, Masih ada inputan yang kosong</div>";
            } else {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              $rePassword = $_POST['rePassword'];
              $img = '../user-images/bayu.jpg';
              if ($password == $rePassword) {
                $insert = $conn->prepare("INSERT INTO users(name, email, password, img)
              VALUES (:name, :email, :password, :img)");

                $insert->execute([
                  ':name' => $name,
                  ':email' => $email,
                  ':password' => password_hash($password, PASSWORD_DEFAULT),
                  ':img' => $img
                ]);
                echo "<div class='alert alert-success bg-success text-white'> Berhasil Membuat Akun</div>";
              } else {
                echo "<div class='alert alert-danger bg-danger text-white'>Maaf password tidak sesuai</div>";
              }
            }
          }
          ?>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="name">Nama Pengguna</label>
              <input type="text" id="name" class="form-control" placeholder="Nama" name="name">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="email">Alamat Email</label>
              <input type="text" id="email" class="form-control" placeholder="Email" name="email">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="password">Kata Sandi</label>
              <input type="password" id="password" class="form-control" placeholder="Kata Sandi" name="password">
            </div>
          </div>
          <div class="row form-group mb-4">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="text-black" for="re-password">Ketik Ulang Kata Sandi</label>
              <input type="password" id="rePassword" class="form-control" placeholder="Kata Sandi" name="rePassword">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" name="submit" value="Daftar" class="btn px-4 btn-primary text-white">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require "../includes/footer.php"; ?>