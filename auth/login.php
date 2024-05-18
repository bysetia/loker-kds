<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<section class="section-hero overlay inner-page bg-image" style="background-image: url('../images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">Masuk</h1>
                <div class="custom-breadcrumbs">
                    <a href="<?php echo APPURL;?>">Beranda</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Masuk</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="site-section">
    <div class="container">
        <h2 style="font-weight: 500;" align="center">Selamat Datang Kembali</h2>
        <div class="row">
            <div class="col-md-12">
                <form action="#" class="p-4 border rounded">
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Alamat Email</label>
                            <input type="text" id="fname" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row form-group mb-4">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Kata Sandi</label>
                            <input type="password" id="fname" class="form-control" placeholder="Kata Sandi">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Masuk" class="btn px-4 btn-primary text-white">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<?php require "../includes/footer.php"; ?>