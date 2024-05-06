<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Ekle</title>
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
                    <div class="card-header bg-primary text-white">Öğrenci Ekle</div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group row">
                                <label for="kayit_no" class="col-sm-3 col-form-label">Kayıt No:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="kayit_no" name="kayit_no" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="basari_durumu" class="col-sm-3 col-form-label">Başarı Durumu:</label>
                                <div class="col-sm-9">
                                    <select id="basari_durumu" name="basari_durumu" class="form-control">
                                        <option value="Basarili">Başarılı</option>
                                        <option value="Basarisiz">Başarısız</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tc_kimlik_no" class="col-sm-3 col-form-label">T.C. Kimlik No:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="tc_kimlik_no" name="tc_kimlik_no" class="form-control">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="ad" class="col-sm-3 col-form-label">Ad:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="ad" name="ad" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="soyad" class="col-sm-3 col-form-label">Soyad:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="soyad" name="soyad" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
    <label for="ogrenci_no" class="col-sm-3 col-form-label">Öğrenci No:</label>
    <div class="col-sm-9">
        <input type="text" id="ogrenci_no" name="ogrenci_no" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="sinif" class="col-sm-3 col-form-label">Sınıf:</label>
    <div class="col-sm-9">
        <select id="sinif" name="sinif" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="cep_tel_no" class="col-sm-3 col-form-label">Cep Tel No:</label>
    <div class="col-sm-9">
        <input type="text" id="cep_tel_no" name="cep_tel_no" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="eposta" class="col-sm-3 col-form-label">E-posta:</label>
    <div class="col-sm-9">
        <input type="text" id="eposta" name="eposta" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="staj_kodu" class="col-sm-3 col-form-label">Staj Kodu:</label>
    <div class="col-sm-9">
        <input type="text" id="staj_kodu" name="staj_kodu" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="staj_yeri" class="col-sm-3 col-form-label">Staj Yeri:</label>
    <div class="col-sm-9">
        <input type="text" id="staj_yeri" name="staj_yeri" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="staj_baslangic_tarihi" class="col-sm-3 col-form-label">Staj Başlangıç Tarihi:</label>
    <div class="col-sm-9">
        <input type="date" id="staj_baslangic_tarihi" name="staj_baslangic_tarihi" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="staj_bitis_tarihi" class="col-sm-3 col-form-label">Staj Bitiş Tarihi:</label>
    <div class="col-sm-9">
        <input type="date" id="staj_bitis_tarihi" name="staj_bitis_tarihi" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Staj Evrakları Personele Teslim Edildi mi?</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="staj_evraklari_teslim" name="staj_evraklari_teslim" value="1">
            <label class="form-check-label" for="staj_evraklari_teslim">Evraklar Teslim Edildi</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="zorunlu_staj_yazisi" class="col-sm-3 col-form-label">Zorunlu Staj Yazısı:</label>
    <div class="col-sm-9">
        <input type="text" id="zorunlu_staj_yazisi" name="zorunlu_staj_yazisi" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="end300_400_yazisi" class="col-sm-3 col-form-label">END300/400 Yazısı:</label>
    <div class="col-sm-9">
        <input type="text" id="end300_400_yazisi" name="end300_400_yazisi" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Başvuru Dilekçesi Verildi mi?</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="basvuru_dilekcesi_verildi" name="basvuru_dilekcesi_verildi" value="1">
            <label class="form-check-label" for="basvuru_dilekcesi_verildi">Dilekçe Verildi</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Kabul Yazısı Getirildi mi?</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="kabul_yazisi_getirildi" name="kabul_yazisi_getirildi" value="1">
            <label class="form-check-label" for="kabul_yazisi_getirildi">Kabul Yazısı Getirildi</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Müstehaklık Belgesi Verildi mi?</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="mustehaklik_belgesi_verildi" name="mustehaklik_belgesi_verildi" value="1">
            <label class="form-check-label" for="mustehaklik_belgesi_verildi">Belge Verildi</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Kimlik Fotokopisi Verildi mi?</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="kimlik_fotokopisi_verildi" name="kimlik_fotokopisi_verildi" value="1">
            <label class="form-check-label" for="kimlik_fotokopisi_verildi">Fotokopi Verildi</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Staj Değerlendirme Formu Getirildi mi?</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="staj_degerlendirme_formu_getirildi" name="staj_degerlendirme_formu_getirildi" value="1">
            <label class="form-check-label" for="staj_degerlendirme_formu_getirildi">Form Getirildi</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-form-label">Staj Raporu Verildi mi?</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="staj_raporu_verildi" name="staj_raporu_verildi" value="1">
            <label class="form-check-label" for="staj_raporu_verildi">Rapor Verildi</label>
        </div>
    </div>
</div>

                            <div class="form-group row">
                                <label for="aciklama" class="col-sm-3 col-form-label">Açıklama:</label>
                                <div class="col-sm-9">
                                    <textarea id="aciklama" name="aciklama" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary">Kaydet</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Veritabanı bağlantısı
    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "loginphp";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Form verilerini al
    $kayit_no = $_POST['kayit_no'];
    $basari_durumu = $_POST['basari_durumu'];
    $tc_kimlik_no = $_POST['tc_kimlik_no'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $ogrenci_no = $_POST['ogrenci_no'];
    $sinif = $_POST['sinif'];
    $cep_tel_no = $_POST['cep_tel_no'];
    $eposta = $_POST['eposta'];
    $staj_kodu = $_POST['staj_kodu'];
    $staj_yeri = $_POST['staj_yeri'];
    $staj_baslangic_tarihi = $_POST['staj_baslangic_tarihi'];
    $staj_bitis_tarihi = $_POST['staj_bitis_tarihi'];
    $staj_evraklari_teslim = isset($_POST['staj_evraklari_teslim']) ? 1 : 0;
    $zorunlu_staj_yazisi = $_POST['zorunlu_staj_yazisi'];
    $end300_400_yazisi = $_POST['end300_400_yazisi'];
    $basvuru_dilekcesi_verildi = isset($_POST['basvuru_dilekcesi_verildi']) ? 1 : 0;
    $kabul_yazisi_getirildi = isset($_POST['kabul_yazisi_getirildi']) ? 1 : 0;
    $mustehaklik_belgesi_verildi = isset($_POST['mustehaklik_belgesi_verildi']) ? 1 : 0;
    $kimlik_fotokopisi_verildi = isset($_POST['kimlik_fotokopisi_verildi']) ? 1 : 0;
    $staj_degerlendirme_formu_getirildi = isset($_POST['staj_degerlendirme_formu_getirildi']) ? 1 : 0;
    $staj_raporu_verildi = isset($_POST['staj_raporu_verildi']) ? 1 : 0;
    $aciklama = $_POST['aciklama'];

    // SQL sorgusu
    $sql = "INSERT INTO ogrencibilgileri (kayıtNo, basari, tc, ad, soyad, ogrenciNo, sınıf, tel, ePosta, stajKodu, stajYeri, stajBasTarihi, stajBitisTarihi, personeleTeslim, stajYazısı, endYazısı, dilekce, kabulYazısı, mustehaklık, kimlikFoto, stajDegerlendirme, stajRaporu, aciklama) 
    VALUES ('$kayit_no', '$basari_durumu', '$tc_kimlik_no', '$ad', '$soyad', '$ogrenci_no', '$sinif', '$cep_tel_no', '$eposta', '$staj_kodu', '$staj_yeri', '$staj_baslangic_tarihi', '$staj_bitis_tarihi', '$staj_evraklari_teslim', '$zorunlu_staj_yazisi', '$end300_400_yazisi', '$basvuru_dilekcesi_verildi', '$kabul_yazisi_getirildi', '$mustehaklik_belgesi_verildi', '$kimlik_fotokopisi_verildi', '$staj_degerlendirme_formu_getirildi', '$staj_raporu_verildi', '$aciklama')";

    if ($conn->query($sql) === TRUE) {
        header("Location: menu.html"); // Başarılı olduğunda yönlendirilecek sayfa
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

