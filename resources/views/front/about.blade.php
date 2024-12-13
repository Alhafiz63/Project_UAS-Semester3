<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Programmers</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        h1 {
            text-align: center;
            color: #007BFF;
            font-size: 2.5em;
            margin-bottom: 30px;
        }
        .programmer-card {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .programmer-card h2 {
            color: #333;
            font-size: 1.8em;
            margin-bottom: 10px;
        }
        .programmer-card p {
            font-size: 1.1em;
            margin-bottom: 8px;
            color: #555;
        }
        .programmer-card img {
            border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
            border: 2px solid #ddd; /* Menambahkan border pada gambar */
            margin-top: 10px;
        }
        .programmer-card .no-avatar {
            color: #ff0000;
            font-style: italic;
        }
        .avatar-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .avatar-container img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        hr {
            margin-top: 20px;
            border-top: 1px solid #eee;
        }

        .back-button {
        display: block;
        width: 220px;
        margin: 30px auto;
        padding: 12px;
        text-align: center;
        font-size: 1.2em;
        color: white;
        background-color: #007BFF;
        border: none;
        border-radius: 50px; /* Membuat tombol berbentuk oval */
        cursor: pointer;
        transition: all 0.3s ease; /* Animasi halus saat hover */
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3); /* Menambahkan bayangan untuk efek kedalaman */
    }

    .back-button:hover {
        background-color: #0056b3; /* Ganti warna saat hover */
        transform: translateY(-3px); /* Efek mengangkat tombol */
        box-shadow: 0 6px 12px rgba(0, 123, 255, 0.4); /* Bayangan lebih tajam saat hover */
    }

    .back-button:active {
        transform: translateY(1px); /* Efek ditekan dengan sedikit turun */
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3); /* Kembalikan bayangan ke normal saat ditekan */
    }
    </style>
</head>
<body>

    <div class="container">
        <h1>About Programmers</h1>

        @foreach($programmers as $programmer)
            <div class="programmer-card">
                <div class="avatar-container">
                    @if($programmer->avatar)
                        <img src="{{ asset('storage/' . $programmer->avatar) }}" alt="Avatar">
                    @else
                        <p class="no-avatar">No avatar available</p>
                    @endif
                </div>
                <h2>{{ $programmer->name }}</h2>
                <p><strong>Email:</strong> {{ $programmer->email }}</p>
                <p><strong>Bio:</strong> {{ $programmer->bio }}</p>
            </div>
            <hr>
        @endforeach
        <button class="back-button" onclick="window.location.href='{{ route('front.index') }}'">Back to Dashboard</button>

    </div>

</body>
</html>
