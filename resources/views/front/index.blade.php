<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran Siswa SMA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #df5555;
            color: rgb(0, 0, 0);
        }

        .header {
            padding: 20px;
            text-align: center;
            font-size: 24px; 
            font-weight: bold;
            background-color: #ffffff;
        }

        .hero {
            text-align: center;
            padding: 50px 20px;
        }

        .hero h1 {
            font-size: 36px;
            margin: 0 0 20px;
        }

        .hero p {
            font-size: 18px;
            margin: 0 0 30px;
            color: #dcdcdc;
        }

        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            padding: 30px;
            max-width: 1000px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
            width: 40%;
        }

        .sidebar button {
            background-color: #4b73d4;
            color: white;
            font-size: 16px;
            padding: 12px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-align: left;
            width: 100%;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .sidebar button:hover {
            background-color: #3a5ab0;
            transform: scale(1.02);
        }

        .image-container {
            width: 1000px; /* Ukuran tetap untuk gambar */
        height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        }

        .about {
            margin-top: 50px;
            padding: 20px;
            background-color: #f8f8fc;
            border-radius: 8px;
            text-align: center;
            color: #555;
            font-size: 16px;
        }


    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        Sistem Informasi Pendaftaran Siswa SMA
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <h1>All in one system for student registration</h1>
        <p>Effortlessly manage the registration process for your high school students.</p>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="sidebar">
            <button onclick="window.location.href='{{ route('register') }}'">Go to Register</button>
            <button onclick="window.location.href='{{ route('registration.status', ['id' => 1]) }}'">Check Registration Status</button>
            <button onclick="window.location.href='{{ route('documents.upload', ['id' => 1]) }}'">Upload Document</button>
            <button onclick="window.location.href='{{ route('payment', ['id' => 1]) }}'">Make Payment</button>
            <button onclick="window.location.href='{{ route('registerUser') }}'">Go to User Registration</button>
            <button onclick="window.location.href='{{ route('about', ['id' => 1]) }}'">Go to About</button>
            <button onclick="window.location.href='{{ route('login') }}'">Go to Login</button>
        </div>

        <div class="image-container">
            <img src="\assets\img\High School-rafiki.png" alt="High school registration">
        </div>
    </div>

    <!-- About Section -->
    <div class="about">
        <h3>About Sistem Informasi Pendaftaran</h3>
        <p>
            Sistem ini dirancang untuk mempermudah proses pendaftaran siswa baru di SMA.
            <br>Silakan gunakan menu navigasi di atas untuk melakukan berbagai aktivitas seperti pendaftaran, pembayaran, dan lainnya.
        </p>
    </div>

</body>
</html>
