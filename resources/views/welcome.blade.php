<?php
    // ----- KHU VỰC TÙY CHỈNH DỄ DÀNG -----

    // Thay đổi thông tin cá nhân của bạn tại đây
    $your_name = "Nguyễn Văn A";
    $your_bio = "Xin chào! Tôi là một người đam mê công nghệ và xe hơi, người đã tạo ra trang web này với mong muốn mang những sản phẩm chất lượng của MG đến gần hơn với mọi người. Tôi hy vọng sẽ cung cấp thông tin chi tiết và hữu ích nhất về các dòng xe MG tại Việt Nam.";
    $your_avatar_url = "https://via.placeholder.com/150"; // Dán URL ảnh đại diện của bạn vào đây

    // Tên trang web
    $site_title = "Web Bán Hàng MG";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng đến với <?php echo htmlspecialchars($site_title); ?></title>
    
    <style>
        /* --- Cài đặt chung & Biến màu --- */
        :root {
            --primary-color: #C20000; /* Màu đỏ đặc trưng của MG */
            --secondary-color: #222;
            --text-color: #333;
            --light-gray-color: #f4f4f4;
            --background-dark: #1a1a1a;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: var(--text-color);
            background-color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- Header --- */
        header {
            background: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 40px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: var(--primary-color);
        }

        /* --- Phần Hero (Giới thiệu chính) --- */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            padding: 0 20px;
        }

        .hero-content {
            max-width: 800px;
        }

        /* --- Phần Giới thiệu về tôi --- */
        .about-me {
            padding: 60px 0;
            background: var(--light-gray-color);
        }

        .about-me h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .about-me-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            text-align: center;
        }

        @media (min-width: 768px) {
            .about-me-content {
                flex-direction: row;
                text-align: left;
                gap: 40px;
            }
        }

        .avatar img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .bio {
            flex: 1;
        }

        /* --- Footer --- */
        footer {
            background: var(--background-dark);
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .admin-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .admin-link a:hover {
            color: #fff;
        }

        /* --- Hiệu ứng Slomotion (Animation) --- */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }


        .slomotion-title {
            animation: fadeInUp 1.5s ease-out forwards;
        }

        .slomotion-text {
            animation: fadeInUp 1.5s ease-out 0.5s forwards;
            opacity: 0; /* Bắt đầu ẩn đi để animation có hiệu lực */
        }

        .slomotion-avatar {
             animation: zoomIn 1.5s ease-out forwards;
             opacity: 0;
        }

    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/MG_Motor_logo.svg/1200px-MG_Motor_logo.svg.png" alt="MG Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1 class="slomotion-title">Chào mừng đến với <?php echo htmlspecialchars($site_title); ?></h1>
                <p class="slomotion-text">Khám phá sự kết hợp hoàn hảo giữa thiết kế Anh Quốc tinh tế và công nghệ hiện đại. MG cam kết mang đến những trải nghiệm lái xe đầy hứng khởi và an toàn.</p>
            </div>
        </section>

        <section class="about-me">
            <div class="container">
                <h2 class="slomotion-title">Vài nét về người sáng lập</h2>
                <div class="about-me-content">
                    <div class="avatar slomotion-avatar">
                        <img src="<?php echo htmlspecialchars($your_avatar_url); ?>" alt="Ảnh đại diện của <?php echo htmlspecialchars($your_name); ?>">
                    </div>
                    <div class="bio slomotion-text">
                        <h3><?php echo htmlspecialchars($your_name); ?></h3>
                        <p><?php echo htmlspecialchars($your_bio); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($site_title); ?>. Thiết kế bởi <?php echo htmlspecialchars($your_name); ?>.</p>
            <p class="admin-link">
                <a href="categories.php">Truy cập trang Admin (Categories)</a>
            </p>
        </div>
    </footer>

</body>
</html>
