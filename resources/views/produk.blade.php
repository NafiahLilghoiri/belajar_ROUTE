<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Produk</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #ffd1dc, #a8e7ff);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
    }
    .card {
        background: rgba(255,255,255,0.85);
        padding: 40px 50px;
        border-radius: 30px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        text-align: center;
        animation: fadeIn 1.2s ease-in-out;
        backdrop-filter: blur(10px);
    }
    h2 {
        color: #ff4fa7;
        font-size: 30px;
        margin-bottom: 10px;
        animation: floating 3s infinite ease-in-out;
    }
    p {
        font-size: 20px;
        color: #333;
    }
    b {
        color: #0077c8;
    }
    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(40px);} 
        to {opacity: 1; transform: translateY(0);} 
    }
    @keyframes floating {
        0% {transform: translateY(0);} 
        50% {transform: translateY(-10px);} 
        100% {transform: translateY(0);} 
    }
    .flower {
    position: absolute;
    font-size: 30px;
    animation: fall 7s infinite linear;
    }

    @keyframes fall {
        0% {transform: translateY(-10vh) rotate(0deg);} 
        100% {transform: translateY(110vh) rotate(360deg);} 
    }
</style>
</head>
<body>
<div class="flower" style="left:5%; animation-delay:0s;">🌸</div>
<div class="flower" style="left:25%; animation-delay:1.2s;">🌷</div>
<div class="flower" style="left:50%; animation-delay:0.4s;">💐</div>
<div class="flower" style="left:75%; animation-delay:2s;">🌺</div>
<div class="flower" style="left:90%; animation-delay:0.8s;">🌼</div>

<div class="card">
    <h2>Detail Produk</h2>
    <p>Kategori: <b>{{ $kategori }}</b></p>
    <p>ID Produk: <b>{{ $id }}</b></p>
</div>
</body>
</html>