<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#222;
            font-family:Arial;
        }

        .phone{
            width:390px;
            height:844px;
            background:#e6db00;
            margin:20px auto;
            border:12px solid black;
            border-radius:40px;
            overflow-y:auto;
            overflow-x:hidden;
            text-align:center;
        }

        .logo{
            width:120px;
            margin-top:30px;
        }

        .title{
            font-weight:bold;
            margin-top:20px;
        }

        .red-box{
            background:#d50000;
            margin-top:30px;
            min-height:750px;
            border-top-left-radius:220px;
            border-top-right-radius:220px;
            padding:30px;
        }

        .profile-img{
            width:180px;
            height:180px;
            border-radius:50%;
            object-fit:cover;
            margin-top:20px;
        }

        .label{
            color:#ffe600;
            font-weight:bold;
            text-align:left;
            display:block;
            margin-top:25px;
        }

        .info-box{
            background:white;
            padding:12px;
            border-radius:10px;
            font-weight:bold;
            text-align:left;
        }

        .home-btn{
            background:#ffe600;
            border-radius:30px;
            padding:15px 60px;
            text-decoration:none;
            color:red;
            display:inline-block;
            font-weight:bold;
            margin-top:40px;
        }

        .bottom-nav{
            background:orange;
            padding:10px;
            display:flex;
            justify-content:space-around;
            margin-top:40px;
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

    <img src="{{ asset('images/logo.png') }}" class="logo">

    <h1 class="title">Profile Details</h1>

    <div class="red-box">

        <img src="{{ asset('images/profile.jpg.png') }}" class="profile-img">

        <label class="label">NAMA</label>

        <div class="info-box">
            <span id="namaUser"></span>
        </div>

        <label class="label">EMAIL</label>

        <div class="info-box">
            user@gmail.com
        </div>

        <label class="label">ALAMAT</label>

        <div class="info-box">
            Taman Modern Blok B4 No.20
        </div>

        <label class="label">FAVORITE MENU</label>

        <div class="info-box">
            MIE GORENG LEVEL 1
        </div>

        <a href="/menu" class="home-btn">
            HOME
        </a>

        <div class="bottom-nav">

            <a href="/menu" class="nav-btn">🏠</a>

            <div class="nav-btn">❤</div>

<div class="nav-btn">🛒</div>

<div class="nav-btn">🔔</div>

        </div>

    </div>

</div>

<script>

let nama = localStorage.getItem("namaUser");

document.getElementById("namaUser").innerHTML = nama;

</script>

</body>
</html>