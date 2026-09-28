<?php

$produk = [
    [
        "nama" => "Laptop Gaming Asus",
        "kategori" => "Laptop",
        "harga" => 10500000,
        "stok" => 20,
        "gambar" => "laptop.webp"
    ],

    [
        "nama" => "Logicool Mouse",
        "kategori" => "Mouse",
        "harga" => 350000,
        "stok" => 10,
        "gambar" => "Mouse.jpg"
    ],

    [
        "nama" => "Gaming Keyboard",
        "kategori" => "Keyboard",
        "harga" => 600000,
        "stok" => 10,
        "gambar" => "keyboard.webp"
    ],

    [
        "nama" => "Monitor Xiaomi",
        "kategori" => "Monitor",
        "harga" => 5500000,
        "stok" => 4,
        "gambar" => "monitor.png"
    ],

    [
        "nama" => "Headset Gaming",
        "kategori" => "Headset",
        "harga" => 800000,
        "stok" => 3,
        "gambar" => "headset.webp"
    ],

    [
        "nama" => "Webcam Logitech",
        "kategori" => "Kamera",
        "harga" => 900000,
        "stok" => 0,
        "gambar" => "webcam.webp"
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <!-- Menghubungkan file CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <!-- ================= HEADER ================= -->

    <header class="header">

        <div class="header-container">

            <!-- LOGO -->
            <div class="logo">
                Cia Store
            </div>


            <!-- SEARCH -->
            <div class="search-box">

                <input
                    type="text"
                    placeholder="Cari di Cia Store..."
                >

                <button>
                    🔍
                </button>

            </div>


            <!-- KERANJANG -->
            <div class="cart">

                🛒

                <span>
                    Keranjang
                </span>

            </div>

        </div>


        <!-- MENU NAVIGASI -->

        <div class="menu-container">

            <a href="#">
                Home
            </a>

            <a href="#produk">
                Produk
            </a>

            <a href="#kategori">
                Kategori
            </a>

            <a href="#">
                Laptop
            </a>

            <a href="#">
                Mouse
            </a>

            <a href="#">
                Keyboard
            </a>

            <a href="#">
                Monitor
            </a>

        </div>

    </header>



    <!-- ================= HERO ================= -->

    <section class="hero">

        <div class="hero-text">

            <p class="welcome">
                SELAMAT DATANG DI
            </p>

            <h1>
                Cia Store
            </h1>

            <p class="hero-description">
                Temukan berbagai perangkat dan aksesoris
                teknologi dengan harga terbaik.
            </p>

            <a
                href="#produk"
                class="hero-button"
            >
                Belanja Sekarang
            </a>

        </div>


        <div class="hero-icon">
            💻
        </div>

    </section>



    <!-- ================= KATEGORI ================= -->

    <section
        class="category-section"
        id="kategori"
    >

        <h2>
            Pilih Kategori
        </h2>


        <div class="category-list">


            <div class="category">

                <div class="category-icon">
                    💻
                </div>

                <span>
                    Laptop
                </span>

            </div>


            <div class="category">

                <div class="category-icon">
                    🖱️
                </div>

                <span>
                    Mouse
                </span>

            </div>


            <div class="category">

                <div class="category-icon">
                    ⌨️
                </div>

                <span>
                    Keyboard
                </span>

            </div>


            <div class="category">

                <div class="category-icon">
                    🖥️
                </div>

                <span>
                    Monitor
                </span>

            </div>


            <div class="category">

                <div class="category-icon">
                    🎧
                </div>

                <span>
                    Headset
                </span>

            </div>


            <div class="category">

                <div class="category-icon">
                    📷
                </div>

                <span>
                    Kamera
                </span>

            </div>

        </div>

    </section>



    <!-- ================= PRODUK ================= -->

    <main
        class="product-section"
        id="produk"
    >


        <!-- JUDUL PRODUK -->

        <div class="section-title">

            <div>

                <h2>
                    Produk Pilihan
                </h2>

                <p>
                    <?= count($produk) ?> produk tersedia
                </p>

            </div>

        </div>



        <!-- GRID PRODUK -->

        <div class="product-grid">


            <?php foreach ($produk as $item): ?>


                <!-- CARD PRODUK -->

                <div class="product-card">


                    <!-- GAMBAR -->

                    <div class="product-image">

                        <img
                            src="images/<?= $item["gambar"] ?>"
                            alt="<?= $item["nama"] ?>"
                        >

                    </div>



                    <!-- INFORMASI PRODUK -->

                    <div class="product-info">


                        <h3>
                            <?= $item["nama"] ?>
                        </h3>


                        <p class="category-name">

                            <?= $item["kategori"] ?>

                        </p>



                        <!-- HARGA -->

                        <p class="price">

                            Rp
                            <?= number_format(
                                $item["harga"],
                                0,
                                ',',
                                '.'
                            ) ?>

                        </p>



                        <!-- STOK -->

                        <p class="stock">

                            Stok:
                            <?= $item["stok"] ?>

                        </p>



                        <!-- CEK STATUS STOK -->

                        <?php if ($item["stok"] > 0): ?>


                            <p class="available">

                                ✓ Tersedia

                            </p>


                            <button class="buy-button">

                                + Keranjang

                            </button>


                        <?php else: ?>


                            <p class="sold-out">

                                ✕ Stok Habis

                            </p>


                            <button
                                class="buy-button disabled"
                                disabled
                            >

                                Stok Habis

                            </button>


                        <?php endif; ?>


                    </div>

                </div>


            <?php endforeach; ?>


        </div>

    </main>



    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-content">

            <h2>
                Cia Store
            </h2>

            <p>
                Toko online perangkat dan aksesoris teknologi.
            </p>

            <p>
                © 2026 Cia Store. All Rights Reserved.
            </p>

        </div>

    </footer>


</body>

</html>