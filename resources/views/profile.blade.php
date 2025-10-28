<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil Mahasiswa</title>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #ffdde1, #ffc4d6);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
    }
    .card {
        background: white;
        padding: 30px 40px;
        border-radius: 25px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        text-align: center;
        animation: fadeInUp 1s ease-in-out;
    }
    h2 {
        color: #d63384;
        font-size: 28px;
        margin-bottom: 10px;
        animation: floating 3s infinite ease-in-out;
    }
    p {
        color: #444;
        font-size: 18px;
    }
    b {
        color: #ff4d8a;
    }
    @keyframes fadeInUp {
        0% {opacity: 0; transform: translateY(50px);}
        100% {opacity: 1; transform: translateY(0);}
    }
    @keyframes floating {
        0% {transform: translateY(0);}
        50% {transform: translateY(-8px);}
        100% {transform: translateY(0);}
    }
    .bubble {
        position: absolute;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: rgba(255,255,255,0.4);
        animation: rise 6s infinite ease-in;
    }
    @keyframes rise {
        0% {transform: translateY(100vh) scale(0.5); opacity: 0.6;}
        100% {transform: translateY(-10vh) scale(1.2); opacity: 0;}
    }
</style>
</head>
<body>
<div class="bubble" style="left:10%; animation-delay:1s;"></div>
<div class="bubble" style="left:30%; animation-delay:2s;"></div>
<div class="bubble" style="left:50%; animation-delay:0.5s;"></div>
<div class="bubble" style="left:70%; animation-delay:1.7s;"></div>
<div class="bubble" style="left:90%; animation-delay:3s;"></div>

<div class="card">
    <h2>Profil Mahasiswa</h2>
    <p>Halo, ini profil milik <b>{{ $Nafiah }}</b></p>
</div>
</body>
</html>