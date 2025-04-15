<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Köszönjük a kapcsolatfelvételt!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Köszönjük, {{ $data['username'] }}!</h1>
        <p>Megkaptuk a kapcsolatfelvételi üzenetét. Az üzenetét hamarosan feldolgozzuk, és egy munkatársunk válaszol Önnek néhány órán belül.</p>
        <p>Ha bármilyen kérdése van, ne habozzon ismételten felvenni velünk a kapcsolatot.</p>
        <p>Üdvözlettel,<br>Pihenjbaba.hu csapata</p>
        <a href="{{ url('/') }}" class="button">Vissza a főoldalra</a>
        <div class="footer">
            <p>Ez egy automatikus válasz, kérjük, ne válaszoljon erre az emailre.</p>
        </div>
    </div>
</body>
</html>
