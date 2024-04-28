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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kayıt No</th>
                                    <th>Ad</th>
                                    <th>Soyad</th>
                                    <th>T.C. Kimlik No</th>
                                    <th>Sınıf</th>
                                    <!-- İhtiyaç duyulan diğer sütun başlıkları buraya eklenebilir -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // MySQL bağlantısı ve gerekli sorguların yapılması gerekiyor

                                // Öğrenci verilerini MySQL'den çekme işlemi
                                // Örnek olarak aşağıda bir döngü ile tabloya verilerin eklenmesi gösterilmiştir
                                // Gerçek uygulamada bu kısım MySQL sorguları ile gerçekleştirilecektir
                                $students = [
                                    ["123", "John", "Doe", "12345678901", "1"],
                                    ["456", "Jane", "Smith", "98765432109", "2"],
                                    // Buraya MySQL sorgusu ile öğrenci verilerini çekerek diziye ekleme yapabilirsiniz
                                ];

                                foreach ($students as $student) {
                                    echo "<tr>";
                                    foreach ($student as $data) {
                                        echo "<td>$data</td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
