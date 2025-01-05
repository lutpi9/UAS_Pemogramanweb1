<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Cafe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffe6f2;
            color: #333;
        }
        header {
            background-color: #ff99cc;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .hero {
            text-align: center;
            padding: 50px;
            background-color: #ffcce6;
            position: relative;
            overflow: hidden;
        }
        .hero h2 {
            font-size: 2em;
            margin-bottom: 20px;
            animation: fadeIn 2s ease-in;
        }
        .hero p {
            font-size: 1.2em;
            margin: 0;
            animation: fadeIn 2s ease-in 1s;
        }
        .hero img {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: auto;
            opacity: 0.3;
            z-index: -1;
        }
        .menu-section {
            padding: 40px;
            background-color: #ffd1dc;
        }
        .menu-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .menu-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .menu-item {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #f6aece;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            animation: slideUp 1s ease;
        }
        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .menu-item:hover img {
            transform: scale(1.1);
        }
        .menu-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .menu-item h3 {
            margin: 0;
            padding: 15px;
            font-size: 1.5em;
            background-color: #e16fab;
            color: white;
        }
        .menu-item p {
            padding: 15px;
            font-size: 1em;
        }
        footer {
            background-color: #e16fab;
            color: white;
            text-align: center;
            padding: 15px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Kuliner Cafe</h1>
        
    </header>

    <div class="hero">
        <img src="https://via.placeholder.com/1920x1080" alt="Cafe Background">
        <h2>Rasakan Kenikmatan Kuliner Terbaik</h2>
        <p>Kami menyajikan berbagai hidangan tradisional yang kaya akan rasa dan cita rasa yang akan memanjakan lidah Anda. Dari hidangan nasi hangat hingga makanan penutup yang manis, Kuliner Tradisional adalah tempat yang sempurna untuk menikmati momen santai bersama teman dan keluarga.

Setiap hidangan kami dibuat dengan bahan-bahan alami pilihan dan resep turun-temurun yang telah terjaga keaslian rasanya. Kami percaya bahwa makanan tradisional adalah sebuah warisan budaya yang tidak hanya dinikmati oleh lidah, tetapi juga menyentuh hati dan jiwa.</p>
        <p>Setiap menu kami dibuat dengan bahan berkualitas tinggi dan sentuhan cinta dari para koki kami. Kami percaya bahwa makanan adalah seni yang harus dinikmati tidak hanya oleh lidah, tetapi juga oleh hati.</p>
    </div>

    <section class="menu-section" id="menu">
        <h2>Menu Spesial Kami</h2>
        <div class="menu-grid">
            <div class="menu-item">
                <img src="image/download (8).jpg" alt="rendang">
                <h3>Rendang</h3>
                <p>hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan.</p>
            </div>
            <div class="menu-item">
                <img src="image/Not Just Pempek, This Is Palembang's Special Food That Travelers Should Try.jpg" alt="Empek-Empek">
                <h3>Empek-Empek</h3>
                <p>Pempek terbuat dari campuran daging ikan giling, tapioka, air, dan bumbu-bumbu, yang biasanya disajikan dengan kuah cuko .a.</p>
            </div>
            <div class="menu-item">
                <img src="image/Not Just Pempek, This Is Palembang's Special Food That Travelers Should Try.jpg" alt="Kerak Telur">
                <h3>Kerak Telur</h3>
                <p>makanan tradisional Betawi yang terbuat dari telur dan beras ketan, serta disajikan dengan berbagai bahan dan bumbu.</p>
            </div>
            <div class="menu-item">
                <img src="image/Surabi Bandung, Legenda Kuliner Dari Tatar Sunda – NativeIndonesia_com.jpg" alt="Surabi">
                <h3>Surabi</h3>
                <p>jajanan tradisional yang berasal dari Indonesia yang diperkirakan sudah dikenal sejak zaman Kerajaan Mataram..</p>
            </div>
            <div class="menu-item">
                <img src="image/Resep Gudeg Nangka Khas Jogja, Perpaduan Manis dan Gurih! (1).jpg" alt="gudeg">
                <h3>gudeg</h3>
                <p>makanan khas Yogyakarta dengan berbagai macam pengembangan vasiasi yang melekat di dalamnya.</p>
            </div>
            <div class="menu-item">
                <img src="image/Resep Pembaca_ Resep Ayam Betutu Gilimanuk yang Pedas Gurih Berempah (1).jpg" alt="Ayaam betutu">
                <h3>Ayam betutu</h3>
                <p> makanan tradisional khas Bali yang terbuat dari ayam atau bebek utuh yang berisi bumbu, kemudian dipanggang dalam api sekam.</p>
            </div>
            <div class="menu-item">
                <img src="image/5 Makanan Khas Papua Yang Terkenal.jpg" alt="papeda">
                <h3>papeda</h3>
                <p>makanan khas dari Papua, Maluku, dan beberapa daerah di Sulawesi yang terbuat dari tepung sagu.</p>
            </div>
            <div class="menu-item">
                <img src="image/Foto Nasi Goreng Aesthetic.jpg" alt="image/Foto Nasi Goreng Aesthetic.jpg">
                <h3>Nasi Goreng Spesial</h3>
                <p>Nasi goreng dengan tambahan ayam, udang, dan bumbu khas yang menggoda selera.</p>
            </div>
            <div class="menu-item">
                <img src="image/Resep membuat Wedang Jahe Banyak Khasiat dan Manfaat - TOPWISATA.jpg" alt="wedang jahe ">
                <h3>wedang jahe</h3>
                <p>hidangan minuman sari jahe tradisional dari daerah Jawa Tengah, DI Yogyakarta dan Jawa Timur.</p>
            </div>
            <div class="menu-item">
                <img src="image/Sekoteng, Khas Jawa Tengah.jpg" alt="sekoteng">
                <h3>sekoteng</h3>
                <p> minuman khas Jawa Tengah yang terbuat dari air jahe yang biasa dihidangkan dalam keadaan panas dan dikonsumsi pada malam hari.</p>
            </div>
        </div>
        <p style="text-align: center; margin-top: 20px;">Kami terus menambahkan menu baru untuk memberikan lebih banyak pilihan kepada pelanggan kami. Jangan lupa untuk mencoba menu spesial musiman kami yang hanya tersedia dalam waktu terbatas!</p>
    </section>

    <footer>
        <p>&copy; 2024 Kuliner Cafe. All Rights Reserved.</p>
        <p>Alamat: Jalan Kuliner No. 123, Kota Selera, Indonesia | Kontak: 0812-3456-7890 | Email: info@kulinerlutpiah-cafe.com</p>
    </footer>
</body>
</html>
