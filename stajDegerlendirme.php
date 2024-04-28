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
                    <div class="card-header bg-primary text-white">Staj Değerlendirme</div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="isim">İsim:</label>
                                    <input type="text" id="isim" name="isim" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="soyisim">Soyisim:</label>
                                    <input type="text" id="soyisim" name="soyisim" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ders_kodu">Ders Kodu:</label>
                                    <input type="text" id="ders_kodu" name="ders_kodu" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="isyeri_degerlendirmesi">İşyeri Değerlendirmesi:</label>
                                <select id="isyeri_degerlendirmesi" name="isyeri_degerlendirmesi" class="form-control">
                                    <?php
                                    // Buraya MySQL sorgusu 
                                    ?>
                                    <option value="0">Seçiniz</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sbp_degerlendirmesi">Şekil-Biçim-Pazarlama Dili Değerlendirmesi:</label>
                                <select id="sbp_degerlendirmesi" name="sbp_degerlendirmesi" class="form-control">
                                    <?php
                                    // Buraya MySQL sorgusu ekleyerek optionları dinamik olarak oluşturabilirsiniz
                                    ?>
                                    <option value="0">Seçiniz</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <?php for ($i = 1; $i <= 20; $i++) { ?>
                                <div class="form-group">
                                    <label for="soru<?php echo $i; ?>">Soru <?php echo $i; ?>:</label>
                                    <select id="soru<?php echo $i; ?>" name="soru<?php echo $i; ?>" class="form-control">
                                        <?php
                                        // Buraya MySQL sorgusu
                                        ?>
                                    <option value="0">Seçiniz</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="basari_durumu">Başarı Durumu:</label>
                                <select id="basari_durumu" name="basari_durumu" class="form-control">
                                    <option value="Basarili">Başarılı</option>
                                    <option value="Basarisiz">Başarısız</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Değerlendir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
