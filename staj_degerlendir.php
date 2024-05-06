<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Formdan gelen verileri al
    $kayitNo = isset($_POST['kayitNo']) ? $_POST['kayitNo'] : ''; // Check if "kayıtNo" is set in $_POST array
    if (empty($kayitNo)) {
        die("Kayıt numarası eksik.");
    }

    $puanlar = array();
    $toplamPuan = 0;

    // 20 sorunun puanlarını al
    for ($i = 1; $i <= 20; $i++) {
        $soru = 'soru' . $i;
        $puanlar[$i] = isset($_POST[$soru]) ? $_POST[$soru] : 0;
        $toplamPuan += $puanlar[$i];
    }

    // Başarı durumunu belirle
    $basariDurumu = ($toplamPuan > 70) ? "Başarılı" : "Başarısız";

    // Veritabanı bağlantısı
    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "loginphp";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Başarı durumunu güncelle
    $sql = "UPDATE ogrencibilgileri SET basari='$basariDurumu' WHERE kayıtNo=$kayitNo";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['basariDurumu'] = $basariDurumu; // Başarı durumunu session'a kaydet
        echo "<script>alert('Değerlendirme başarıyla kaydedildi.'); window.location.href = 'menu.html';</script>";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    exit; // Exit after processing the form data
} else {
    header("Location: menu.php"); // Yönlendirme yaparak doğrudan bu sayfaya erişimi engelle
    exit;
}
?>
