<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #007BFF;
            font-size: 2em;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 1.1em;
            margin-bottom: 5px;
            color: #333;
        }
        select, input[type="file"] {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1em;
        }
        button {
            padding: 12px;
            font-size: 1.1em;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        .form-group {
            margin-bottom: 20px;
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
        <h1>Upload Document</h1>
        <form method="POST" action="{{ route('documents.upload.process') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="hidden" name="student_id" value="{{ $student_id }}">
                
                <label for="document_type">Select Document Type</label>
                <select name="document_type" id="document_type" required>
                    <option value="birth_certificate">Birth Certificate</option>
                    <option value="report_card">Report Card</option>
                    <option value="photo">Photo</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="file_path">Upload Document</label>
                <input type="file" name="file_path" id="file_path" required>
            </div>

            <button type="submit">Upload</button>
        </form>

        <button class="back-button" onclick="window.location.href='{{ route('front.index') }}'">Back to Dashboard</button>
    </div>

</body>
</html>
