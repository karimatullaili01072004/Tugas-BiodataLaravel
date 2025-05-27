<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .biodata-container {
            background-color: #ffffff;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        li:last-child {
            border-bottom: none;
        }

        strong {
            display: inline-block;
            width: 100px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="biodata-container">
        <h1>Biodata Diri</h1>
        <ul>
            <li><strong>Nama:</strong> {{ $biodata['nama'] }}</li>
            <li><strong>Umur:</strong> {{ $biodata['umur'] }} tahun</li>
            <li><strong>Alamat:</strong> {{ $biodata['alamat'] }}</li>
            <li><strong>Email:</strong> {{ $biodata['email'] }}</li>
            <li><strong>Pekerjaan:</strong> {{ $biodata['pekerjaan'] }}</li>
        </ul>
    </div>
</body>
</html>
