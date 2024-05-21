<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $kayitNo = isset($_POST['kayitNo']) ? $_POST['kayitNo'] : ''; 
    if (empty($kayitNo)) {
        die("Kayıt numarası eksik.");
    }

    $puanlar = array();
    $toplamPuan = 0;

    for ($i = 1; $i <= 20; $i++) {
        $soru = 'soru' . $i;
        $puanlar[$i] = isset($_POST[$soru]) ? $_POST[$soru] : 0;
        $toplamPuan += $puanlar[$i];
    }

    $basariDurumu = ($toplamPuan > 70) ? "Başarılı" : "Başarısız";

    include "config.php";

    $sql = "UPDATE ogrencibilgileri SET basari='$basariDurumu' WHERE kayıtNo=$kayitNo";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['basariDurumu'] = $basariDurumu; 
        echo "<script>alert('Değerlendirme başarıyla kaydedildi.'); window.location.href = 'menu.html';</script>";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    exit; 
} else {
    header("Location: menu.php");
    exit;
}
?>
