<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <title>Fresh Orenji</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="accent/fonts/icomoon/style.css">
    <link rel="stylesheet" href="accent/css/bootstrap.min.css">
    <link rel="stylesheet" href="accent/css/animate.css">
    <link rel="stylesheet" href="accent/css/owl.carousel.min.css">
    <link rel="stylesheet" href="accent/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="accent/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="accent/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="accent/css/aos.css">
    <link rel="stylesheet" href="accent/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="accent/css/style.css">
    <style>
        .produk{
            height: 30vh;
        }
        


    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <div class="site-navbar-wrap">

            <div class="site-navbar site-navbar-target js-sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-4">
                            <h1 class="my-0 site-logo"><a href="index.php">Fresh Orenji<span class="text-primary">.</span></a>
                            <img src="img/Fresh_Orenji_3-removebg-preview.png" width = "100px" height="100px" alt="Image" class="img-fluid" ></h1>
                            <div class="img-wrap">
            </div>
                        </div>
                        <div class="col-6 col-md-8">
                            <nav class="site-navigation text-right" role="navigation">
                                
                                <div class="container">

                                    <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                            <span class="icon-menu h3"></span> <span class="menu-text"></span>
                                        </a></div>

                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                                        <li><a href="#home-section" class="nav-link">Home</a></li>
                                        <li><a href="#listMinuman" class="nav-link">List Minuman</a></li>
                                        <li><a href="#contact-section" class="nav-link">Kontak Kami</a></li>
                                        <li><a href="loginUser.php" class="nav-link">Masuk Akun</a></li>
                                        <?php if (isset($_SESSION['idPelanggan'])) {
                                            if ($_SESSION['idPelanggan'] != '') { ?>
                                                <li><a href="logoutPelanggan.php" class="nav-link">Log Out</a></li>
                                            <?php } else {
                                            } ?>
                                        <?php
                                        }  ?>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .site-navbar-wrap -->

        <div class="site-blocks-cover" id="home-section">
            <div class="img-wrap">
                <div class="owl-carousel slide-one-item hero-slider">
                    <div class="slide overlay">
                        <img src="img/Summer Orange Juice Drink Background Banner.jpeg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 align-self-center">
                        <div class="intro">
                            <div class="heading">
                                <h1>Fresh But Healthy</h1>
                            </div>
                            <div class="text">
                                <p class="sub-text mb-5">Nikmati kesegaran buah jeruk dalam setiap tegukan. Rasakan sensasi manis dan asam dari buah jeruk dalam setiap tetesnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .site-blocks-cover -->

        <div class="site-section" id="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5">
                        <img src="img/tampialn.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </div>
                    <div class="col-lg-5 ml-auto section-title">
                        <span class="sub-title mb-2 d-block">Fresh Orenji</span>

                        <h2 class="title text-primary mb-3">Since 2021</h2>
                        <p class="mb-4">Fresh Orenji berdiri sejak tahun 2021 hingga sekarang dalam bidang aneka minuman Jeruk khas ARA.</p>

                        <div class="d-flex">
                            <ul class="list-unstyled ul-check success mr-5">
                                <li>Minuman</li>
                                <li>Instagramable</li>
                                <li>Cocok Untuk Usia 10 - 60 tahun</li>
                                <li>Cocok Untuk wanita dan lakik - laki</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .END site-section -->

        <div class="site-section" id="listMinuman">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6 section-title">
                        <h2 class="title text-primary">List Minuman</h2>
                    </div>
                </div>
                <div class="product">
        <?php
        // Array dengan data produk
        $products = [
            [
                'name' => 'Orenji Milk',
                'image' => "img\jeruksusu.jpg",
                'price' => 20000
            ],

                [
                'name' => 'Orenji Yakult',
                'image' => "img/es-lemon-yakult.jpg" ,
                'price' => 21000
            ],
            [
                'name' => 'Orenji Mon',
                'image' => "img/orenjilemonn.jpg",
                'price' => 18000
            ],
            [
                'name' => 'Orenji Coconut',
                'image' => "img/orenjikelapa.jpg",
                'price' => 19000
            ],
            [
                'name' => 'Orenji Fresh',
                'image' => "img/Orenjifresh.jpeg.jpg",
                'price' => 15000
                
            ]
        ];

        // Loop melalui setiap produk
        foreach ($products as $product) {
            echo '<div class="product-item">';
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '" width="200" height="200">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>Harga: ' . $product['price'] . '</p>';
            echo '<button type="submit" class="text-center">Beli</a>  class="btn btn-primary btn-md"><a href="https://api.whatsapp.com/send?+6281615180858">Beli</a></button>';
            echo '</div>';
        }
        ?>
    </div>
              
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="contact-section">
        <div class="container">
            <form action="" class="contact-form">

                <div class="section-title text-center mb-5">
                    <h2 class="title text-primary">Kontak Kami</h2>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="No Telepon">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Kritikan dan Saran"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-md">Kirim</button>
                    </div>
                </div>

            </form>
        </div>
    </div> <!-- END .site-section -->

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                </div>
                <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <ul class="list-unstyled">
                        <li>0878-1234-5678</li>
                        <li>freshorenji.co</li>
                        <li>Malang, Jawa Timur</li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">

<div class="text-center">
    <h3 class="footer-heading mb-2">List dan Harga Minuman</h3>
    <a href="login.php" class="text-center">Klik Now</a>

</div>

</div>
<div class="text-center">
                    <h4>Operational Hour</h4>
                    <ul class="text-center">
                        <li>Senin - Jumat = 09.00 - 22.00 WIB</li>
                        <li>Sabtu - Minggu = 09.00 - 17.00 WIB</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

                <div class="text-center">
                    <h4>Location</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126888.00586325415!2d112.52528136320417!3d-7.928966979674232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd61c33d707a755%3A0x6727f5f954ca4250!2sVilla%20Puncak%20Tidar%2C%20Tidar%2C%20Kec.%20Klojen%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065132!5e0!3m2!1sen!2sid!4v1647435561807!5m2!1sen!2sid"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- <div class="col-md-4">
                    <h4>Operational Hour</h4>
                    <ul class="list-unstyled">
                        <li>Senin - Jumat = 09.00 - 22.00 WIB</li>
                        <li>Sabtu - Minggu = 09.00 - 17.00 WIB</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

      
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="mb-4">
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        :) &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>Thankyou<i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">fresh Orenji</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>


    <script src="accent/js/jquery-3.3.1.min.js"></script>
    <script src="accent/js/popper.min.js"></script>
    <script src="accent/js/bootstrap.min.js"></script>
    <script src="accent/js/owl.carousel.min.js"></script>
    <script src="accent/js/aos.js"></script>
    <script src="accent/js/jquery.sticky.js"></script>
    <script src="accent/js/stickyfill.min.js"></script>
    <script src="accent/js/jquery.easing.1.3.js"></script>
    <script src="accent/js/jquery.fancybox.min.js"></script>
    <script src="accent/js/main.js"></script>


</body>

</html>