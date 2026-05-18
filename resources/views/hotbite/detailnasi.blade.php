<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Nasi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#222;
    font-family:Arial;
}

.phone{
    width:390px;
    height:844px;
    background:#ffe600;
    margin:20px auto;
    border:12px solid black;
    border-radius:40px;
    overflow-y:auto;
    overflow-x:hidden;
}

.content{
    padding:30px;
    text-align:center;
}

.food-img{
    width:250px;
    border-radius:30px;
    margin-top:30px;
}

.box{
    background:#d50000;
    color:#ffe600;
    padding:20px;
    border-radius:30px;
    margin-top:30px;
}

.btn-buy{
    background:white;
    color:red;
    padding:15px 40px;
    border-radius:30px;
    text-decoration:none;
    font-weight:bold;
    display:inline-block;
    margin-top:30px;
}

.bottom-nav{
    background:orange;
    padding:10px;
    margin-top:40px;
    display:flex;
    justify-content:space-around;
}

.nav-btn{
    background:#d50000;
    width:50px;
    height:50px;
    border-radius:50%;
    text-align:center;
    line-height:50px;
    text-decoration:none;
    font-size:24px;
}

</style>

</head>
<body>

<div class="phone">

<div class="content">

<img src="{{ asset('images/nasgor.png') }}" class="food-img">

<div class="box">

<h2>NASI GORENG</h2>

<p>
Nasi goreng spesial pedas favorit semua orang (level 2).
</p>

<h4>Rp 18.000</h4>

<a href="/checkout" class="btn-buy">
CHECKOUT
</a>

</div>

<div class="bottom-nav">

<a href="/menu" class="nav-btn">🏠</a>

<div class="nav-btn">❤</div>

<div class="nav-btn">🛒</div>

<div class="nav-btn">🔔</div>

</div>

</div>

</div>

</body>
</html>