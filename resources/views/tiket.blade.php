<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Tiket Wisata</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #6be0ff, #006b9e);
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .bubble {
            position: absolute;
            font-size: 25px;
            animation: rise 6s infinite linear;
            opacity: 0.8;
        }

        @keyframes rise {
            0% { transform: translateY(120%) scale(0.6); opacity: .3; }
            100% { transform: translateY(-20%) scale(1.2); opacity: 0; }
        }

        .container {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(12px);
            padding: 35px 45px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            border: 2px solid rgba(255,255,255,0.4);
            width: 90%;
            max-width: 450px;
        }

        h1 {
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            text-shadow: 0 0 5px rgba(0,0,0,0.3);
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            font-weight: 500;
            color: #ffffff;
            background: rgba(0,0,0,0.1);
            padding: 15px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .kembali a {
            text-decoration: none;
            font-weight: 700;
            color: #0077b6;
            background: #ffffff;
            padding: 10px 20px;
            border-radius: 30px;
            transition: .3s;
            display: inline-block;
        }

        .kembali a:hover {
            background: #00c3ff;
            color: #ffffff;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Animasi Laut -->
    <div class="bubble" style="left:10%; animation-delay: 0s;">🫧</div>
    <div class="bubble" style="left:28%; animation-delay: 1.5s;">🐠</div>
    <div class="bubble" style="left:50%; animation-delay: 0.5s;">🫧</div>
    <div class="bubble" style="left:70%; animation-delay: 2s;">🐟</div>
    <div class="bubble" style="left:85%; animation-delay: 3s;">🦀</div>

    <div class="container">
        <h1>Detail Tiket Wisata</h1>
        <p>
            Tempat Wisata: {{ $tempat }} <br>
            Harga Tiket: {{ $harga }}
        <div class="kembali">
            <a href="/">Kembali</a>
        </div>
    </div>
</body>
</html>