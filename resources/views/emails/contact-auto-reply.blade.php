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
            color: rgb(239, 195, 202);
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
            background-color: rgb(239, 195, 202);
            color: #000000;
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
        <h1>Kedves <strong>{{ $data['username'] }}</strong>!</h1>
        <p>Köszönöm, hogy felvetted velem a kapcsolatot, és megosztottad velem az alvási nehézségeiteket.</p>

        <p>A következő lépésként hamarosan e-mailben kereslek az általad megadott címen, hogy egyeztessük a tanácsadás
            időpontját, és minden további részletet megbeszéljünk.</p>

        <p>📩 <strong>Kérlek, figyeld a bejövő (és a spam) mappáidat is</strong>, hogy biztosan megkapd a válaszom.<br>
            Ha bármi kérdésed lenne addig is, írj bátran a <a href="mailto:hello@pihenjbaba.hu">hello@pihenjbaba.hu</a>
            email címemre.</p>

        <p>Üdvözlettel:<br>
            <strong>Orsi</strong>
        </p>
        <p>
            Bod Orsolya<br>
           <strong>Pihenj Baba</strong><br>
            <a href="mailto:hello@pihenjbaba.hu">hello@pihenjbaba.hu</a><br>
            +36 20 560 7609
        </p>

        <p>
            <a href="https://www.facebook.com/profile.php?id=61574071451804" target="_blank">Facebook</a> |
            <a href="https://www.instagram.com/pihenjbaba" target="_blank">Instagram</a> |
            <a href="https://www.tiktok.com/@pihenjbaba" target="_blank">TikTok</a> |
            <a href="https://linktr.ee/pihenjbaba" target="_blank">Linktree</a>
        </p>
        <a href="{{ url('/') }}" class="button">Vissza a főoldalra</a>
        <div class="footer">
            <p>Ez egy automatikus válasz, kérjük, ne válaszolj erre az emailre.</p>
        </div>
    </div>
</body>

</html>
