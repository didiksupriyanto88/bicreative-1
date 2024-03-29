<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiCreative - Web Developer</title>
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Bootstrap Icon .css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <!-- Custom .css-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-wd/sect_wd_header.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-wd/sect_wd_about.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-wd/sect_wd_porto.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/pg-wd/sect_wd_packet.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/footer.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/slick.css">
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

    <?= $this->include('pg_web_developer\wd_sect_header') ?>

    <?= $this->include('pg_web_developer\wd_sect_about') ?>

    <?= $this->include('pg_web_developer\wd_sect_porto') ?>

    <!-- Harga-->
    <?= $this->include('pg_web_developer\wd_sect_packet') ?>

    <!-- Layanan-->


    <!-- Ekstensi-->




    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.wd-packet-container').slick({
                autoplay: false,
                autoplaySpeed: 2500,
                slidesToShow: 3,
                infinite: true,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        infinite: true,
                    }
                }, {
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                }]
            });
        });

        $(document).ready(function() {
            $('.wd-packet-image').slick({
                autoplay: true,
                autoplaySpeed: 1400,
                slidesToShow: 1,
                infinite: true,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                }, {
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                }]
            });
        });
    </script>
</body>

</html>