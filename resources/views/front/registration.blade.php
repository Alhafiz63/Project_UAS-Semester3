<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>

<h2>Form Pendaftaran Siswa</h2>

<form action="{{ route('register.process') }}" method="POST">
    @csrf
    <label for="registration_number">Nomor Pendaftaran:</label><br>
    <input type="text" name="registration_number" required><br>

    <label for="name">Nama Lengkap:</label><br>
    <input type="text" name="name" required><br>

    <label for="gender">Jenis Kelamin:</label><br>
    <select name="gender" required>
        <option value="male">Laki-laki</option>
        <option value="female">Perempuan</option>
    </select><br>

    <label for="birth_date">Tanggal Lahir:</label><br>
    <input type="date" name="birth_date" required><br>

    <label for="birth_place">Tempat Lahir:</label><br>
    <input type="text" name="birth_place" required><br>

    <label for="address">Alamat:</label><br>
    <textarea name="address" required></textarea><br>

    <label for="phone">Nomor Telepon:</label><br>
    <input type="text" name="phone"><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" required><br>

    <label for="previous_school">Sekolah Sebelumnya:</label><br>
    <input type="text" name="previous_school"><br>

    <label for="parent_name">Nama Orang Tua:</label><br>
    <input type="text" name="parent_name" required><br>

    <label for="parent_contact">Kontak Orang Tua:</label><br>
    <input type="text" name="parent_contact"><br>

    <button type="submit">Daftar</button>
</form>

</body>
</html>