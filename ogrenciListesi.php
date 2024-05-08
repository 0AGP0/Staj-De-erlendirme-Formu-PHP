<?php
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginphp";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sil_kayitNo'])) {
    $sil_kayitNo = $_POST['sil_kayitNo'];

    $sql = "DELETE FROM ogrencibilgileri WHERE kayıtNo = '$sil_kayitNo'";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Öğrenci başarıyla silindi!"); window.location.href = "ogrenciListesi.php";</script>';
    } else {
        echo "Silme işlemi sırasında bir hata oluştu: " . $conn->error;
    }
}

$sql = "SELECT * FROM ogrencibilgileri";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenciler</title>
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
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">Öğrenci Listesi</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kayıt No</th>
                                        <th>Başarı</th>
                                        <th>T.C. Kimlik No</th>
                                        <th>Ad</th>
                                        <th>Soyad</th>
                                        <th>Öğrenci No</th>
                                        <th>Sınıf</th>
                                        <th>Cep Tel No</th>
                                        <th>E-posta</th>
                                        <th>Staj Kodu</th>
                                        <th>Staj Yeri</th>
                                        <th>Staj Başlangıç Tarihi</th>
                                        <th>Staj Bitiş Tarihi</th>
                                        <th>Staj Evrakları Teslim</th>
                                        <th>Zorunlu Staj Yazısı</th>
                                        <th>END300/400 Yazısı</th>
                                        <th>Başvuru Dilekçesi</th>
                                        <th>Kabul Yazısı</th>
                                        <th>Müstehaklık Belgesi</th>
                                        <th>Kimlik Fotokopisi</th>
                                        <th>Staj Değerlendirme Formu</th>
                                        <th>Staj Raporu</th>
                                        <th>Açıklama</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row['kayıtNo'] . "</td>";
                                            echo "<td>" . $row['basari'] . "</td>";
                                            echo "<td>" . $row['tc'] . "</td>";
                                            echo "<td>" . $row['ad'] . "</td>";
                                            echo "<td>" . $row['soyad'] . "</td>";
                                            echo "<td>" . $row['ogrenciNo'] . "</td>";
                                            echo "<td>" . $row['sınıf'] . "</td>";
                                            echo "<td>" . $row['tel'] . "</td>";
                                            echo "<td>" . $row['ePosta'] . "</td>";
                                            echo "<td>" . $row['stajKodu'] . "</td>";
                                            echo "<td>" . $row['stajYeri'] . "</td>";
                                            echo "<td>" . $row['stajBasTarihi'] . "</td>";
                                            echo "<td>" . $row['stajBitisTarihi'] . "</td>";
                                            echo "<td>" . ($row['personeleTeslim'] ? 'Evet' : 'Hayır') . "</td>";
                                            echo "<td>" . $row['stajYazısı'] . "</td>";
                                            echo "<td>" . $row['endYazısı'] . "</td>";
                                            echo "<td>" . ($row['dilekce'] ? 'Verildi' : 'Verilmedi') . "</td>";
                                            echo "<td>" . ($row['kabulYazısı'] ? 'Getirildi' : 'Getirilmedi') . "</td>";
                                            echo "<td>" . ($row['mustehaklık'] ? 'Verildi' : 'Verilmedi') . "</td>";
                                            echo "<td>" . ($row['kimlikFoto'] ? 'Verildi' : 'Verilmedi') . "</td>";
                                            echo "<td>" . ($row['stajDegerlendirme'] ? 'Getirildi' : 'Getirilmedi') . "</td>";
                                            echo "<td>" . ($row['stajRaporu'] ? 'Verildi' : 'Verilmedi') . "</td>";
                                            echo "<td>" . $row['aciklama'] . "</td>";
                                            echo "<td><form method='post'><input type='hidden' name='sil_kayitNo' value='" . $row['kayıtNo'] . "'><button type='submit' onclick=\"return confirm('Bu öğrenciyi silmek istediğinizden emin misiniz?')\">Sil</button></form></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='24'>Veri bulunamadı.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
