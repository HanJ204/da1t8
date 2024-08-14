<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Nổi bật - 5S Fashion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }
        .news-title {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .news-item {
            margin-bottom: 40px;
        }
        .news-item h5 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">5S Fashion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="news-title">Tin Nổi bật</div>
        <?php
        $news = [
            ["date" => "2/8 - 4/8/2024", "location" => "5S Sông Công - Thái Nguyên", "description" => "Tặng 6000 phần quà miễn phí! Khách không cần mua hàng cũng nhận được quà."],
            ["date" => "12/7 - 14/7/2024", "location" => "5S Tiên Lữ - Hưng Yên", "description" => "Tặng quạt điều hòa & 6000 phần quà miễn phí! Khách không cần mua hàng cũng nhận được quà."],
            ["date" => "5/7 - 7/7/2024", "location" => "5S Quỳnh Phụ - Thái Bình", "description" => "Tặng quạt điều hòa & 6000 phần quà miễn phí! Khách không cần mua hàng cũng nhận được quà."],
            ["date" => "5/7 - 7/7/2024", "location" => "5S Mỹ Đức - Hà Nội", "description" => "Tặng quạt điều hòa & 6000 phần quà miễn phí! Khách không cần mua hàng cũng nhận được quà."],
            ["date" => "5/7 - 7/7/2024", "location" => "5S Nam Trung - Thái Bình", "description" => "Tặng quạt điều hòa & 6000 phần quà miễn phí! Khách không cần mua hàng cũng nhận được quà."],
        ];

        foreach ($news as $item) {
            echo '<div class="news-item">';
            echo '<h5>' . $item['location'] . '</h5>';
            echo '<p>' . $item['description'] . '</p>';
            echo '<p><small>' . $item['date'] . '</small></p>';
            echo '</div>';
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
