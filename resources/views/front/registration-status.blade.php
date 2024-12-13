<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
        }

        h1 {
            color: #007BFF;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .status-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .status-info p {
            font-size: 1.2em;
            margin: 10px 0;
            color: #555;
        }

        .status-info p strong {
            color: #333;
        }

        .status-info .status {
            font-size: 1.5em;
            font-weight: bold;
            color: #28a745; /* Green color for success status */
        }

        .status-info .program-choice {
            color: #007bff;
        }

        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 1.2em;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .back-button:active {
            transform: translateY(2px);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Registration Status</h1>

        <div class="status-info">
            <p><strong>Status:</strong> <span class="status">{{ $registration->status }}</span></p>
            
        </div>

        <a href="{{ route('front.index') }}" class="back-button">Back to Front Page</a>
    </div>

</body>
</html>
