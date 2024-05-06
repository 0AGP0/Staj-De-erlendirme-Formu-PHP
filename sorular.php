<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staj Değerlendirme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Öğrenci Listesi ve Değerlendirme</div>
                    <div class="card-body">

                        <form action="staj_degerlendir.php" method="post">
                            <div class="form-group">
                                <label for="kayitNo">Öğrenci Seç:</label>
                                <select id="kayitNo" name="kayitNo" class="form-control" required>
                                    <option value="">Öğrenci Seçiniz</option>
                                    <?php
                                    // Veritabanı bağlantısı
                                    $host = "localhost:3307";
                                    $dbusername = "root";
                                    $dbpassword = "";
                                    $dbname = "loginphp";
                                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Öğrenci listesini veritabanından al
                                    $sql = "SELECT * FROM ogrencibilgileri";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row['kayıtNo'] . "'>" . $row['ad'] . " " . $row['soyad'] . "</option>";
                                        }
                                    }
                                    $conn->close();
                                    ?>
                                </select>
                            </div>
                            <?php for ($i = 1; $i <= 20; $i++) { ?>
                                <div class="form-group">
                                    <label for="soru<?php echo $i; ?>">Soru <?php echo $i; ?>:</label>
                                    <select id="soru<?php echo $i; ?>" name="soru<?php echo $i; ?>" class="form-control" required>
                                        <option value="">Puan Seçiniz</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            <?php } ?>
                            <button type="submit" name="submit" class="btn btn-primary">Değerlendir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
