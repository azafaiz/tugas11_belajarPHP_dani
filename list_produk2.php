<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Produk</title>


    <link href="gambar/logo.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link rel="stylesheet" href="list_produk2.css">
</head>
<body>
    <div class="container">
        <h2>Produk Kami</h2>
        <?php
            // Array data produk
            $products = array(
                array(
                    "name" => "Laptop",
                    "image" => "lap.jpg",
                    "price" => "Rp 1.000.000"
                ),
                array(
                    "name" => "Handphone",
                    "image" => "hp.jpg",
                    "price" => "Rp 15.000.000"
                ),
                array(
                    "name" => "Motor",
                    "image" => "motor.jpg",
                    "price" => "Rp 20.000.000"
                ),
                array(
                    "name" => "Kipas Angin",
                    "image" => "kipas.jpg",
                    "price" => "Rp 200.000"
                ),
                array(
                    "name" => "PC Gaming",
                    "image" => "pc.jpg",
                    "price" => "Rp 20.000.000"
                ),
                array(
                    "name" => "Sepatu",
                    "image" => "sp.jpg",
                    "price" => "Rp 500.000"
                ),
                array(
                    "name" => "Mouse",
                    "image" => "mos.jpg",
                    "price" => "Rp 500.000"
                ),
                array(
                    "name" => "Kacamata",
                    "image" => "kacamata.jpg",
                    "price" => "Rp 500.000"
                ),
            );

            // Loop untuk menampilkan data produk
            foreach ($products as $product) {
                echo "<div class='product'>";
                echo "<img src='gambar/{$product['image']}' alt='{$product['name']}'>";
                echo "<div class='product-info'>";
                echo "<h3>{$product['name']}</h3>";
                echo "<p>Harga: {$product['price']}</p>";
                echo "<button>Lihat sel..</button>";
                echo "</div>";
                echo "</div>";
            }
        ?>

    </div>
</body>
</html>
