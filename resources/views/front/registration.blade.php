<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }
        .form-control, .form-select {
            margin-bottom: 20px;
        }
        .form-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
        }
        .form-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Pendaftaran Siswa</h2>

    <form action="{{ route('register.process') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="registration_number" class="form-label">Nomor Pendaftaran:</label>
            <input type="text" class="form-control" name="registration_number" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin:</label>
            <select name="gender" class="form-select" required>
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="birth_date" class="form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" name="birth_date" required>
        </div>

        <div class="mb-3">
            <label for="birth_place" class="form-label">Tempat Lahir:</label>
            <input type="text" class="form-control" name="birth_place" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat:</label>
            <textarea name="address" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon:</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label for="previous_school" class="form-label">Sekolah Sebelumnya:</label>
            <input type="text" class="form-control" name="previous_school">
        </div>

        <div class="mb-3">
            <label for="parent_name" class="form-label">Nama Orang Tua:</label>
            <input type="text" class="form-control" name="parent_name" required>
        </div>

        <div class="mb-3">
            <label for="parent_contact" class="form-label">Kontak Orang Tua:</label>
            <input type="text" class="form-control" name="parent_contact">
        </div>

        <button type="submit" class="form-button">Daftar</button>
    </form>
</div>

<!-- Link to Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
