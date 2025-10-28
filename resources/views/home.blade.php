<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Tiket Wisata</title>
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
        background-size: cover;
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
        backdrop-filter: blur(10px);
        padding: 40px;
        border-radius: 25px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        border: 2px solid rgba(255,255,255,0.4);
        max-width: 600px;
        width: 90%;
    }

    h1 {
        font-size: 28px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        text-shadow: 0 0 5px rgba(0,0,0,0.3);
    }

    ul { list-style: none; padding: 0; }

    li { margin: 12px 0; }

    a {
        text-decoration: none;
        font-weight: 600;
        color: #ffffff;
        background: #00b7ffcd;
        padding: 12px 25px;
        border-radius: 50px;
        transition: 0.3s;
        display: inline-block;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }

    a:hover {
        background: #ffffff;
        color: #0077b6;
        transform: translateY(-3px);
    }
</style>
</head>
<body>
    <div class="bubble" style="left:10%; animation-delay: 0s;">🫧</div>
    <div class="bubble" style="left:25%; animation-delay: 2s;">🐟</div>
    <div class="bubble" style="left:40%; animation-delay: 1s;">🫧</div>
    <div class="bubble" style="left:60%; animation-delay: 3s;">🐠</div>
    <div class="bubble" style="left:80%; animation-delay: 0.5s;">🦀</div>

    <div class="container">
        <h1>Selamat Datang</h1>
        <h1>Pilih tiket wisata anda 😄</h1>
        <ul>
            <li><a href="/tiket/Papuma/20000?tema=laut">Tiket Papuma</a></li>
            <li><a href="/tiket/Watu_Ulo/15000?tema=laut">Tiket Watu Ulo</a></li>
            <li><a href="/tiket/Pancer_Puger/10000?tema=laut">Tiket Pancer Puger</a></li>
        </ul>
    </div>
</body>
</html>